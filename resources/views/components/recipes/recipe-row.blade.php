@props(['recipe', 'body_text'])

<div class="row border rounded mb-5 recipe-row">
    <div class="row border-bottom border-2 border-light mb-5 header-row">
        <h2><a href="/recipes/{{ $recipe->slug }}">{{ $recipe->title }}</a></h2>
        <p>Created by {{ $recipe->author->name }} in the category <a href="/categories/{{ $recipe->category->slug }}">{{ $recipe->category->title }}</a></p>
    </div>
    <div class="row">
        <div class="col"><p>{{ $body_text }}</p></div>
        <div class="col"><img src="{{ $recipe->thumbnail }}" alt="Food thumbnail" class="rounded" /></div>
    </div>
</div>
