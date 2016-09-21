@extends('master')

@section('title', 'Create Article')

@section('content')
    {!! Form::open(['url' => '/article']) !!}
        @include('article.layouts.form')
    {!! Form::close() !!}
@stop