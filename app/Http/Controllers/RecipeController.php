<?php

namespace App\Http\Controllers;

use App\Models\Recipe;

class RecipeController extends Controller
{
    /**
     * Show all recipes
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function index()
    {
        if (!empty(request('search'))) {
            $recipes = Recipe::where('title', 'like', '%' . request('search') . '%');
        } else {
            $recipes = Recipe::orderBy('created_at', 'desc');
        }

        return view('recipes.index', ['recipes' => $recipes->paginate(5)]);
    }

    /**
     * Show recipe
     *
     * @param Recipe $recipe
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function show(Recipe $recipe)
    {
        return view('recipes.show', [
            'recipe' => $recipe,
            'comments' => $recipe->comments()->orderByDesc('created_at')->paginate(10)
        ]);
    }
}
