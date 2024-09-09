<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Rese')</title>
    <link rel="stylesheet" href="{{asset('css/sanitize.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/menu.css')}}"/>
    <!-- メールアイコン -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @yield('css')
</head>
<body>
    <div class="top_header">
        <header class="icon_header">
            <form class=icon action="/back" method="GET">
                <button type="submit" class="x_line" id="return">
                    <label class="material-icons image" for="return">close</label>
                </button>
            </form>
        </header>
    </div>
    <main class="main">
        @yield('menuMain')
    </main>
</body>
</html>
