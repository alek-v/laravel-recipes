@include('_header')
<body class="d-flex flex-column">
    <!-- Navigation -->
    <x-navigation />
    <!-- Content -->
    <main class="container mb-5">
        {{ $slot }}
    </main>
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <footer class="py-3 text-center">
        $Made with love using = [Laravel, Bootstrap, SCSS]
    </footer>
</body>
</html>
