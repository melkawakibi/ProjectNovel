@extends('layouts.default')
@section('content')

    @if(! empty($novel))
            {{Html::image($url . $novel['data']['imgUrl'])}}
            {{ $novel['data']['id']  }}
            {{ $novel['data']['name']  }}
            {{ $novel['data']['author']  }}
            @set('chapters', $novel['data']['chapter'])
    @endif

    @if(! empty($chapters))
        @set('n', 1)
    @foreach($chapters as $chapter)
        <li> {{$n++}} {{ $chapter['title']  }}</li>
    @endforeach
    @endif

    <a href="/add_chapter">Create Chapters</a>

@stop