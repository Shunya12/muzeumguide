@extends('layout.muzeumguide')

@section('title', 'お問い合わせフォーム')

@section('description', '何かご要望がございましたら、お気軽にお問い合わせください。')

@section('contents')
    <div class="container">
        <h2 class="contact-title">お問い合わせ</h2>
        {{ Form::open(['route' => 'contact.confirm', 'method' => 'POST']) }}
        <div class="container">
            <div>
                <label for="name">お名前</label>
                {{ Form::text('name', null, ['id' => 'name']) }}
            </div>

            <div>
                <label for="email">メールアドレス</label>
                {{ Form::email('email', null, ['id' => 'email']) }}
            </div>

            <div>
                <label for="message">メッセージ</label>
                {{ Form::textarea('message', null, ['id' => 'message', 'rows' => '5']) }}
            </div>
            {{ Form::submit('確認画面へ', ['class' => 'btn']) }}
        {{ Form::close() }}
        </div>
    </div>
@endsection
