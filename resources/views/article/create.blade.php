@extends('master')

@section('title', 'Create Article')

@section('content')
    {!! Form::open(['url' => '/article']) !!}
    {!! Form::text('title', null, ['placeholder' => 'Voer text in']) !!}
    {!! Form::textarea('description') !!}
    {!! Form::submit('Opslaan') !!}
    {!! Form::close() !!}
@stop