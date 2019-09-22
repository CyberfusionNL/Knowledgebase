<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function access()
    {
        return 'access requests not yet implemented, please contact support@cyberfusion.nl.';
    }
}
