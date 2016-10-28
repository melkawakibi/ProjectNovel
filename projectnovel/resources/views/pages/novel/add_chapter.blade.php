@extends('layouts.main')
@section('main')

    <section class="listSection wrapper">

    {{ Form::open(['route' => ['chapter.create', $id]]) }}

    {{ Form::submit('Create') }}

    <!-- title -->
        {{ Form::label('title', 'title') }}
        {{ Form::text('title') }}

        {{ Form::label('txtbox', 'txtbox') }}
        {{ Form::textarea('txt[]') }}
        {{ Form::textarea('txt[]') }}
        {{ Form::textarea('txt[]') }}
        {{ Form::textarea('txt[]') }}

        {{ Form::close() }}
    </section>

@stop