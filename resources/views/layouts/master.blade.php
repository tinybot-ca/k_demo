<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- JavaScript -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

    <!-- Highcharts -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.2.1/plyr.css">
    <link href="{{ asset('css/public.css') }}" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- Bookmark Icons -->
    <link href="{{ asset('images/apple-touch-icon.png') }}" rel="apple-touch-icon" />
    <link href="{{ asset('images/apple-touch-icon-152x152.png') }}" rel="apple-touch-icon" sizes="152x152" />
    <link href="{{ asset('images/apple-touch-icon-167x167.png') }}" rel="apple-touch-icon" sizes="167x167" />
    <link href="{{ asset('images/apple-touch-icon-180x180.png') }}" rel="apple-touch-icon" sizes="180x180" />
    <link href="{{ asset('images/icon-hires.png') }}" rel="icon" sizes="256x256" />
    <link href="{{ asset('images/icon-normal.png') }}" rel="icon" sizes="128x128" />
</head>

<body>
    @include ('layouts.nav')

    <main class="py-4">

        @if ($flash = session('message'))
            <div class="container">        
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div id="flash-message" class="alert alert-success" role="alert">
                            {{ $flash }}
                        </div>
                    </div><!-- col-md-12 -->
                </div><!-- row -->
            </div><!-- container -->
        @endif

        @yield ('content')

    </main>

@include ('layouts.footer')

</body>

</html>

