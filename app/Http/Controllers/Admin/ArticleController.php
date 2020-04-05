<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function articles()
    {
        return view('admin.articles')->with('articles', Article::all());
    }

    public function delete(Request $request, $id)
    {
        Article::find($id)->delete();

        return redirect()->route('admin.articles');
    }

    public function search(Request $request)
    {
        $validator = Validator::make($request->only(['search']), [
            'search' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect(url()->previous())->withErrors($validator->errors());
        }
        $validated = $validator->validated();

        $articles = Article::where('state', Article::PUBLISHED)
            ->Where('body', 'LIKE', '%'.$validated['search'].'%')
            ->orWhere('title', 'LIKE', '%'.$validated['search'].'%')
            ->orWhere('short_summary', 'LIKE', '%'.$validated['search'].'%')->get();

        return view('articles.search', ['articles' => $articles]);
    }

    public function newArticle()
    {
        return view('admin.articles.new');
    }

    public function store(ArticleRequest $request)
    {
        $validated = $request->validated();
        try {
            $category = Category::findOrFail($validated['category']);
        } catch (ModelNotFoundException $e) {
            return view('admin.articles.new')->withErrors([$e->getMessage()]);
        }
        $author = auth()->user()->author;
        $article = new Article;
        $article->title = $validated['title'];
        $article->short_summary = $validated['summary'];
        $article->body = $validated['body'];
        $article->state = $validated['state'];
        $article->type = $category->type;
        if (! empty($validated['slug'])) {
            $article->slug = Str::slug($validated['slug']);
        } else {
            $article->slug = Str::slug($article->title);
        }
        $article->author_id = $author->id;
        $article->category_id = $validated['category'];
        if ($article->state == Article::PUBLISHED) {
            $article->publish_date = Carbon::now()->toDateTimeString();
        }
        $article->save();

        return redirect()->route('admin.articles');
    }

    public function update(ArticleRequest $request, $id)
    {
        $validated = $request->validated();
        try {
            $category = Category::findOrFail($validated['category']);
        } catch (ModelNotFoundException $e) {
            return view('admin.articles.new')->withErrors([$e->getMessage()]);
        }

        $article = Article::findOrFail($id);
        $article->title = $validated['title'];
        $article->short_summary = $validated['summary'];
        $article->body = $validated['body'];
        $article->state = $validated['state'];
        $article->type = $category->type;
        if (! empty($validated['slug'])) {
            $article->slug = Str::slug($validated['slug']);
        } else {
            $article->slug = Str::slug($article->title);
        }
        $article->category_id = $validated['category'];
        if ($article->state == Article::PUBLISHED) {
            $article->publish_date = Carbon::now()->toDateTimeString();
        }
        $article->save();

        return redirect()->route('admin.articles');
    }

    public function article($id)
    {
        return view('admin.articles.update')->with('article', Article::findOrFail($id)->toArray());
    }

    public function preview($id)
    {
        $article = Article::findOrFail($id);

        return view('admin.articles.preview')
            ->with('article', $article->toArray())
            ->with('next', getNextArticle($article));
    }

    public function image(Request $request)
    {
        $file = $request->file('upload');

        $orignalName = $file->getClientOriginalName();
        if (Storage::exists(sprintf('uploads/images/%s', $orignalName))) {
            return [
                'uploaded' => (int) 0,
                'error' => (object) [
                    'message' => 'File already exists...'
                ]
            ];
        }

        $file->storeAs('uploads/images', $orignalName);
        $maxSize = 1000000*16; // Max 16 mb

        if ($file->getSize() > $maxSize) {
            return [
                'uploaded' => (int) 0,
                'error' => (object) [
                    'message' => 'File is greater than 16 Megabytes'
                ]
            ];
        } else {
            return [
                'uploaded' => (int) 1,
                'fileName' => $file->getClientOriginalName(),
                'url' => route('asset.image', $file->getClientOriginalName())
            ];
        }
    }

    public function browseImages(Request $request, $page = 1)
    {
        if ($page < 1) {
            $page = 1;
        }
        $perPage = 16;
        $images = Storage::allFiles('uploads/images');

        $images = array_chunk($images, $perPage);
        $imageList = array_map(function ($value) {
            return last(explode('/', $value));
        }, $images[$page - 1]);

        return view('admin.browse.images', ['images' => $imageList]);
    }
}
