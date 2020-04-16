@extends('layout.muzeumguide')

@section('title', '岡山県のミュージアムガイド')

@section('description', '岡山県の美術館・博物館を紹介しているサイトです。')

@section('contents')
    <div class="contents">
        @foreach($categories as $category)
        <div class="category {{$category->name_en}}">
          <a href="{{ route('show.category', ['category' => $category->name_en]) }}">{{$category->name}}</a>
          <p>{{ $category->description }}</p>
        </div>
        @endforeach
    </div>
@endsection
