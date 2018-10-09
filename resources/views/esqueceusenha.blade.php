<!DOCTYPE html>
<html>
 <head>
  <title>Simple Login System in Laravel</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
  </style>
 </head>
 <body>
  <br />
  <div class="container box">

   <div align="center">
  <img  height="150" width="150" src="{{ asset('geminus.png') }}">
    </div>

    @if ($menssagem = Session::get('sucesso'))
   <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $menssagem }}</strong>
   </div>
   @endif

   @if ($menssagem = Session::get('error'))
   <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $menssagem }}</strong>
   </div>
   @endif
    @if (count($errors) > 0)

    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

     @endif
   <form method="post" action="{{ url('/main/validaremail') }}">
    {{ csrf_field() }}
    <div class="form-group">
        <input placeholder="email" type="email" name="email" id="email" class="form-control"/>
    </div>
    <div class="form-group">
     <input type="submit" name="novasenha" class="btn btn-primary" value="Nova Senha" />
    </div>
   </form>
  </div>
 </body>
</html>