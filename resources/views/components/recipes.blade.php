@props(['recipes'])

@foreach ($recipes as $recipe)
    <div class="row">
        <div class="row">
            <h2><a href="/recipes/{{ $recipe->slug }}">{{ $recipe->title }}</a></h2>
            <p>{{ $recipe->author->name }}</p>
        </div>
        <div class="row">
            <div class="col"><p>{{ $recipe->description }}</p></div>
            <div class="col"><p>Image</p></div>
        </div>
    </div>
@endforeach
