@extends('main.master')

@section('head')
    <title>{{config('appname', 'Utek-Template')}}</title>
@endsection

@section('content')
    <div id="page-wrapper" class="gray-bg">
        @include('main.topbar')
        <div class="wrapper wrapper-content">
            
           
        </div>
        @include('main.footer')
    </div>
@endsection

@section('bottom')
    
@endsection