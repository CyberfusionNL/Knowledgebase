<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
//        if (auth()->check()) return redirect('/');
        return view('admin.login');
    }
}
