<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories.index');
    }

    public function create()
    {
        return view('categories.create');
    }

    public function edit(CategoryController $category)
    {

        return view('categories.edit', compact('category'));
    }
}
