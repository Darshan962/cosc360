<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Laravel App')</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    @stack('styles')
</head>

<body>
    {{-- Navigation Bar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Assignment 1 COSC360/COSC560</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">All Posts</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Page Content --}}
    <main class="py-4">
        <div class="container">
            @yield('content')
        </div>
    </main>


    <footer class="text-center text-muted py-3 border-top">
        <small>&copy; {{ now()->year }} Assignment 1 COSC360/COSC560</small>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom Scripts -->
    @stack('scripts')
</body>

</html>
