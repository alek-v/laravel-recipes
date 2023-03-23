@props(['comment'])

<div class="border border-light rounded mt-3 pt-3">
    <div class="d-flex align-items-center mb-3">
        <img src="https://i.pravatar.cc/60?u={{ $comment->author->id }}" width="60" height="60" alt="Avatar" class="rounded" />
        <p class="mb-0 ms-3">
            {{ $comment->author->name }}<br />
            <span class="small">{{ $comment->created_at->diffForHumans() }}</span>
        </p>
    </div>
    <div>
        <p>{{ $comment->body }}</p>
    </div>
</div>
