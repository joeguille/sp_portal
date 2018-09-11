<?php require_once('Connections/MiConexion.php'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="ISC José Guillermo Rodríguez Ordaz">

    <title>Portal Calificaciones</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
<style>
h5 {
	color: white;
	width: 70%;
}
.navbar-inverse {
	background-color: black;	
}
.navbar-inverse .navbar-nav>li>a {
    color: white;
}

.navbar-nav>li:hover {
	color: black;
    background-color: aquamarine;
}
.input-group-addon {
    padding: 6px 12px;
    font-size: 14px;
    font-weight: 400;
    line-height: 1;
    color: aquamarine;
    text-align: center;
    background-color: black;
    border: 1px solid black;
	border-radius:0px;
}
.input-group-addon:hover {
	color: white;
}
.form-control{
	border-radius: 0px;
}
.btn-login{
	background-color: aquamarine; 
	border: aquamarine; 
	color: black; 
	height: 36px; 
	width: 70%
}
.btn-login:hover{
	background-color: white;
}
</style>

</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">			
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#logProfe" data-toggle="modal">Portal SP</a>
                    </li>
                    <li>
                        <a href="#">SP</a>
                    </li>
                </ul>
        </div>
    </nav>    
    	<br><br><br>
<div class="col-lg-4 col-md-4"></div>
<div class="col-lg-4 col-md-4 form-group" align="center" style="background-color:#000000">
<div align="center">
	<br><br><br>
	<p style="font-size:24px; color:white; display: inline-block;">INGRESA AL SITIO</p>
	<hr width="70%" style="padding:0px; margin:5px;"/>
    <form action="login.php" method="post">
	<br>
    <h5 align="left">Usuario</h5>
    <div class="input-group" style="width:70%">
    	<input type="text" name="usuario" class="form-control"/>
    </div>
    <br>
    
    <h5 align="left">Contraseña</h5>
    <div class="input-group" style="width:70%">
    	<input type="password" class="form-control" name="password" id="pass"/>
  		<span class="input-group-addon"><span class="glyphicon glyphicon-eye-open" onmouseover="mouseovera();" onmouseout="mouseouta();"></span></span>
	</div> 
    <br>
    
    <div name"badpass" id="badpass">
	<?php 
	if(isset($_GET['error'])){
		echo "<p class='lead' style='color: red; font-size: 10px'>datos de acceso erroneós</p>";
    } 
	$L=1;
	?>
    </div>                          
    <br><br>
    <script>
	function mouseovera(obj) {
		var obj = document.getElementById('pass');
		obj.type = "text";
	}
	function mouseouta(obj) {
		var obj = document.getElementById('pass');
		obj.type = "password";
	}
	function mouseoverb(obj) {
		var obj = document.getElementById('pass');
		obj.type = "text";
	}
	function mouseoutb(obj) {
		var obj = document.getElementById('pass');
		obj.type = "password";
	}
	</script>
    <input type="hidden" name="login" value="<?php $L ?>">
	<input type="submit" class="btn-login" value="I N I C I A R&nbsp;&nbsp; S E S I Ó N">
	</form>
    <br><br><br>
    
</div>
<div class="col-lg-4 col-md-4"></div>
<style>
@media (min-width: 1024px) {
.modal {
	 top: 20%;
     left: 25%;
     width: 60%;
     height: 70%;
     padding: 16px;
     background: #fff;
     color: #333;
     z-index:1050;
     overflow: auto;
	 overflow-x: hidden;
	 
}
.modal h5{
	color: #000;
	width: 70%;
}
}
@media (max-width: 1024px) and (min-width: 300px) {
.modal {
	 top: 5%;
     left: 5%;
     width: 90%;
     height: 80%;
     padding: 10px;
     background: #fff;
     color: #333;
     z-index:1050;
     overflow: auto;
	 overflow-x: hidden;
	 
}
}
</style>
<div id="logProfe" class="modal fade" role="dialog" align="center" style="background-color:#fff;">
<div align="center">
	<br>
	<button type="button" class="close" data-dismiss="modal">&times;</button><br>
	<p style=" font-size:18px; color: black; display: inline-block;">ACCESO A PROFESORES</p>
</div>
<div class="col-lg-1 col-md-1"></div>
<div class="col-lg-10 col-md-10 form-group" align="center" style="background-color:#FFFFFF;">
<form action="login_admin.php" method="post">
	<br>
    <h5 align="left">Usuario</h5>
    <div class="input-group" style="width:70%">
    	<input type="text" name="usuario" class="form-control"/>
    </div>
    <br>
    
    <h5 align="left">Contraseña</h5>
    <div class="input-group" style="width:70%">
    	<input type="password" class="form-control" name="password" id="pass"/>
  		<span class="input-group-addon"><span class="glyphicon glyphicon-eye-open" onmouseover="mouseoverb();" onmouseout="mouseoutb();"></span></span>
	</div> 
    <br>
    
    <div name"badpass" id="badpass">
	<?php 
	if(isset($_GET['error'])){
		echo "<p class='lead' style='color: red; font-size: 10px'>datos de acceso erroneós</p>";
    } 
	$L=1;
	?>
    </div>                          
    <br><br>
    <input type="hidden" name="login" value="<?php $L ?>">
	<input type="submit" class="btn-login" value="I N I C I A R&nbsp;&nbsp; S E S I Ó N">
</form>
<br>
</div>
<div class="col-lg-1 col-md-1"></div>
</div> 

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
