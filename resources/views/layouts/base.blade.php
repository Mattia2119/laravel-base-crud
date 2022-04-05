<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('pageTitle')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    @yield('content')


    <link rel="stylesheet" href="{{asset('js/.app.js')}}">
</body>
</html>