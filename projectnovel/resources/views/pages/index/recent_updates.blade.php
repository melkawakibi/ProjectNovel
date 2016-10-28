<!-- updates page -->

@extends('layouts.main')
@section('main')
<div class="main-content-box-container">
	<div class="main-content-box-header cf mar-bot-100">
		<h2>Featured updates</h2>
	</div>	


    <div class="main-list-container">
        @if(! empty($novels))

            @foreach($novels['data'] as $novel)

                <li> <div class="main-image-container">{{Html::image($url . $novel['imgUrl'], '' , array('class' => 'imageclass') )}}</div> <div class="main-novel-info">{{ Html::link('novels/' . $novel['id'], $novel['name'])}}</div></li>

            @endforeach

        @endif
    </div>
</div>
@stop