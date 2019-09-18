<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function articles()
    {
        return view('admin.articles');
    }

    public function newArticle(Request $request)
    {
        return view('admin.articles.new');
    }

    public function article($id)
    {
        return view('admin.articles');
    }
}
