<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Rese')</title>
    <link rel="stylesheet" href="{{asset('css/sanitize.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
    @yield('css')
</head>
<body>
    <div class="header">
        <div class="header_inner">
            <div class="heder_common">
                <a class=icon href="/">
                    <div class="middle_line"></div>
                    <div class="long_line"></div>
                    <div class="short_line"></div>
                </a>
                <a class="icon_ttl" href="/">Rese</a>
            </div>
            <div class="heder_search">
            @yield('appSearch')
            </div>
        </div>
    </div>

    <div class="main">
        @yield('appMain')
    </div>

</body>
</html>
