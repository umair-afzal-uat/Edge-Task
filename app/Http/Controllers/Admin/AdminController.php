<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
     /**
     * Show the Dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Return the view for the dashboard page.

        return view('admin.index');
    }
}
