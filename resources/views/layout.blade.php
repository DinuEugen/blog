<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href=" style/style.css">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>

        </style>
    </head>
    <body>
        @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
            </div>
            @endif

    <div class="nav-wrapper">
        <nav >
            <a href="{{ route('home.index') }}"><div>Home</div></a>
            <a href="{{  route('blog.index') }}"><div>Blogs</div></a>
            <a href="{{ route('blog.create') }}"><div>Create blog</div></a>

        </nav>
    </div>

@yield('content')
    </body>
</html>
