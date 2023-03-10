<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- AdminKit CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="wrapper">
        @include('admin.components.sidebar')
        <div class="main">
            @include('admin.components.navbar')
            @yield('content')
            @include('admin.components.footer')
        </div>
    </div>

    <!-- AdminKit JS -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>