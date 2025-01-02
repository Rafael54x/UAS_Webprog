<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    /**
     * Show the Admin Dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('/admin/admin-dashboard');
    }
}
