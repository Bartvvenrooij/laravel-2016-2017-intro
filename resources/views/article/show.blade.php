@extends('master')

@section('title', 'Show Article')

@section('content')
    <h1>{{ $article->title }}</h1>
    <p>{{ $article->description }}</p>
    <p>{{ $article->created_at }}</p>
@stop