@extends('layouts.novel_detail_layout')
@section('novel_detail_content')

    <div class="detail-header">
        @if(! empty($novel))

            <div class="cover-box">
                {{Html::image($url . $novel['data']['imgUrl'],null,array('class'=>'coverbox-image'))}}
            </div>
            <div class="detail-info">
                <h1 class="novel-detail-title">{{ $novel['data']['name']}}</h1>
                <div class="novel-detail-author"> By <a href="#">{{ $novel['data']['author']  }}</a></div>
                <div class="novel-detail-description">{{ $novel['data']['description']  }}</div>
                <div class="novel-detail-genre"><a href="#">{{ $novel['data']['genre']  }}</a></div>
            </div>
                @set('chapters', $novel['data']['chapter']) 
                @set('id', $novel['data']['id'])
        @endif
    </div>
    <div class="chapter-list"> 
        @if(! empty($chapters))
            @set('n', 1)
        @foreach($chapters as $chapter)
            <a href="{{$id . '/chapters/' . $chapter['id'] . '/pages'}}"><li> <span>{{$n++}}</span> {{ $chapter['title']  }}</li></a>
        @endforeach
        @endif


        <button class="btn btn-primary"><a href="{{$id . '/add_chapter'}}">Add chapter</a></button>
    </div>
@stop