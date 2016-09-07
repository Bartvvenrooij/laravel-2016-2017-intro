@extends("master")

@section("title", "Home")

@section("content")
    <h1>Home</h1>

    {!! Form::open(['url' => '/post']) !!}
        {!! Form::text('title', null, ['placeholder' => 'Voer text in']) !!}
        {!! Form::textarea('description') !!}
        {!! Form::submit('Opslaan') !!}
    {!! Form::close() !!}
@stop