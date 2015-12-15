<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CVGenerator</title>
    <!-- CDN Bootstrap & Font Awesome & Jquery -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/cvgenerator.css') }}">

    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

    @include('layouts.partials.nav')

    <div class="container">
        @yield('content')
    </div>


    <hr class="featurette-divider">

    <footer class="footer">
        <p>&copy; 2015 MdM, Inc.</p>
    </footer>
</body>
</html>