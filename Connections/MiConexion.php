<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"

class Conexion extends MySQLi{
		public function __construct(){
		//parent::__construct('mysql.hostinger.mx','u853265608_base','adru1234','u853265608_base');
		parent::__construct('localhost','root','','sp_portal');
		$this->query("SET NAMES 'utf-8';");
		$error=mysqli_connect_errno() ? die('Error con la conexión'.mysqli_connect_error()): $x = 'Conectado';
		unset($x);
		//$this->Miconexion = mysqli_connect('mysql.hostinger.mx','u853265608_base','adru1234','u853265608_base');
	   	$this->Miconexion = mysqli_connect('localhost','root','','sp_portal');
}
}
 ?>