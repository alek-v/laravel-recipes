@props(['recipes'])

@foreach ($recipes as $recipe)
    <div class="row">
        <div class="row">
            <h2><a href="/recipes/{{ $recipe->slug }}">{{ $recipe->title }}</a></h2>
            <p>Created by {{ $recipe->author->name }} in the category <a href="/categories/{{ $recipe->category->slug }}">{{ $recipe->category->title }}</a></p>
        </div>
        <div class="row">
            <div class="col"><p>{{ $recipe->description }}</p></div>
            <div class="col"><img src="{{ $recipe->thumbnail }}" alt="Food thumbnail" class="rounded" /></div>
        </div>
    </div>
@endforeach
