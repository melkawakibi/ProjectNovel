<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="main-bg">

    <header>
        @include('includes.main-header')
    </header>

    <div class="main-content-container wrapper cf"> 
        <div class="main-content mar-top-140">
            <div class="sidebar left">
                @include('includes.main-sidebar-menu')
            </div>
            <div class="main-content-box left">
                @yield('main')
            </div>

        </div>
    </div>

    <footer>
        @include('includes.footer')
    </footer>

</div>
</body>
</html>