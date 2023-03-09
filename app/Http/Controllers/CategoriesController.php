<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoriesController extends Controller
{
    public function index(Category $category)
    {
        return view('category', [
            'category' => $category,
            'recipes' => $category->posts()->paginate(5)
        ]);
    }
}
