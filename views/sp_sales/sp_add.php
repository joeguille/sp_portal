<?php
require_once('../../Connections/MiConexion.php');
$miConexion = new Conexion();

session_start();


$q=$_POST['q'];
if(isset($_POST['id_estetica'])){
     $sql="SELECT servicios_empresa.tiempo_servicio FROM `servicios`, `servicios_empresa`, `descripcion_servicios` WHERE descripcion_servicios.id_descripcion_servicios=servicios_empresa.id_descripcion_servicios AND servicios.id_servicio=servicios_empresa.id_servicio AND servicios_empresa.id_descripcion_servicios = ".$q." AND servicios_empresa.id_empresa = ".$_POST['id_estetica'];
}else{
    $sql="SELECT servicios_empresa.tiempo_servicio FROM `servicios`, `servicios_empresa`, `descripcion_servicios` WHERE descripcion_servicios.id_descripcion_servicios=servicios_empresa.id_descripcion_servicios AND servicios.id_servicio=servicios_empresa.id_servicio AND servicios_empresa.id_descripcion_servicios = ".$q." AND servicios_empresa.id_empresa = ".$_SESSION['estetica'];
}

$res=mysqli_query($miConexion,$sql);

while($fila=mysqli_fetch_array($res)){
	$mods=$fila['0']/15;
	echo "<input type='hidden' class='form-control' name='tiempo' id='tiempo' value='".$fila['0']."'/>";
	echo "<h6 align='left'>Duración Aproximada ".$fila['0']." minutos Módulos ".$mods."</h6>";
}
?>