@extends('layouts.main')
@section('main')
<div class="main-content-box-container">
	<div class="main-content-box-header cf mar-bot-100">
		<h2>Featured updates</h2>
		<button class="btn btn-tertiary"><a href="/recent_updates">View more</a></button>
	</div>	


    <div class="main-list-container">

    <ul>

        @if(! empty($novels))
            @foreach($novels['data'] as $novel)

                <li><a href="{{'novels/' . $novel['id'], $novel['name']}}"> <div class="main-image-container">{{Html::image($url . $novel['imgUrl'], '' , array('class' => 'imageclass') )}}</div> <div class="main-novel-info">{{ Html::link('novels/' . $novel['id'], $novel['name'])}}</div></a></li>

            @endforeach
        @endif
     </ul>
    </div>
</div>

<div class="main-content-box-container">
	<div class="main-content-box-header cf mar-bot-100">
		<h2>Popular novels</h2>
		<button class="btn btn-tertiary"><a href="/popular_novels">View more</a></button>
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