@extends('main')
@include('layouts.mensagens')
@section('content')
<div class="container-contact100" style="margin-top:125px">
		<div class="wrap-contact100">
        
			<form class="contact100-form validate-form" method="POST" action="{{ isset($resource) ? '/alterarusuario' : '/cadastrarusuario' }}">
            {{ csrf_field() }}
            
				<span class="contact100-form-title">
                {{isset($resource) ? 'Alteração de Usuário' : 'Cadastro de Usuário'}}
                </span>

                @yield('mensagens')
               
                <input type="hidden" id="id" name="id" value="{{ old('', isset($resource) ? $resource->id : '') }}">

				<div class="wrap-input100 validate-input bg1">
					<span class="label-input100">CPF</span>
                    <input class="input100" id="CPF" type="text" placeholder="Informe o CPF" name="CPF" 
                    autocomplete="off" value="{{ old('CPF', isset($resource) ? $resource->CPF : '') }}">
                </div>
 
                @if(isset($resource) )
                    <input class="input100"  id="password" placeholder="Informe a Senha" name="password" 
                        value="{{ old('password', isset($resource) ? $resource->password : '') }}"
                        @if(isset($resource) ) readonly="readonly" type="hidden" @else   @endif>
                @else
                <div class="wrap-input100 validate-input bg1">
					<span class="label-input100">Senha</span>
                    <input class="input100" type="password"  id="password" placeholder="Informe a Senha" name="password" 
                        value="{{ old('password', isset($resource) ? $resource->password : '') }}">
                </div>
                @endif

                <div class="wrap-input100 validate-input bg1">
					<span class="label-input100">Email</span>
                    <input class="input100"  type="text" placeholder="Informe o Email" name="email"
                        id="email" autocomplete="off"
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
					<a  href="{{ url('/listarusuario') }}"class="contact100-form-btn" id="id" >
						<span>
							Voltar
						
						</span>
					</a>
				</div>
			</form>
		</div>
	</div>
@endsection