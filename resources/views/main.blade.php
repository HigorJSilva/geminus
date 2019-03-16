<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
        google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
        active: function() {
            sessionStorage.fonts = true;
        }
        });
    </script>
     <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="{{ asset('js/vendors.bundle.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/scripts.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/tabela.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vendors.bundle.css') }}" rel="stylesheet"/>
	<link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet"/>
	<link rel="stylesheet" href="{{ asset('css/style1.css ')}}">
    <link rel="stylesheet" href="{{ asset('css/tabela.css ')}}">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css')}}">
	
    


   
	<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"
    style="margin-top:-8%">
        <!-- begin:: Page -->
        <div>
            @yield('nav')
        </div>


						
						@if ($message = Session::get('error'))


        <div class="m-alert m-alert--outline alert alert-danger "  style="margin-top:10%; margin-bottom:-10%">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
   @endif
   

    @if (count($errors) > 0)
        <div class="m-alert m-alert--outline alert alert-danger" style="margin-top:10%; margin-bottom:-10%; text-align: center; font-weight: bold; ">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <!-- <ul> -->
                @foreach($errors->all() as $error)
                {{ $error }}<br>
                @endforeach
            <!-- </ul> -->
        </div>
        @endif
        
	
	
    
    

   
    </body>

    <main class="py-4">
        @yield('content')
    </main>
		
</head>