@extends('layouts.app')

@section('title', '岡山県のミュージアムガイド/' . $category_name )

@section('description', '岡山県の美術館・博物館を紹介しているサイトです。')

@section('contents')
    <ul>
        @foreach ($muzeums as $muzeum)
            <li><a href="{{ url()->current()."/".$muzeum->id }}">{{ $muzeum->name }}</a></li>
        @endforeach
    </ul>
@endsection
