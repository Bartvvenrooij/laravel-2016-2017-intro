@extends('master')

@section('title', 'Article')

@section('content')
    <h1>Article</h1>

    @foreach($articles as $article)
        <div class="well">
            <a href="">{{ $article->title }}</a>
        </div>
    @endforeach
@stop