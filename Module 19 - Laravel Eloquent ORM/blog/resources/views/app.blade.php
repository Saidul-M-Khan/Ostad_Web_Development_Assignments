<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <script src="{{asset('/js/axios.min.js')}}"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header>
        @include('components.header')
    </header>

    <main>
        @include('components.loader')
        @yield('content')
    </main>

    <footer>
        @include('components.footer')
    </footer>
</body>
</html>
