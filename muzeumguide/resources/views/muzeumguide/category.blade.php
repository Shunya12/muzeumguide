@extends('layout.muzeumguide')

@section('title', '岡山県のミュージアムガイド/美術')

@section('description', '岡山県の美術館・博物館を紹介しているサイトです。')

@section('contents')
    <ul>
        @foreach ($muzeums as $muzeum)
            <li>{{ $muzeum->name }}</li>
        @endforeach
    </ul>
@endsection
