<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
