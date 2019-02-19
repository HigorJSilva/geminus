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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
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
	<link rel="stylesheet" href="{{ asset('css/style1.css ')}}">
	<!--end::Base Styles -->
	<link rel="shortcut icon" href=" {{ asset('media/favicon.ico') }} " />
</head>
<!-- end::Head -->
<!-- end::Body -->
<body   class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
	<!-- begin:: Page -->
	<div class="m-grid m-grid--hor m-grid--root m-page">
		<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-2" id="m_login" style="background-image: url(media/bg-image.jpg);     background-size: 112%;
		background-position: center;">
		<div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
			<div class="m-login__container">
				<div class="m-login__logo">
					<a href="#">
					<img src="{{asset('media/geminus.png')}}" style="width: 300px">
					</a>
				</div>
				@if ($message = Session::get('sucesso'))
				<div class="m-alert m-alert--outline alert alert-success" style="margin-top:-15%" role="alert">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong>{{ $message }}</strong>
				</div>
				@endif
				@if ($message = Session::get('error'))
				<div class="m-alert m-alert--outline alert alert-danger" style="margin-top:-15%;
				 text-align: center; vertical-align: middle;">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<strong>{{ $message }}</strong>
			</div>
			@endif
			@if (count($errors) > 0)

			<div class="m-alert m-alert--outline alert alert-danger" style="margin-top:-15%; text-align: center;
			vertical-align: top; font-weight: bold; ">
			<!-- <ul> -->
			<button type="button" class="close" data-dismiss="alert">×</button>
				@foreach($errors->all() as $error)
				{{ $error }}<br>
				@endforeach
				<!-- </ul> -->
			</div>
			@endif
			<div class="sm-login__forget-password" >
				<div class="m-login__head">
					<h3 class="m-login__title">
						Esqueceu a senha ?
					</h3>
					<div class="m-login__desc">
						Insira seu email para trocar a senha:
					</div>
				</div>
				<form class="m-login__form m-form" method="post" action="{{ url('/esqueceusenha') }}">
					{{ csrf_field() }}
					<div class="form-group m-form__group" style="margin-top:-40px">
						<input class="form-control m-input" type="text" placeholder="Email" name="email" id="m_email" autocomplete="off">
					</div>
					<div class="m-login__form-action" style="margin-top:1px">
						<button id="m_login_forget_password_submit" style="background-color: #0d123c" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn m-login__btn--primaryr">
							Enviar
						</button>
						&nbsp;&nbsp;
						<a id="m_login_forget_password_cancel" href="{!! route('entrar') !!}" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom m-login__btn">
					Voltar
				</a>  

					</div>
				</form>
				
			</div>
		</div>
	</div>
</div>
</div>
<!-- end:: Page -->
<!--begin::Base Scripts -->
<script src="{{ asset('js/vendors.bundle.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/scripts.bundle.js') }}" type="text/javascript"></script>
<!--end::Base Scripts -->
</body>
<!-- end::Body -->
</html>
