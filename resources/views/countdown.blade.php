@extends('main.master')

@section('head')
    <title>{{config('appname', 'Utek-Template')}}</title>
    <meta name="viewport" content="width=960">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link href="countdown/css/style.css" rel="stylesheet" type="text/css">
    <link href="countdown/css/flipclock.css" rel="stylesheet" type="text/css">
    <link href="countdown/css/animate.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>

    <link href="countdown/img/favicon.ico" rel="shortcut icon">
@endsection

@section('content')
    <div id="page-wrapper" class="gray-bg">
        @include('main.topbar')
        <div class="wrapper wrapper-content">
        
            <div class="wrapper">
                <div class="clock animated flipInX"></div>
            </div>
            
            <canvas id="confetti"></canvas>
           
        </div>
        @include('main.footer')
    </div>
@endsection

@section('bottom')
    <script src="countdown/js/jquery-1.11.2.min.js"></script>
    <script src="countdown/js/flipclock.js"></script>
    <script src="countdown/js/newyear.js"></script>
    <script type="text/javascript">

    $(function(){
        FlipClock.Lang.Custom = { days:'Jours', hours:'Heures', minutes:'Minutes', seconds:'Secondes' };
        var opts = {
            clockFace: 'DailyCounter',
            countdown: true,
            language: 'Custom'
        };  
    });
    </script>
@endsection
