<x-layout>
    <div class="mb-5">
        <h1>{{ $recipe->title }}</h1>
        <p>Created by {{ $recipe->author->name }} {{ $recipe->created_at->diffForHumans() }}</p>
    </div>
    <div>
        <p>{{ $recipe->body }}</p>
    </div>
</x-layout>
