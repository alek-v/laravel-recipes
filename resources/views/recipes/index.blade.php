<x-layout>
    <div class="mb-5"><h1>Latest recipes</h1></div>
    <!-- Recipes -->
    <x-recipes.recipes :recipes="$recipes" />
    <!-- Pagination -->
    {{ $recipes->links() }}
</x-layout>
