<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" >
<!-- begin::Head -->
<head>
	<meta charset="utf-8" />
	<title>
		Geminus Login
	</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<meta name="description" content="Latest updates and statistic charts">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--begin::Web font -->
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	<!--end::Web font -->
	<!--begin::Base Styles -->
	<link href="{{ asset('css/vendors.bundle.css') }}" rel="stylesheet"/>
	<link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet"/>
	<link href="{{ asset('css/table.css') }}" rel="stylesheet"/>
	<!--end::Base Styles -->
	<link rel="shortcut icon" href=" {{ asset('media/favicon.ico') }} " />
</head>
<!-- end::Head -->
<!-- end::Body -->
<body  class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
	<!-- begin:: Page -->
	<div class="m-grid m-grid--hor m-grid--root m-page">
		<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-2" id="m_login" style="background-image: url(media/bg-image.jpg);     background-size: 112%;
		background-position: center;">
		<div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
			<div class="m-login__container">
				<!-- <div class="m-login__logo">
					<a href="#">
						<img src="media/geminus.png" style="width: 300px">
					</a>
				</div> -->
				@if ($message = Session::get('error'))
				<div class="alert alert-danger alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong>{{ $message }}</strong>
				</div>
				@endif
				@if (count($errors) > 0)

				<div class="alert alert-danger">
					<ul>
						@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>

				@endif
				
				<section> 
  
				<h1>Fixed Table header</h1>
				<div class="tbl-header">
					<table cellpadding="0" cellspacing="0" border="0">
					<thead>
						<tr>
						<th>Nome</th>
						<th>Email</th>
						<th >Ações</th>
						
						</tr>
					</thead>
					</table>
				</div>
				<div class="tbl-content">
					<table cellpadding="0" cellspacing="0" border="0">
					<tbody>
					
					@foreach($usuarios as $usuario)

						<tr>
						<td>{{$usuario->CPF}}</td>
						<td>{{$usuario->email}}</td>>
						<td  text-align="center" ><a href="#" class = "button">Editar</a> <a href="#" class = "buttonRemover">Remover</a></td>
						</tr>
					@endforeach

      </tbody>
    </table>
  </div>
< </section> 

			</div>
		</div>
	</div>
</div>
<!-- end:: Page -->
<!--begin::Base Scripts -->
<script src="{{ asset('js/vendors.bundle.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/scripts.bundle.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/listar.js') }}" type="text/javascript"></script>
<!--end::Base Scripts -->   
<!--begin::Page Snippets -->

<!-- <script src="{{ asset('js/login.js') }}" type="text/javascript"></script> -->

<!-- {{ asset('css/vendors.bundle.css') }}  -->
<!--end::Page Snippets -->
</body>
<!-- end::Body -->
</html>
