<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CVGenerator</title>
    <!-- CDN Bootstrap & Jquery -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</head>
<body>

    @include('layouts.partials.nav')

    <div class="container">
        @yield('content')
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>