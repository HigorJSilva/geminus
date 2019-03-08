<html>


<head>

  <meta charset="UTF-8">
  <title>Listar Usuários</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link href="{{ asset('css/vendors.bundle.css') }}" rel="stylesheet"/>
	<link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet"/>
  <link rel="stylesheet" href="{{ asset('css/tabela.css ')}}">
  <link rel="stylesheet" href="{{ asset('css/style1.css ')}}">
  <script src="{{ asset('js/vendors.bundle.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/scripts.bundle.js') }}" type="text/javascript"></script>

  
</head>

<body style="    background-size: 112%;">

@extends('layouts.popup');
<section>
  <!--for demo wrap-->
  <h1>Listagem de Usuários</h1>
  @if ($message = Session::get('sucesso'))
				<div class="m-alert m-alert--outline alert alert-success" style="text-align: center;
        margin-top:5%; " role="alert">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong>{{ $message }}</strong>
				</div>
        @endif
        
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>CPF</th>
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
              <td>{{$usuario->email}}</td>
              <td  text-align="center" ><a href="{{URL::to('/cadastrarusuario/'.$usuario->id)}}" class = "button">Alterar</a>
               <!-- <a href="{{URL::to('/excluirusuario/'.$usuario->id)}}" class = "buttonRemover">Excluir</a></td> -->
                
               <!-- Button trigger modal-->
              <button type="button" class="buttonRemover" style="border:none" data-toggle="modal" 
              data-target="#modalPush">Excluir</button>

            </tr>
            
					@endforeach
        
      </tbody>
    
    </table>
   
  </div>
  <div style="float: right; margin-top:1px"> {{ $usuarios->render() }}</div>
</section>
<div class="modal fade" id="modalPush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  
  <div class="modal-dialog modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">Confirmar exclusão</p>
      </div>

      <!--Body-->
      <div class="modal-body">
        <p>Tem certeza que deseja excluir permanente esse registro?</p>
      </div>

      <!--Footer-->
      <div class="modal-footer flex-center">
        <a href="{{URL::to('/excluirusuario/'.$usuario->id)}}" class="button">Sim</a>
         <a href="#";class="buttonRemover" class="buttonRemover" data-dismiss="modal">Não</a>
         
        
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="{{ asset('js/tabela.js') }}"></script>
</body>
</html>