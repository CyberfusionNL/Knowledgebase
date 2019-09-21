<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Http\Requests\ArticleRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ArticleController extends Controller
{

    public function articles()
    {
        return view('admin.articles')->with('articles', Article::where('state', Article::PUBLISHED)->get());
    }

    public function newArticle()
    {
        return view('admin.articles.new');
    }

    public function store(ArticleRequest $request)
    {
        $validated = $request->validated();

        $author = auth()->user()->author;
        $article = new Article;
        $article->title = $validated['title'];
        $article->short_summary = $validated['summary'];
        $article->body = $validated['body'];
        $article->state = $validated['state'];
        $article->type = $validated['arttype'];
        if(!empty($validated['slug'])) {
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

        $article = Article::findOrFail($id);
        $article->title = $validated['title'];
        $article->short_summary = $validated['summary'];
        $article->body = $validated['body'];
        $article->state = $validated['state'];
        $article->type = $validated['arttype'];
        if(!empty($validated['slug'])) {
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
        return view('admin.articles.preview')->with('article', Article::findOrFail($id)->toArray());
    }
}
