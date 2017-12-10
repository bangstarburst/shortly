<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>

</head>
<body>

    @yield('sidebar')

    <div class="container">
        @yield('content')
    </div>

    <div id="one">
        <one-component></one-component>
    </div>



    <three></three>
    <script src="js/libs.js"></script>
    <script src="js/app.js"></script>

</body>
</html>
