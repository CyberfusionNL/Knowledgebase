<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{

    const PUBLISHED = 'published';
    const DRAFT = 'draft';
    const PLANNED = 'planned';
    const REVIEW = 'review';

    public function articles()
    {
        return view('admin.articles');
    }

    public function newArticle()
    {
        return view('admin.articles.new');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->only(['title', 'body', 'state']), [
            'title' => 'required|string|max:64',
            'body' => 'required|string',
            'state' => 'required|string|in:review,published,draft,planned'
        ]);

        if ($validator->fails()) return view('admin.articles.new')->withErrors($validator->errors());
        $validated = $validator->validated();

        $author = auth()->user()->author;
        $article = new Article;
        $article->title = $validated['title'];
        $article->body = $validated['body'];
        $article->state = $validated['state'];
        $article->author_id = $author->id;
        if ($article->state == self::PUBLISHED) {
            $article->published_date = Carbon::now()->toDateTimeString();
        }
        $article->save();
        return redirect()->route('admin.articles');
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->only(['title', 'body', 'state']), [
            'title' => 'required|string|max:64',
            'body' => 'required|string',
            'state' => 'required|string|in:review,published,draft,planned'
        ]);

        if ($validator->fails()) return view('admin.articles.new')->withErrors($validator->errors());
        $validated = $validator->validated();

        $author = auth()->user()->author;

        $article = Article::findOrFail($id);
        $article->title = $validated['title'];
        $article->body = $validated['body'];
        $article->state = $validated['state'];
        if ($article->state == self::PUBLISHED) {
            $article->published_date = Carbon::now()->toDateTimeString();
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
