@extends('layouts.app')

@section('title', '岡山県のミュージアムガイド')

@section('description', '岡山県の美術館・博物館を紹介しているサイトです。')

@section('contents')
    <div class="contents card-group">
        @foreach($categories as $category)
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('img/' . $category->name_en . '_thumb.jpg' ) }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{ $category->name_en }}</h5>
              <p class="card-text">{{ $category->description }}</p>
              <a href="{{ route('show.category', ['category' => $category->name_en]) }}" class="btn btn-primary">{{ $category->name }}</a>
            </div>
          </div>
        @endforeach
    </div>
@endsection
