<html>
<body>
<ul>
@foreach($novels['data'] as $novel)
    <li><b> Novel ID: {{ $novel['id'] }} </b></li>
    <li> name: {{ $novel['name'] }} </li>
    <li> author: {{ $novel['author'] }} </li>
    <li> genre: {{ $novel['genre'] }} </li>
@endforeach
</ul>
</body>
</html>
