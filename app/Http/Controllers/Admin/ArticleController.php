<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function articles()
    {
        return view('admin.articles')->with('articles', Article::all());
    }

    public function delete(Request $request, Article $article)
    {
        $article->delete();

        return redirect()->route('admin.articles');
    }

    public function newArticle()
    {
        return view('admin.articles.new');
    }

    public function store(ArticleRequest $request)
    {
        Article::create($request->validated());
//        Todo: catch slug exists

        return redirect()->route('admin.articles');
    }

    public function update(ArticleRequest $request, Article $article)
    {
        $article->update($request->validated());

        return redirect()->route('admin.articles');
    }

    public function article(Article $article)
    {
        return view('admin.articles.update')->with('article', $article->toArray());
    }

    public function preview(Article $article)
    {
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
                    'message' => 'File already exists...',
                ],
            ];
        }

        $file->storeAs('uploads/images', $orignalName);
        $maxSize = 1000000 * 16; // Max 16 mb

        if ($file->getSize() > $maxSize) {
            return [
                'uploaded' => (int) 0,
                'error' => (object) [
                    'message' => 'File is greater than 16 Megabytes',
                ],
            ];
        } else {
            return [
                'uploaded' => (int) 1,
                'fileName' => $file->getClientOriginalName(),
                'url' => route('asset.image', $file->getClientOriginalName()),
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
