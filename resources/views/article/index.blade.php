@extends('master')

@section('title', 'Article')

@section('content')
    <h1>Article</h1>

    @foreach($articles as $article)
        <div class="well">
            <a href="{{ route('article.show', $article->id) }}">{{ $article->title }}</a>
            <a href="{{ route('article.edit', $article->id) }}" class="pull-right">Edit</a>
            {!! Form::open(['route' => ['article.destroy', $article->id], 'method' => 'delete']) !!}
                {!! Form::submit('Remove') !!}
            {!! Form::close() !!}
        </div>
    @endforeach
@stop