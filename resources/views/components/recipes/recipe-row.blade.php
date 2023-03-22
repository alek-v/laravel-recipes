@props(['recipe'])

<div class="row border rounded mb-5 recipe-row">
    <div class="row border-bottom border-2 border-light mb-5 header-row">
        <p><a href="/categories/{{ $recipe->category->slug }}">{{ $recipe->category->title }}</a></p>
        <h1><a href="/recipes/{{ $recipe->slug }}">{{ $recipe->title }}</a></h1>
        <p>Created by {{ $recipe->author->name }}<br />{{ $recipe->created_at->diffForHumans() }}</p>
    </div>
    <div class="row">
        <div class="col"><p>{{ $recipe->body }}</p></div>
        <div class="col"><img src="/{{ $recipe->thumbnail }}" alt="Food thumbnail" class="rounded" /></div>
    </div>
    <div class="row mt-5 pt-5 border-top border-2 border-light">
        <div class="border border-light rounded mt-3 pt-4 pb-3">
            @auth()
                <p><strong>Share your thoughts...</strong></p>
                <form action="#" method="POST">
                    <label for="comment" class="form-label">Comment</label>
                    <textarea id="comment" name="comment" type="text" rows="5" class="form-control"></textarea>
                    @csrf
                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
                </form>
                @else
                <p class="mb-0">You need to <a href="/login">login</a> to add a comment.</p>
            @endauth
        </div>
        <x-recipes.recipe-comment />
        <x-recipes.recipe-comment />
        <x-recipes.recipe-comment />
    </div>
</div>
