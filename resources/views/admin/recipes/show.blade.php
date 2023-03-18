<x-layout>
    <h1 class="mb-5">Recipes</h1>
    <table class="table admin-show-recipes rounded">
        <tbody>
        @foreach($recipes as $recipe)
            <tr>
                <td class="ps-4"><a href="/recipes/{{ $recipe->slug }}">{{ $recipe->title }}</a></td>
                <td><img src="/{{ $recipe->thumbnail }}" alt="Thumbnail" class="thumbnail" /></td>
                <td><a href="/administrator/recipes/{{ $recipe->id }}/edit">Edit</a></td>
                <td>Delete</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $recipes->links() }}
</x-layout>
