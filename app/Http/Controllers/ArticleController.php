<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($slug)
    {
        return view('admin.articles.preview')->with('article', Article::where('slug', $slug)->firstOrFail()->toArray());
    }
}
