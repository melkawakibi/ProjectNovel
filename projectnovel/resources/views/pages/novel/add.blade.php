@extends('layouts.add_layout')
@section('add_content')

	{{ Form::open(array('route' => 'novel.create', 'files' => true, 'class'=>'add-form' ))}}

		<!-- image -->
		{{ Form::file('image') }}
	
		<!-- name -->
		{{ Form::label('Title', 'Title') }}
		{{ Form::text('name') }}

		<!-- description -->
		{{ Form::label('description', 'Description') }}
		{{ Form::textarea('description') }}

		<!-- genre --> 
		{{ Form::label('genre', 'Genre') }}
		{{ Form::select('genre', array('Action' => 'Action', 'Adventure','Comedy' => 'Comedy','Drama' => 'Drama','Fantasy' => 'Fantasy','Horror' => 'Horror','Mystery' => 'Mystery', 'Romance' => 'Romance', 'Sciencefiction' => 'Sciencefiction', 'Thriller' => 'Thriller')) }}

		{{ Form::submit('Create', array('class' => 'btn btn-primary')) }}

		{{ Form::close() }}


@stop