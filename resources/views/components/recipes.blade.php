@props(['recipes'])

@foreach ($recipes as $recipe)
    <div class="row">
        <div class="row"><h2>{{ $recipe->title }}</h2></div>
        <div class="row">
            <div class="col"><p>{{ $recipe->description }}</p></div>
            <div class="col"><p>Image</p></div>
        </div>
    </div>
@endforeach
