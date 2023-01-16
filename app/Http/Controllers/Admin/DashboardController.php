<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class DashboardController extends Controller
{
    public function index()
    {
        return view('backend.dashboard.admin_dashboard');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirec()->back();
    }
}
