<x-layout>
    <h1 class="mb-5">Create a new recipe</h1>
    <form action="/administrator/recipes/create" method="POST" enctype="multipart/form-data" class="form-element p-4 border rounded">
        <label for="title" class="form-label">Title</label>
        <input id="title" name="title" value="{{ old('title') }}" class="form-control" required />
        @error('title')
            <div id="passwordHelpBlock" class="form-text text-danger">
                {{ $message }}
            </div>
        @enderror
        <label for="slug" class="form-label">Slug</label>
        <input id="slug" name="slug" value="{{ old('slug') }}" class="form-control" required />
        @error('slug')
        <div id="passwordHelpBlock" class="form-text text-danger">
            {{ $message }}
        </div>
        @enderror
        <label for="description" class="form-label">Description</label>
        <textarea id="description" name="description" rows="5" class="form-control" required>{{ old('description') }}</textarea>
        @error('description')
        <div id="passwordHelpBlock" class="form-text text-danger">
            {{ $message }}
        </div>
        @enderror
        <label for="body" class="form-label">Body</label>
        <textarea id="body" name="body" rows="8" class="form-control" required>{{ old('body') }}</textarea>
        @error('body')
        <div id="passwordHelpBlock" class="form-text text-danger">
            {{ $message }}
        </div>
        @enderror
        <label for="thumbnail">Thumbnail</label>
        <input id="thumbnail" name="thumbnail" type="file" class="form-control" />
        @error('thumbnail')
        <div id="passwordHelpBlock" class="form-text text-danger">
            {{ $message }}
        </div>
        @enderror
        <label for="category" class="form-label">Category</label>
        <select id="category" name="category_id" class="form-control">
            @foreach ($categories as $category)
                @if (old('category_id') == $category->id)
                    <option value="{{ $category->id }}" selected>{{ $category->title }}</option>
                @else
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endif
            @endforeach
        </select>
        @error('category')
        <div id="passwordHelpBlock" class="form-text text-danger">
            {{ $message }}
        </div>
        @enderror
        @csrf
        <button type="submit" class="btn btn-primary mt-4">Submit</button>
    </form>
</x-layout>
