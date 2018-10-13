<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @if(1===2)
        <div class="container">
            @if($post != NULL)
            <h1> Success</h1>
                @if($comments != NULL)
                <h2>Success</h2>
                <p>{{$comments}}</p>
                @else 
                <h2> Failure</h2>
                @endif
            @else 
            <h1>Failure</h1>
            @endif
        </div>
        @endif
        <div class="panel-group col-lg-8 col-lg-offset-2">
                @foreach($comments as $comment)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1><a href="/comment/{{ $comment->id }}">{{ $comment->title }}</a></h1>
                        </div>
                    </div>
                @endforeach
            </div>

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>
</html>
