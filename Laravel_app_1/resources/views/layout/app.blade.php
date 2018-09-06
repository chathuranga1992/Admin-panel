<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <title>{{config('app.name','SCIT')}}</title>

    </head>
    <body>

        @include('inc.navbar')

        <div class="container">
            {{-- <li class="nav-item"><a class="nav-link disabled" href="/service">Service</a></li> --}}
            <br><br><br>
            @include('inc.message')
            @yield('content')
        </div>

        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
    </body>

    
</html>