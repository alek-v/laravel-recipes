@props(['recipes'])

@foreach ($recipes as $recipe)
    <x-recipes.recipe-row :recipe="$recipe" :body_text="$recipe->description" />
@endforeach
