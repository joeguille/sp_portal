<?php
require_once('../../Connections/MiConexion.php');
$miConexion = new Conexion();

session_start();

$q=$_POST['q'];
if(isset($_POST['id_estetica'])){
    if(!empty($_POST['id_estetica'])){
        "SELECT descripcion_servicios.id_descripcion_servicios, descripcion_servicios.descripcion FROM `servicios`, `servicios_empresa`, `descripcion_servicios` WHERE descripcion_servicios.id_descripcion_servicios=servicios_empresa.id_descripcion_servicios AND servicios.id_servicio=servicios_empresa.id_servicio AND servicios_empresa.status=1 AND servicios_empresa.id_empresa = ".$_POST['id_estetica']." AND servicios_empresa.id_servicio = ".$q." GROUP BY id_descripcion_servicios POST";
        $res=mysqli_query($miConexion,"SELECT descripcion_servicios.id_descripcion_servicios, descripcion_servicios.descripcion FROM `servicios`, `servicios_empresa`, `descripcion_servicios` WHERE descripcion_servicios.id_descripcion_servicios=servicios_empresa.id_descripcion_servicios AND servicios.id_servicio=servicios_empresa.id_servicio AND servicios_empresa.id_empresa = ".$_POST['id_estetica']." AND servicios_empresa.status=1 AND servicios_empresa.id_servicio = ".$q." GROUP BY id_descripcion_servicios");
    }else{
        "SELECT descripcion_servicios.id_descripcion_servicios, descripcion_servicios.descripcion FROM `servicios`, `servicios_empresa`, `descripcion_servicios` WHERE descripcion_servicios.id_descripcion_servicios=servicios_empresa.id_descripcion_servicios AND servicios.id_servicio=servicios_empresa.id_servicio AND servicios_empresa.id_empresa = ".$_SESSION['estetica']." AND servicios_empresa.id_servicio = ".$q." GROUP BY id_descripcion_servicios SESION";
        $res=mysqli_query($miConexion,"SELECT descripcion_servicios.id_descripcion_servicios, descripcion_servicios.descripcion FROM `servicios`, `servicios_empresa`, `descripcion_servicios` WHERE descripcion_servicios.id_descripcion_servicios=servicios_empresa.id_descripcion_servicios AND servicios.id_servicio=servicios_empresa.id_servicio AND servicios_empresa.id_empresa = ".$_SESSION['estetica']." AND servicios_empresa.status=1 AND servicios_empresa.id_servicio = ".$q." GROUP BY id_descripcion_servicios");
    }

}else{
    "SELECT descripcion_servicios.id_descripcion_servicios, descripcion_servicios.descripcion FROM `servicios`, `servicios_empresa`, `descripcion_servicios` WHERE descripcion_servicios.id_descripcion_servicios=servicios_empresa.id_descripcion_servicios AND servicios.id_servicio=servicios_empresa.id_servicio AND servicios_empresa.id_empresa = ".$_SESSION['estetica']." AND servicios_empresa.id_servicio = ".$q." GROUP BY id_descripcion_servicios SESION";
    $res=mysqli_query($miConexion,"SELECT descripcion_servicios.id_descripcion_servicios, descripcion_servicios.descripcion FROM `servicios`, `servicios_empresa`, `descripcion_servicios` WHERE descripcion_servicios.id_descripcion_servicios=servicios_empresa.id_descripcion_servicios AND servicios.id_servicio=servicios_empresa.id_servicio AND servicios_empresa.id_empresa = ".$_SESSION['estetica']." AND servicios_empresa.status=1 AND servicios_empresa.id_servicio = ".$q." GROUP BY id_descripcion_servicios");

}
?>
<div class="input-group" style="width:100%">
                    <h6 align="left">M A R C A S</h6>
<select class="form-control" name="brand" id="brand" onchange="loadTiempo(this.value,select_estetica.value)">
<option value="0">MARCA</option>
<?php while($fila=mysqli_fetch_array($res)){
echo "<option value='".$fila['0']."'> ".utf8_encode($fila['1'])."</option>";
 } ?>
 </select>
 </div>