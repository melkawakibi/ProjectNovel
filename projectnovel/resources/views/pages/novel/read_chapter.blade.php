@if(! empty($chapter))
    <h1>{{$chapter['data']['title']}}</h1>
@endif

@if(! empty($pages))

    @foreach($pages['data'] as $page)

        <p>{{$page['text']}}</p>

    @endforeach

@endif