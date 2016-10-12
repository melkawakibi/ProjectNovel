@extends('layouts.default')
@section('content')

<section class="listSection wrapper">

<form>
	Select cover photo to upload:
    <input type="file" name="fileToUpload">
    Title
	<input type="text" placeholder="Title">
	Description
	<textarea placeholder="description"></textarea>
	<input type="submit" value="create novel">
</form>

</section>

@stop