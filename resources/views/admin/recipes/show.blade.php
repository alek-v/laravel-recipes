<x-layout>
    <h1 class="mb-5">Recipes</h1>
    <table class="table admin-show-recipes rounded">
        <tbody>
        @foreach($recipes as $recipe)
            <tr>
                <td class="ps-4"><a href="/recipes/{{ $recipe->slug }}">{{ $recipe->title }}</a></td>
                <td><img src="/{{ $recipe->thumbnail }}" alt="Thumbnail" class="thumbnail" /></td>
                <td><a href="/administrator/recipes/{{ $recipe->id }}/edit">Edit</a></td>
                <td>
                    <form action="/administrator/recipes/{{ $recipe->id }}" method="POST" class="mb-0">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-link">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $recipes->links() }}
</x-layout>
