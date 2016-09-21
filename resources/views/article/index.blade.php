@extends('master')

@section('title', 'Article')

@section('content')
    <h1>Article</h1>

    @foreach($articles as $article)
        <div class="well">
            <a href="{{ route('article.show', $article->id) }}">{{ $article->title }}</a>
            <a href="" class="pull-right">Edit</a>
        </div>
    @endforeach
@stop