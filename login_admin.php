<?php 
require_once('Connections/MiConexion.php');
$miConexion = new Conexion();

$usuario = $_POST['usuario'];
$password = $_POST['password'];

if(isset($usuario) && isset($password)){
$sql = "SELECT * FROM `teachs` WHERE user = '$usuario' AND password ='$password'" or die(mysql_error());
$res=mysqli_query($miConexion,$sql);
$row=mysqli_fetch_array($res);

	if(mysqli_num_rows($res)>0){
	session_start();
	$_SESSION['usuario'] = $row['0'];
		header("location: profesor.php");
	}else {
		?>
    	<script type="text/javascript">	
			window.location.href="index.php?error=true";
        </script>
    <?php
	}
}
?>