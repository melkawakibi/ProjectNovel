<html>
<body>

<ul>
    @if(! empty($novels))
    @foreach($novels['data'] as $novel)
    <li><b> Novel ID: {{ $novel['id'] }} </b></li>
    <li> name: {{ $novel['name'] }} </li>
    <li> author: {{ $novel['author'] }} </li>
    <li> genre: {{ $novel['genre'] }} </li>
    <li> {{ Html::image($url . $novel['imgUrl']) }} </li>
    <li> user id: {{ $novel['user_id'] }} </li>
    @endforeach
    @endif
</ul>

@if(! empty($headers))
{{$headers}}
@endif

@if(! empty($path))
{{$path}}
{{$name}}
@endif

</body>
</html>
