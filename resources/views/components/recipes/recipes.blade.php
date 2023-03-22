@props(['recipes'])

@foreach ($recipes as $recipe)
    <x-recipes.main-recipe-row :recipe="$recipe" />
@endforeach
