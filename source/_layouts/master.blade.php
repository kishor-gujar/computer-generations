<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ $page->baseUrl }}/{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body>
        <div class="topnav" id="navbar">
        <a href="{{ $page->baseUrl }}/"{!! $activeNav == '/' ? ' class="active"' : '' !!}> First Generation</a>
        <a href="{{ $page->baseUrl }}/second-generation"{!! $activeNav == 'second-generation' ? ' class="active"' : '' !!}>Second Generation</a>
        <a href="{{ $page->baseUrl }}/third-generation"{!! $activeNav == 'third-generation' ? ' class="active"' : '' !!}>Third Generation</a>
        <a href="{{ $page->baseUrl }}/fourth-generation"{!! $activeNav == 'fourth-generation' ? ' class="active"' : '' !!}>Fourth Generation</a>
        <a href="{{ $page->baseUrl }}/fifth-generation"{!! $activeNav == 'fifth-generation' ? ' class="active"' : '' !!}>Fifth Generation</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
        </div>

        @yield('body')
        <script>
            function myFunction() {
                var x = document.getElementById("navbar");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
            }
        </script>
    </body>
</html>
