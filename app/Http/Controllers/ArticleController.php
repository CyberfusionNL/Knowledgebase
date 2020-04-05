<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    public function show(Request $request, $type, $slug)
    {
        $article = Article::where('slug', $slug)->where('type', $type)->firstOrFail();
        $validator = Validator::make($request->only(['vote']), [
            'vote' => 'string|in:up,down',
        ]);

        $validated = $validator->validated();
        if (! hasVoted($article->id) && $validated) {
            if ($validated['vote'] == 'up') {
                $article->upvotes++;
                vote($article->id);
            } elseif ($validated['vote'] == 'down') {
                $article->downvotes++;
                vote($article->id, 'down');
            }
            $article->save();
        }

        return view('admin.articles.preview')
            ->with('page', substr($article['title'], 0, 32))
            ->with('desc', $article['short_summary'])
            ->with('next', getNextArticle($article))
            ->with('article', $article->toArray());
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
}
