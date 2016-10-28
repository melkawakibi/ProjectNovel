@extends('layouts.main')
@section('main')

<section class="listSection wrapper">

	{{ Form::open(array('route' => 'novel.create', 'files' => true)) }}

		<!-- name -->
		{{ Form::label('name', 'name') }}
		{{ Form::text('name') }}

		<!-- author -->
		{{ Form::label('author', 'author') }}
		{{ Form::text('author') }}

		<!-- genre --> 
		{{ Form::label('genre', 'genre') }}
		{{ Form::select('genre', array('Action', 'Adventure','Comedy','Drama','Fantasy','Horror','Mystery', 'Romance', 'Sciencefiction', 'Thriller')) }}


		{{ Form::file('image') }}
		{{ Form::submit('Create') }}

		{{ Form::close() }}
</section>

@stop

		{{ Form::label('genre', 'genre') }}
		{{ Form::text('genre') }}