<!-- novel detail layout -->
<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="main-bg">

    <header>
        @include('includes.tertiary_header')
    </header>

    <div class="cover-image-container">
            {{Html::image($url . $novel['data']['imgUrl'], null, array('class' => 'cover-image'))}}
        <div class="semi-transparent-layer"></div>
    </div>
    <div class="header-highlight-detail"></div>

    <div class="novel-detail-container wrapper"> 
        <div class="novel-detail-content">
                @yield('novel_detail_content')
        </div>
    </div>

    <footer>
        @include('includes.footer')
    </footer>

</div>
</body>
</html>