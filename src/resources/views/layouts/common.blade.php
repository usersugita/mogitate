<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('products.css')
    @yield('update.css')
    @yield('register.css')
</head>

<body>
    <header class='header'>
        <div class="haeder_logo">
            mogitate
        </div>

    </header>
    <main class="main">
        @yield('products')
        @yield('productid')
        @yield('update')
        @yield('register')


    </main>
</body>


</html>