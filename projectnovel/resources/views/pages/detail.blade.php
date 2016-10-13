<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<ul>
    @if(! empty($novel))
        <li><b> Novel ID: {{ $novel['data']['id'] }} </b></li>
        <li> name: {{ $novel['data']['name'] }} </li>
        <li> author: {{ $novel['data']['author'] }} </li>
        <li> genre: {{ $novel['data']['genre'] }} </li>
        <li> user id: {{ $novel['data']['user_id'] }} </li>
        {{ Html::image($url . $novel['data']['imgUrl']) }}
    @endif
</ul>

</body>
</html>