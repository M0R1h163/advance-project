<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Rese')</title>
    <link rel="stylesheet" href="{{asset('css/sanitize.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/menu.css')}}"/>
    @yield('css')
</head>
<body>
    <div class="top_header">
    <header class="icon_header">
        <div class=icon>
            <a class="x_line" href="/">X</a>
        </div>
    </header>
    </div>

    <main class="main">
        @yield('menuMain')
    </main>

</body>
</html>
