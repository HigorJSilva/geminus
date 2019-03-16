@extends('main')

@section('content')

<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="POST" action="{{ isset($resource) ? '/alterarusuario' : '/cadastrarusuario' }}">
            {{ csrf_field() }}
				<span class="contact100-form-title">
                Trocar senha
                </span>
                <input type="hidden" id="id" name="id" value="{{ old('', isset($resource) ? $resource->id : '') }}">

				<div class="wrap-input100 validate-input bg1">
					<span class="label-input100">Senha Atual</span>
                    <input class="input100" id="senhaAntiga" type="password"  
                    placeholder="Insira Sua Senha Atual" name="senhaantiga" autocomplete="off">
                </div>
 
              
                <div class="wrap-input100 validate-input bg1">
					<span class="label-input100">Nova Senha</span>
                    <input class="input100" id="novaSenha" placeholder="Insira sua Nova Senha" type="password" name="novasenha" >
                </div>
               

                <div class="wrap-input100 validate-input bg1">
					<span class="label-input100">Confirmar Senha</span>
                    <input class="input100" type="password" placeholder="Confirme Sua Nova Senha" 
                        name="confirmarsenha" id="confirmarSenha">
                </div>
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Salvar
						</span>
					</button>
                </div>
                <div class="container-contact100-form-btn">
					<button class="contact100-form-btn" id="id"  href= "{{ url('/listarusuario') }}">
						<span>
							Voltar
						
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>


@endsection