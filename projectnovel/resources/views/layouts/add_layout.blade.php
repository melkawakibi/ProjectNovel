<!-- add novel layout -->
<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="main-bg">

    <header>
        @include('includes.secondary_header')
    </header>

    <div class="add-content-container wrapper"> 
        <div class="add-content">
                @yield('add_content')
        </div>
    </div>

    <footer>
        @include('includes.footer')
    </footer>

</div>
</body>
</html>