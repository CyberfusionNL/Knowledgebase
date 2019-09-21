<?php

namespace App\Http\Controllers;

use App\Article;
use Exception;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $type_slugs = [
            'explore' => '',
            'learn' => '',
            'changes' =>''
        ];
        try {
        $type_slugs['explore'] = Article::where('type', 'explore')->where('state', Article::PUBLISHED)->first()->slug;
        } catch (Exception $e) {}
        try {
            $type_slugs['learn'] = Article::where('type', 'learn')->where('state', Article::PUBLISHED)->first()->slug;
        } catch (Exception $e) {}
        try {
            $type_slugs['changes'] = Article::where('type', 'changes')->where('state', Article::PUBLISHED)->first()->slug;
        } catch (Exception $e) {}

        return view('home', $type_slugs);
    }
}
