@extends('layouts.main')
@section('main')
<div class="main-content-box-container">
	<div class="main-content-box-header cf">
		<h2>Featured updates</h2>
		<button class="btn btn-tertiary"><a href="#">View more</a></button>
	</div>	


    <ul>
        @if(! empty($novels))

            @foreach($novels['data'] as $novel)

                <li> {{Html::image($url . $novel['imgUrl'])}} {{ Html::link('novels/' . $novel['id'], $novel['name'])  }}</li>

            @endforeach

        @endif
    </ul>

</div>
@stop