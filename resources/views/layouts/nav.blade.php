    <link rel="stylesheet" href="{{asset('css/reset.css')}}"> <!-- CSS reset -->
	<link rel="stylesheet" href="{{asset('css/style.css')}}"> <!-- Resource style -->
    <script src="{{asset('js/modernizr.js')}}"></script> <!-- Modernizr -->
    <header>
        <div class="cd-logo"><img src="{{asset('media/logogeminus.png')}}" alt="Logo"></div>
      

		<nav class="cd-main-nav-wrapper">
			<ul class="cd-main-nav">
				<li><a href="#0">About</a></li>
				<li><a href="#0">Projects</a></li>
				<li><a href="#0">Disciplinas</a></li>
				<li><a href="#0">Professores</a></li>
				<li>
					<a href="#0" class="cd-subnav-trigger"><span>Usuarios</span></a>

					<ul>
						<li class="go-back"><a href="#0">Menu</a></li>
						<li><a href="/listarusuario">Listar</a></li>
						<li><a href="/cadastrarusuario">Cadastrar</a></li>
						<li><a href="/trocarsenha">Trocar Senha</a></li>
						<li><a href="#0" class="placeholder">Placeholder</a></li>
					</ul>
				</li>
			</ul> <!-- .cd-main-nav -->
		</nav> <!-- .cd-main-nav-wrapper -->
		
		<a href="#0" class="cd-nav-trigger">Menu<span></span></a>
    </header>
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/main.js"></script> <!-- Resource jQuery -->