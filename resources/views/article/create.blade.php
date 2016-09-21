@extends('master')

@section('title', 'Create Article')

@section('content')
    {!! Form::open(['url' => '/article']) !!}
    <div class="form-group">
        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Voer text in']) !!}
        @include('layouts.error', ['field' => 'title'])
    </div>
    <div class="form-group">
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
        @include('layouts.error', ['field' => 'description'])
    </div>
    {!! Form::submit('Opslaan') !!}
    {!! Form::close() !!}
@stop