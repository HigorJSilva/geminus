<html>


<head>

  <meta charset="UTF-8">
  <title>Listar Usuários</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="{{ asset('css/tabela.css ')}}">
      <link rel="stylesheet" href="{{ asset('css/style1.css ')}}">
      <!-- <link href="{{ asset('css/tabela.css') }}" rel="stylesheet"/> -->

  
</head>

<body style="    background-size: 112%;">

@extends('layouts.popup');
<section>
  <!--for demo wrap-->
  <h1>Listagem de Usuários</h1>
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
              <td>{{$usuario->email}}</td>
              <td  text-align="center" ><a href="{{URL::to('/cadastrar/'.$usuario->id)}}" class = "button">Alterar</a>
               <a href="{{URL::to('/excluir/'.$usuario->id)}}" class = "buttonRemover">Excluir</a></td>
            </tr>

            
           
					@endforeach
     
      </tbody>
    </table>
  </div>
</section>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="{{ asset('js/tabela.js') }}"></script>


</body>
</html>