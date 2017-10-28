<!DOCTYPE html>
<html data-whatinput="initial" data-whatintent="mouse" class=" whatinput-typesinitial">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrinkto-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hot Fizzle Photos</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico"/>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/new.css">
</head>
<body class="bg-grey">
<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
    <div class="container">

        <div class="collapse navbar-collapse" id="navbar">
            <div class="row">
                <div class="col-4 nav-item font-weight-bold" >
                    <a class="navbar-brand large-font" href="/">Hot Fizzle Photos</a>
                </div>

                <ul class="navbar-nav mt-2">
                    <li>
                        <div class="col-2 nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </div>
                    </li>
                    <li>
                        <div class="col-2 nav-item">
                            <a class="nav-link" href="/gallery">Gallery</a>
                        </div>
                    </li>
                    <li>
                        <div class="col-2 nav-item">
                            <a class="nav-link" href="/about">About</a>
                        </div>
                    </li>
                    <li>
                        <div class="col-2 nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </div>
                    </li>
                    <li>
                        <div class="col-2 nav-item">
                            <a class="nav-link" href="/login">Login</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<main>
    @yield('content')
</main>
<footer class="footer bg-inverse">
    <div class="container">
        <span class="text-muted">&copy;Copyright 2017</span>
        <span class="text-muted">Hot Fizzle Photos</span>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="/js/jquery.slim.min.js"></script>
<script src="/js/tether.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/app.js"></script>
<script src="/js/jqueryStuff.js"></script>
<script src="/js/contactJquery.js"></script>
<script src="/js/AnotherJqueryFile.js"></script>
</body>
</html>