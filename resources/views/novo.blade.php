<!DOCTYPE html>
<html>
 <head>
 	
	
	<!-- <script src="../../js/jquery-3.3.1.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
	<link href="../../css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
	
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


	

	<script type="text/javascript" src="js/novo.js"></script>
	<link rel="stylesheet" href="css/style.css">
	
</head>

<body>
<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Log in
</button>

<div class="modal-content">

<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	<h4 class="modal-title" id="myModalLabel">Log in</h4>
</div> <!-- /.modal-header -->

<div class="modal-body">
	<form role="form">
		<div class="form-group">
			<div class="input-group">
				<input type="text" class="form-control" id="uLogin" placeholder="Login">
				<label for="uLogin" class="input-group-addon glyphicon glyphicon-user"></label>
			</div>
		</div> <!-- /.form-group -->

		<div class="form-group">
			<div class="input-group">
				<input type="password" class="form-control" id="uPassword" placeholder="Password">
				<label for="uPassword" class="input-group-addon glyphicon glyphicon-lock"></label>
			</div> <!-- /.input-group -->
		</div> <!-- /.form-group -->

		<div class="checkbox">
			<label>
				<input type="checkbox"> Remember me
			</label>
		</div> <!-- /.checkbox -->
	</form>

</div> <!-- /.modal-body -->
</body>