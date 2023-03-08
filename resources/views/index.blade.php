@include('_header')
<body class="d-flex flex-column">
    <!-- Navigation -->
    <x-navigation />
    <!-- Content -->
    <main class="container mb-5">
        <div class="mb-5"><h1>Latest recipes</h1></div>
        @foreach ($recipes as $recipe)
            <div class="row">
                <div class="row"><h2>{{ $recipe->title }}</h2></div>
                <div class="row">
                    <div class="col"><p>{{ $recipe->description }}</p></div>
                    <div class="col"><p>Image</p></div>
                </div>
            </div>
        @endforeach
        <!-- Pagination -->
        {{ $recipes->links() }}
    </main>
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <footer class="py-3 text-center">
        Made with Laravel
    </footer>
</body>
</html>
