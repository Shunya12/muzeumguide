@extends('layout.muzeumguide')

@section('title', 'お問い合わせフォーム')

@section('description', '何かご要望がございましたら、お気軽にお問い合わせください。')

@section('contents')
    <h2 class="contact-title">お問い合わせ</h2>
    {{ Form::open(['route' => 'contact.confirm', 'method' => 'POST']) }}
        <div>
            <label for="name">お名前</label>
            {{ Form::text('name', null, ['id' => 'name']) }}
            <input type="text" id="name" name="name">
        </div>

        <div>
            <label for="email">メールアドレス</label>
            {{ Form::email('email', null, ['id' => 'email']) }}
            <input type="email" id="email" name="email">
        </div>

        <div>
            <label for="message">メッセージ</label>
            {{ Form::textarea('message', null, ['id' => 'message']) }}
            <textarea id="message" name="message"></textarea>
        </div>
        {{ Form::submit('確認画面へ') }}
    {{ Form::close() }}
@endsection
