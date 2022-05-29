<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashboardController extends Controller
{
    public function index()
    {
        $title='Dashboard';
        return view('books.Dashboard', compact('title'));
    }

    public function dashboard()
    {
        $title='dashboard-post';
        return view('postbook.dashboard', compact('title'));
    }

}
