@section('nav')

<div style="margin-top:100px">
	<nav>
		<ul>
			<li><a href="#">View</a></li>
			<li class="drop">
				<a href="#">Usuários</a>
				<div class="dropdownContain">
					<div class="dropOut">
						<div class="triangle"></div>
							<ul>
								<li><a href="/cadastrarusuario"></a></li>
								<li>Listar</li>
								<li>Trocar Senha</li>
							</ul>
						</div>
					</div>
			</li>
			<li><a href="#">Help</a></li>
		</ul>
	</nav>
</div>
@endsection