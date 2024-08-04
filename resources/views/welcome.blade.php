<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Peruratan</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            margin: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            background: url('assets/img/background.jpg') no-repeat center center fixed;
            background-size: cover;
            position: relative;
            color: #fff;
            overflow: hidden;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
            animation: fadeIn 2s ease-in-out;
        }

        .content-center {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            z-index: 2;
            width: 100%;
            opacity: 0;
            animation: slideIn 1.5s ease-in-out forwards;
        }

        .content-center h1 {
            font-size: 6rem;
            font-weight: bold;
            color: #fff;
            margin: 0;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        }

        .content-center p {
            font-size: 1.25rem;
            color: #fff;
            margin: 0;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }

        .navbar-custom {
            background-color: rgba(0, 0, 0, 0.8);
            animation: slideDown 1s ease-in-out;
        }

        .navbar-brand,
        .nav-link {
            color: #fff !important;
        }

        .login-register-links a {
            font-size: 1.25rem;
            color: #fff;
            margin: 0 10px;
        }

        .login-register-links a:hover {
            text-decoration: underline;
        }

        .mt-4 {
            margin-top: 1.5rem;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            0% {
                transform: translateY(30px);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideDown {
            0% {
                transform: translateY(-30px);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <!-- Overlay -->
    <div class="overlay"></div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Peruratan</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link">/</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="content-center">
            <div>
                <h1>Welcome to our website!</h1>
                <div class="login-register-links mt-4">
                    <a href="{{ route('login') }}">Login</a>
                    <span>/</span>
                    <a href="{{ route('register') }}">Register</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>