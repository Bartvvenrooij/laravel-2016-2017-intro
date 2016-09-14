@extends("master")

@section("title", "Home")

@section("content")
    <h1>Home</h1>

    <a href="{{ route('article.create') }}">Article</a>


@stop