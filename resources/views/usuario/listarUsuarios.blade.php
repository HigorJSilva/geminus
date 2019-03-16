@extends('main')
@extends('layouts.popup')
@extends('layouts.nav')
@section('content')

<style>
.m-login.m-login--2 .m-login__wrapper .m-login__container {
  width: 100%;
}

</style>
 
<section style="margin-top:180px">
  <!--for demo wrap-->
  <h1>Listagem de usuários</h1>
    <div class="tbl-header" >
        <table cellpadding="0" cellspacing="0" border="0">
            <thead>
                <tr>
                    <th>CPF</th>
			        <th>Email</th>
		            <th>Ações</th>
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
                <button type="button" class="buttonRemover" style="border:none" data-toggle="modal" 
                data-target="#modalPush">Excluir</button>

            </tr>
                
        @endforeach
        </tbody>
        </table>
    </div>
  <div style="float: right; margin-top:1px"> {{ $usuarios->render() }}</div>
</section>
 <!--Modal-->
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
@endsection