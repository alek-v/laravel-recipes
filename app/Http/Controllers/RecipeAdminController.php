<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Validation\Rule;

class RecipeAdminController extends Controller
{
    /**
     * Create a new recipe
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function create()
    {
        return view('admin.recipes.create', ['categories' => Category::all()]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required',
            'slug' => ['required', Rule::unique('recipes', 'slug')],
            'description' => 'required',
            'body' => 'required',
            'thumbnail' => 'image',
            'category_id' => 'required'
        ]);

        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

        Recipe::create($attributes);

        return redirect('/')->with('success', 'Recipe has been saved.');
    }

    public function show()
    {
        return view('admin.recipes.show', ['recipes' => Recipe::orderBy('created_at', 'desc')->paginate(5)]);
    }
}
