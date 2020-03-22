<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="@yield('description')">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <div class="whole-wrapper">
            <header class="page-header wrapper">
                <div class="header-navi">
                    <input class="search" type="search" name="" value="検索" maxlength="20">
                    <div class="login-logout">
                        <a href="#">ログイン</a>
                        <a href="#">ログアウト</a>
                    </div>
                </div>
                <h1 class="header-title">岡山県のミュージアムガイド</h1>
                <nav>
                    <ul class="category-navi">
                        <li><a class="category home" href="/muzeumguide">ホーム</a></li>
                        <li><a class="category m-art" href="/#">美術</a></li>
                        <li><a class="category m-history" href="/#">歴史</a></li>
                        <li><a class="category m-nature" href="/#">自然</a></li>
                        <li><a class="category m-science" href="/#">科学</a></li>
                    </ul>
                </nav>
            </header>

            <main>
                <div class="contents wrapper">
                  @yield('contents')
                </div>
            </main>

            <footer>
                <div class="wrapper">
                    <p><small>&copy; 2020 muzeum Guide Of Okayama Prefecture.</p>
                </div>
            </footer>
        </div>
    </body>
</html>