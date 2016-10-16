@extends('layouts.default')
@section('content')
<section class="listSection wrapper">

    <ul>
        @if(! empty($novels))
            @foreach($novels['data'] as $novel)
                <li> {{Html::image($url . $novel['imgUrl'])}} {{ Html::link('novels/' . $novel['id'], $novel['name'])  }}</li>
            @endforeach
        @endif
    </ul>

</section>
@stop