@extends('layout.muzeumguide')

@section('title', 'お問い合わせフォーム')

@section('description', '何かご要望がございましたら、お気軽にお問い合わせください。')

@section('contents')
    <h2　class="contact-title">お問い合わせ</h2>
    <form class="" action="index.html" method="post">
        <div>
            <label for="name">お名前</label>
            <input type="text" id="name" name="name">
        </div>

        <div>
            <label for="email">メールアドレス</label>
            <input type="email" id="email" name="email">
        </div>

        <div>
            <label for="message">メッセージ</label>
            <textarea id="message" name="message"></textarea>
        </div>
    </form>
@endsection
