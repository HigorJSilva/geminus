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
    <h1> Sua nova senha é: {{$senha}}</h1>
    
    <div class="form-group">
    <a href='http://localhost:8000/login'>  <input type="submit" name="login" class="btn btn-primary" value="Login" /></a>
    </div>
 </body>
</html>