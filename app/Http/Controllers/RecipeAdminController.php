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
        $attributes = $this->verifyAttributes();

        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

        Recipe::create($attributes);

        return redirect('/')->with('success', 'Recipe has been saved.');
    }

    /**
     * Show recipes
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function show()
    {
        return view('admin.recipes.show', ['recipes' => Recipe::orderBy('created_at', 'desc')->paginate(10)]);
    }

    /**
     * Show and edit recipe contents
     *
     * @param Recipe $recipe
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function edit(Recipe $recipe)
    {
        return view('admin.recipes.edit', ['recipe' => $recipe, 'categories' => Category::all()]);
    }

    /**
     * Save updates
     *
     * @param Recipe $recipe
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Recipe $recipe)
    {
        $attributes = $this->verifyAttributes($recipe);

        if (isset($attributes['thumbnail'])) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }

        $recipe->update($attributes);

        return back()->with('success', 'Recipe has been updated.');
    }

    /**
     * Verify recipe fields
     *
     * @param Recipe|null $recipe
     * @return array
     */
    private function verifyAttributes(?Recipe $recipe = null)
    {
        $recipe ??= new Recipe();

        return request()->validate([
            'title' => 'required',
            'slug' => ['required', Rule::unique('recipes', 'slug')->ignore($recipe)],
            'description' => 'required',
            'body' => 'required',
            'thumbnail' => 'image',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);
    }

    public function destroy(Recipe $recipe)
    {
        $recipe->delete();

        return back()->with('success', 'Recipe has been deleted.');
    }
}
