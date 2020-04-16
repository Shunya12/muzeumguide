@extends('layout.muzeumguide')

@section('title', '確認ページ')

@section('contents')
    <div class="wrapper">
        <div class="container">
            <h2 class="confirm-title">お問い合わせ内容の確認</h2>
            <p>{{ $confirm_message }}</p>
        </div>

        {{ Form::open(['route' => 'contact.thanks']) }}
            <div class="container1">
                <label for="name">お名前</label>
                {{ Form::text('name', $inputs['name'], ['class' => 'form_name', 'readonly']) }}
                <label for="email">メールアドレス</label>
                {{ Form::email('email', $inputs['email'], ['class' => 'form_email', 'readonly']) }}
                <label for="message">メッセージ</label>
                {{ Form::textarea('message', $inputs['message'], ['class' => 'form_message', 'readonly']) }}
            </div>
            <div class="container2">
                <div class="submit">
                    {{ Form::submit('送信', ['name' => 'action', 'class' => 'btn']) }}
                </div>
                <div class="correct">
                    {{ Form::submit('入力し直す', ['name' => 'action', 'class' => 'btn']) }}
                </div>
            </div>
        {{ Form::close() }}
    </div>
@endsection
