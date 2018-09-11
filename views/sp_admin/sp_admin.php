<?php
require_once('Connections/MiConexion.php');
$miConexion = new Conexion();

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sitio del Administrador</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/shop-homepage.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<!-- body --><!-- body --><!-- body --><!-- body --><!-- body --><!-- body --><!-- body --><!-- body --><!-- body --><!-- body --><!-- body --><!-- body --><!-- body --><!-- body -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				
				<a href="http://www.upq.mx/"><!-- Navigation --><!-- Navigation --><!-- Navigation --><!-- Navigation -->
                <img alt="Carousel Bootstrap First" src="img/logo upq/logo-upq-horizontal.png" style="height:70px; width:350px"><!-- Navigation --><!-- Navigation -->
                </a><!-- Navigation --><!-- Navigation --><!-- Navigation --><!-- Navigation --><!-- Navigation --><!-- Navigation -->
				
		 </div>
			
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="salir.php">Cerrar Sesión</a>
                    </li>
                    <li>
                        <a href="asesores.php">Asesores</a>
                    </li>
					<li>
                        <a href="#">Asesorados</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
<div class="col-lg-6 col-md-6 form-group"  align="center">
<form action='insert_asesor.php' method='POST'>
		<br>
        <H2 align="center">Registro Asesores</H2>
		<input type="hidden" name="usuario" class="form-control" value="<?php echo ''.$_SESSION['usuario'].'' ?>">
        <div class="input-group" style="width:100%">
            <h6 align="left">Matricula Asesor</h6>
			<input type="text" class="form-control" name="matricula" required>
		</div>
        
        <div class="input-group" style="width:100%">
            <h6 align="left">Nombre</h6>
			<input type="text" class="form-control" name="nombre" required>
		</div>
        
        <div class="input-group" style="width:100%">
            <h6 align="left">Apellido Paterno</h6>
			<input type="text" class="form-control" name="apep" required>
		</div>
        
        <div class="input-group" style="width:100%">
            <h6 align="left">Apellido Materno</h6>
			<input type="text" class="form-control" name="apem" required>
		</div>

		<div class="input-group" style="width:100%">
            <h6 align="left">Carreras</h6>
			<select class="form-control" name="carrera" id="carrera" required>
				<option value="null">Seleccionar...</option>
				<?php
				$sql1='SELECT * FROM `carreras` WHERE carreras.id_carrera<>2';
				$res1=mysqli_query($miConexion,$sql1);
				while($rowH=mysqli_fetch_array($res1)){
					echo ' <option value="'.$rowH[0].'">'.$rowH[1].'</option>';
				}
				?>
			</select>
		</div>
            
		<div class="input-group" style="width:100%">
            <h6 align="left">Contraseña</h6>
			<input type="text" class="form-control" name="pass" required>
		</div>
        <br><br>    
        <input type="submit" name="asesor">

</form>
</div>
<div class="col-lg-6 col-md-6 form-group"  align="center">
<form action='insert_asesorado.php' method='POST'>
		<br>
        <H2 align="center">Registro Asesorados</H2>
		<input type="hidden" name="usuario" class="form-control" value="<?php echo ''.$_SESSION['usuario'].'' ?>">
        <div class="input-group" style="width:100%">
            <h6 align="left">Matricula Asesorado</h6>
			<input type="text" class="form-control" name="matricula" required>
		</div>
        
        <div class="input-group" style="width:100%">
            <h6 align="left">Nombre</h6>
			<input type="text" class="form-control" name="nombre" required>
		</div>
        
        <div class="input-group" style="width:100%">
            <h6 align="left">Apellido Paterno</h6>
			<input type="text" class="form-control" name="apep" required>
		</div>
        
        <div class="input-group" style="width:100%">
            <h6 align="left">Apellido Materno</h6>
			<input type="text" class="form-control" name="apem" required>
		</div>

		<div class="input-group" style="width:100%">
            <h6 align="left">Carreras</h6>
			<select class="form-control" name="carrera" id="carrera" required>
				<option value="null">Seleccionar...</option>
				<?php
				$sql1='SELECT * FROM `carreras` WHERE carreras.id_carrera<>2';
				$res1=mysqli_query($miConexion,$sql1);
				while($rowH=mysqli_fetch_array($res1)){
					echo ' <option value="'.$rowH[0].'">'.$rowH[1].'</option>';
				}
				?>
			</select>
		</div>
            
		<div class="input-group" style="width:100%">
            <h6 align="left">Contraseña</h6>
			<input type="text" class="form-control" name="pass" required>
		</div>
        <br><br>    
        <input type="submit" name="asesorado">

</form>
</div>      

</body>
</html>