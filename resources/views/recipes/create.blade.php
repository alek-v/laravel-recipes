<x-layout>
    <h1 class="mb-5">Create a new recipe</h1>
    <form action="/recipe/create" method="POST" class="form-element p-4 border rounded">
        <label for="title" class="form-label">Title</label>
        <input id="title" name="title" value="{{ old('title') }}" class="form-control" required />
        <label for="slug" class="form-label">Slug</label>
        <input id="slug" name="slug" value="{{ old('slug') }}" class="form-control" required />
        <label for="description" class="form-label">Description</label>
        <textarea id="description" name="description" rows="5" class="form-control" required>{{ old('description') }}</textarea>
        <label for="body"class="form-label">Body</label>
        <textarea id="body" name="body" rows="8" class="form-control" required>{{ old('body') }}</textarea>
        @csrf
        <button type="submit" class="btn btn-primary mt-4">Submit</button>
    </form>
</x-layout>
