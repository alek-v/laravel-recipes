<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Recipe;

class CategoriesController extends Controller
{
    public function index(Category $category)
    {
        return view('category', [
            'category' => $category,
            'recipes' => $category->posts
        ]);
    }
}
