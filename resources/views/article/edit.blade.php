@extends('master')

@section('title', 'Edit Article')

@section('content')
    <h1>Edit Article</h1>
    {!! Form::model($article, ['route' => ['article.update', $article->id], 'method' => 'patch']) !!}
        @include('article.layouts.form')
    {!! Form::close() !!}
@stop