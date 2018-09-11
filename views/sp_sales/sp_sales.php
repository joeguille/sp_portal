<?php
require_once('../../Connections/MiConexion.php');
$miConexion = new Conexion();

session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="ISC José Guillermo Rodríguez Ordaz">

    <title>Modulo de Ventas</title>

    <link href="../../css/bootstrap.min.css" rel="stylesheet">
<style>
h5 {
	color: black;
}
h6 {
	color: white;
}
p{
	text-transform: uppercase;
	margin: 0px;
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
                        <a href="#">Mis Ventas</a>
                    </li>
                    <li>
                        <a href="exit.php">Cerrar Sesión</a>
                    </li>
                </ul>
        </div>
    </nav>    
    	<br><br><br>
<div class="col-lg-2 col-md-2"></div>
<div class="col-lg-8 col-md-8 form-group" align="center" style="background-color:white">
<div align="left">
	<br>
	<p style="font-size:20px; color:blue; display: inline-block;">R E A L I Z A R &nbsp;&nbsp; V E N T A</p>
    <br>
</div>
<form action="sale_form.php" method="post">
	<br>
	<h5 align="center"><b>- PREV. TICKET -</b></h5>
	<br>
    <h5 align="left">N I C K N A M E</h5>
    <div class="input-group" style="width:100%">
    	<input type="text" name="client_nickname" placeholder="AUTOMÓVIL / CLIENTE" class="form-control"/>
    </div>
                           
    <br><br>
    <input type="hidden" name="login" value="<?php $L ?>">
	<input type="submit" class="btn-login" value="A Ñ A D I R">
</form>
<br>
<br><br><br>
</div>
<div class="col-lg-2 col-md-2"></div>
    <script src="../../js/jquery.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
</body>
</html>
