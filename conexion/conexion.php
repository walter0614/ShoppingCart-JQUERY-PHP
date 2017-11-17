<?php
class conexion {
    var $conexion;
    var $usuario;
    var $password;
    var $puerto;
    var $bdatos;
    public function definirConexion() {
        $this->usuario = "root";
        $this->password = "";
        $this->ip = "localhost";
        $this->puerto = "";
        $this->bdatos = "unicol";
        $this->setConexion();
    }
    public function conectar() {
        $this->conexion = mysql_connect($this->ip, $this->usuario, $this->password); mysql_select_db('unicol', $this->conexion);
    }
    public function setConexion() {
        $this->conectar();
    }
    public function getConexion() {
        return $this->conexion;
    }
    public function close() {
        mysql_close($this->conexion);
    }

}

function showMessage($message){
	$log=true;
	if($log){
		echo $message."<br />";
	}
}  
?>
