@extends('master')

@section('title', 'Article')

@section('content')
    <h1>Article</h1>
    @if(Auth::check())
        @if(Auth::user()->is_admin)
            <a href="{{ route('article.create') }}">Create Article</a>
        @endif
    @endif

    {!! Form::open(['route' => 'article.search']) !!}
    {!! Form::text('search', null, ["placeholder" => "Search..."]) !!}
    {!! Form::submit('Search') !!}
    {!! Form::close() !!}

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