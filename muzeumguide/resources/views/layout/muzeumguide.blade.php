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
                        <a href="{{ route('login') }}">ログイン</a>
                        <a href="#">ログアウト</a>
                    </div>
                </div>
                <h1 class="header-title">岡山県のミュージアムガイド</h1>

                <nav>
                    <ul class="category-navi">
                        <li><a class="category home" href="{{ route('top') }}">ホーム</a></li>
                        @foreach ($categories as $category)
                            <li><a class="category m-art" href="{{ route('show.category', ['category' => $category->name_en]) }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </nav>
            </header>

            <main>
                <div class="contents wrapper">
                  @yield('contents')
                </div>
            </main>

            <div class="under-navi">
                <ul class="nav justify-content-center">
                    <li><a class="category home" href="{{ route('top') }}">ホーム</a></li>
                    @foreach ($categories as $category)
                        <li><a class="category m-art" href="{{ route('show.category', ['category' => $category->name_en]) }}">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </div>

            <footer>
                <div class="wrapper">
                    <p><small>&copy; 2020 Muzeum Guide Of Okayama Prefecture.</p>
                </div>
            </footer>
        </div>
    </body>
</html>
