<!DOCTYPE html>
<html lang="{{config('app.locale')}}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>O'Buro - @yield('title')</title>
    @section('style')
    <!--boostrap ici -->
    <!--<link rel="stylesheet"href="...">-->
    <!--votre css ici -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @show

    @section('script')
    <!--boostrap ici -->
    <!--<script src ="..."> </script>-->
     <!--votre js ici -->
    <script src="{{asset('js/app.js')}}"defer></script>
    @show

</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">lient</a></li>
                <li><a href="#">lient</a></li>
             
            </ul>
        </nav>
    </header>
    @section('content')
    @show
    <footer> copytright foo abr baz 2022</footer>
</body>
</html>