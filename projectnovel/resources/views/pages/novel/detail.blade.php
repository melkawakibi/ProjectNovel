@extends('layouts.novel_detail_layout')
@section('novel_detail_content')

    <div class="detail-header">
        @if(! empty($novel))
        <div class="cover-image-container">
                {{Html::image($url . $novel['data']['imgUrl'], null, array('class' => 'cover-image'))}}
            <div class="semi-transparent-layer"></div>
        </div>
        <div class="novel-detail-wrapper">
            <div class="cover-box">
                {{Html::image($url . $novel['data']['imgUrl'],null,array('class'=>'coverbox-image'))}}
            </div>
                
                {{ $novel['data']['id']  }}
                {{ $novel['data']['name']  }}
                {{ $novel['data']['author']  }}
                {{ $novel['data']['description']  }}
                @set('chapters', $novel['data']['chapter']) 
                @set('id', $novel['data']['id'])
        </div>
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