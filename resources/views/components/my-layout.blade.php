<!-- resources/views/components/my-layout.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/app.css'])

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <header class="bg-white shadow">
            <div class="container py-6">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container">
                        <a class="navbar-brand" href="{{ route('dashboard') }}">Dashboard</a>
                        @auth
                        @if(auth()->user()->isAdmin())
                        <a class="nav-link" href="{{ route('users.index') }}">Users</a>
                        @endif
                        @endauth
                    </div>
                </nav>
            </div>
        </header>

        <main>
            {{ $slot }}
        </main>
    </div>
</body>

</html>