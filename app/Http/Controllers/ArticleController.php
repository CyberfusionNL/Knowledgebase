<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($type, $slug)
    {
        $article = Article::where('slug', $slug)->where('type', $type)->firstOrFail()->toArray();
        return view('admin.articles.preview')
            ->with('page', substr($article['title'], 0, 32))
            ->with('desc', $article['short_summary'])
            ->with('article', $article);
    }
}
