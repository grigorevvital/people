<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css.map"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/alertify.min.css') }}">
    <script src="{{ asset('js/alertify.min.js') }}"></script>
</head>
    <body>
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="/">
                    <img src="{{ asset('site_images/main_logo.png') }}">
                </a>
                <a class="navbar-item" href="{{ route('people.create') }}">
                    Add a new person
                </a>
            </div>
        </nav>

        <header class="header has-text-centered">
            <div class="notification">
                There is a simple example for the application People (Laravel)
            </div>
        </header>

        <!--main rendering section-->
            @yield('content')
        <!--end rendering section-->

        <footer class="footer">
            <div class="content has-text-centered">
                <p>
                    <strong>People</strong> by <a href="#">Riedel Viktor</a>
                </p>
            </div>
        </footer>
    </body>
</html>
