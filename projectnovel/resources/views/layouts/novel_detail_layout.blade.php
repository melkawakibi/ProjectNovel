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

    <div class="add-content-container wrapper"> 
        <div class="novelDetail-content">
                @yield('novel_detail_content')
        </div>
    </div>

    <footer>
        @include('includes.footer')
    </footer>

</div>
</body>
</html>