@extends('master')

@section('title', 'Article')

@section('content')
    <h1>Article</h1>
    <a href="{{ route('article.create') }}">Create Article</a>
    @foreach($articles as $article)
        <div class="well">
            <a href="{{ route('article.show', $article->id) }}">{{ $article->title }}</a>
            @if(Auth::check())
                <a href="{{ route('article.edit', $article->id) }}" class="pull-right">Edit</a>
            @endif
            {!! Form::open(['route' => ['article.destroy', $article->id], 'method' => 'delete']) !!}
            {!! Form::submit('Remove') !!}
            {!! Form::close() !!}
        </div>
    @endforeach
@stop