<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>

<body>
    <div class="wrapper">
        @include('components.sidebar')
        <div class="main">
            @include('components.navbar')
            @yield('content')
            @include('components.footer')
        </div>
    </div>
</body>

</html>