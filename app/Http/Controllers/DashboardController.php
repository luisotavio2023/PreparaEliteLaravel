<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
{
    return view('dashboard.index', [
        'featuredCourses' => Course::featured()->get(),
        'myCourses' => auth()->user()->courses()->withProgress()->get(),
        'categories' => Category::all()
    ]);
}
}
