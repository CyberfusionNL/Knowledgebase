<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Exception;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home', getSlugForType());
    }
}
