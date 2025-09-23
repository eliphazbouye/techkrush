<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index(): View
    {
        $categories = \App\Models\Category::all();
        return view('admin.category', compact('categories'));
    }
}
