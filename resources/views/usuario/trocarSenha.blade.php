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
			Troca de senha
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
		<link rel="stylesheet" href="{{ asset('css/style1.css ')}}">
		<!--end::Base Styles -->
		<link rel="shortcut icon" href=" {{ asset('media/favicon.ico') }} " />
		
	</head>
	<!-- end::Head -->
    <!-- end::Body -->
	<body  class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
	
	<!-- begin:: Page -->
	@extends('layouts.popup')
	
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-2" id="m_login" 
			style="background-size: 112%;
    background-position: center; ">
				<div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
					<div class="m-login__container">
						 <div class="m-login__logo" style="margin-bottom:-10%">
							<a href="#">
								<img src="{{asset('media/geminus.png')}}" style="width: 300px">
							</a>
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



	
						<div class="m-login__signin">

							<form class="m-login__form m-form" method="POST" action="{{url('trocarsenha') }}">
							{{ csrf_field() }}					
							<input type="hidden" id="id" name="id" value="{{ old('', isset($resource) ? $resource->id : '') }}">

								<div class="form-group m-form__group">
									<input class="form-control m-input"  id="senhaAntiga" type="password" 
									placeholder="Senha Atual" name="senhaantiga" autocomplete="off">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input"
									  id="novaSenha" placeholder="Nova Senha" type="password" name="novasenha" >
								</div>
                                <div class="form-group m-form__group">
									<input class="form-control m-input" type="password" placeholder="Confirmar Senha" 
                                    name="confirmarsenha" id="confirmarSenha">
					            </div>
								<div class="m-login__form-action">
									<button  type="submit" id="m_login_signin_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary" style="background-color: #0d123c">
									Salvar
									</button>
									&nbsp;&nbsp;
									<a id="m_login_forget_password_cancel" href= "{{ url('/listarusuario') }}" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom m-login__btn">
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
        <!--begin::Page Snippets -->

		     <!-- <script src="{{ asset('js/login.js') }}" type="text/javascript"></script> -->

		 <!-- {{ asset('css/vendors.bundle.css') }}  -->
		<!--end::Page Snippets -->
	</body>
	<!-- end::Body -->
</html>
