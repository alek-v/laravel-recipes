<nav class="main-nav navbar navbar-expand-lg mb-5 p-3">
    <div class="container-fluid">
        <button class="navbar-toggler toggler-style" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-light active" aria-current="page" href="/">Home</a>
                </li>
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link text-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Hi, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            @if (auth()->user()->role == 'administrator')
                                <li><a href="/administrator/recipes" class="dropdown-item">Recipes Dashboard</a></li>
                                <li><a href="/administrator/recipes/create" class="dropdown-item">Add New Recipe</a></li>
                            <li><hr class="dropdown-divider"></li>
                            @endif
                            <li><a href="/logout" class="dropdown-item">Logout</a></li>
                        </ul>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/register">Register</a>
                    </li>
                @endauth
            </ul>
            <form method="GET" action="/" class="d-flex mb-0" role="search">
                <input name="search" value="{{ request('search') }}" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-light" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
@if (session()->has('success'))
    <div class="toast show align-items-center mb-5 ms-4" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                {{ session('success') }}
            </div>
            <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
@endif
