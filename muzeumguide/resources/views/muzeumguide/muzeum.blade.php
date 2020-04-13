@extends('layout.muzeumguide')

@section('title', '岡山県のミュージアムガイド')

@section('description', '岡山県の美術館・博物館を紹介しているサイトです。')

@section('contents')
     <p>{{ $muzeum->name }}</p>
@endsection
