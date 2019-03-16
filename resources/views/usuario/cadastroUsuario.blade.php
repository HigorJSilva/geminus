@extends('main')
@extends('layouts.nav')
@section('content')
<!-- <div class="m-login__signin">
    <form class="m-login__form m-form" method="POST" action="{{ isset($resource) ? '/alterarusuario' : '/cadastrarusuario' }}">
        {{ csrf_field() }}					
        <input type="hidden" id="id" name="id" value="{{ old('', isset($resource) ? $resource->id : '') }}">
        <div class="form-group m-form__group">
            <input class="form-control m-input"  id="CPF" type="text" 
            placeholder="CPF" name="CPF" autocomplete="off"
            value="{{ old('CPF', isset($resource) ? $resource->CPF : '') }}">
        </div>
        <div class="form-group m-form__group">
            <input class="form-control m-input m-login__form-input--last"
                id="password" placeholder="Senha" name="password" 
                value="{{ old('password', isset($resource) ? $resource->password : '') }}"
                @if(isset($resource) ) readonly="readonly" type="hidden" @else  type="password" @endif>
        </div>
        <div class="form-group m-form__group">
            <input class="form-control m-input" type="text" placeholder="Email" name="email"
                id="m_email" autocomplete="off"
                value="{{ old('email', isset($resource) ? $resource->email : '') }}">
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
</div> -->

<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="POST" action="{{ isset($resource) ? '/alterarusuario' : '/cadastrarusuario' }}">
            {{ csrf_field() }}
				<span class="contact100-form-title">
                {{isset($resource) ? 'Alteração de Usuário' : 'Cadastro de Usuário'}}
                </span>
                <input type="hidden" id="id" name="id" value="{{ old('', isset($resource) ? $resource->id : '') }}">

				<div class="wrap-input100 validate-input bg1">
					<span class="label-input100">CPF</span>
                    <input class="input100" id="CPF" type="text" placeholder="Informe o CPF" name="CPF" 
                    autocomplete="off" value="{{ old('CPF', isset($resource) ? $resource->CPF : '') }}">
                </div>
 
                @if(isset($resource) )
                    <input class="input100"  id="password" placeholder="Informe a Senha" name="password" 
                        value="{{ old('password', isset($resource) ? $resource->password : '') }}"
                        @if(isset($resource) ) readonly="readonly" type="hidden" @else  type="password" @endif>
                @else
                <div class="wrap-input100 validate-input bg1">
					<span class="label-input100">Senha</span>
                    <input class="input100"  id="password" placeholder="Informe a Senha" name="password" 
                        value="{{ old('password', isset($resource) ? $resource->password : '') }}">
                </div>
                @endif

                <div class="wrap-input100 validate-input bg1">
					<span class="label-input100">Email</span>
                    <input class="input100"  type="text" placeholder="Informe o Email" name="email"
                        id="m_email" autocomplete="off"
                        value="{{ old('email', isset($resource) ? $resource->email : '') }}">
                </div>
				<div class="container-contact100-form-btn">
					<button type="submit" class="contact100-form-btn" style="margin-left:30px">
						<span>
							Salvar
						</span>
					</button>
                </div>
                <div class="container-contact100-form-btn">
					<button  href="{{ url('/listarusuario') }}"class="contact100-form-btn" id="id" >
						<span>
							Voltar
						
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>
@endsection