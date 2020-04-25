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
                    <div class="login-logout">
                        <a class="login" href="{{ route('login') }}">ログイン</a>
                        <a class="register" href="{{ route('register') }}">登録</a>
                    </div>
                </div>
                <h1 class="header-title">岡山県のミュージアムガイド</h1>

                <nav>
                    <ul class="category-navi">
                        <li><a class="category home" href="{{ route('top') }}">
                            ホーム
                            <span>home</span>
                            </a>
                        </li>
                        @foreach ($categories as $category)
                            <li>
                                <a class="category m-art" href="{{ route('show.category', ['category' => $category->name_en]) }}">
                                {{ $category->name }}
                                <span>{{ $category->name_en }}</span>
                                </a>
                            </li>
                        @endforeach
                        <li class="li-contact">
                            <a class="a-contact" href="{{ route('contact.show') }}">
                                お問い合わせ
                                <span>contact</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </header>

            <main>
                <div class="contents wrapper">
                  @yield('contents')
                </div>
            </main>

            <footer>
                <div class="category-navi">
                    <ul class="category-navi">
                        <li><a class="category home" href="{{ route('top') }}">
                            ホーム
                            <span>home</span>
                            </a>
                        </li>
                        @foreach ($categories as $category)
                            <li>
                                <a class="category m-art" href="{{ route('show.category', ['category' => $category->name_en]) }}">
                                    {{ $category->name }}
                                    <span>{{ $category->name_en }}</span>
                                </a>
                            </li>
                        @endforeach
                        <li class="li-contact">
                            <a class="a-contact" href="{{ route('contact.show') }}">
                            お問い合わせ
                            <span>contact</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="wrapper">
                    <p><small>&copy; 2020 Muzeum Guide Of Okayama Prefecture.</p>
                </div>
            </footer>
        </div>
    </body>
</html>
