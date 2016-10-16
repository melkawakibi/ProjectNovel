@extends('layouts.default')
@section('content')

    @if(! empty($novel))
            {{Html::image($url . $novel['data']['imgUrl'])}}
            {{ $novel['data']['id']  }}
            {{ $novel['data']['name']  }}
            {{ $novel['data']['author']  }}
    @endif

    @if(! empty($headers))
        @foreach($headers as $header)
            {{$header}}
        @endforeach
    @endif

@stop