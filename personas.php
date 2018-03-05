<?php

require_once ('modelo.php');

class personas extends modelo{
protected $idpersona;
protected $usuario;
protected $password;
protected $correo;
protected $nombre;
protected $edad;
protected $genero;
protected $fechaNacimiento;
protected $estadoCivil;
protected $ciudadNacimiento;
protected $direccion;



public function_construct{
 parent::_construct();
 
}

public function registro($usuario,$password,$correo,$nombre,$edad,$genero,$fechaNacimiento,$estadoCivil,$ciudadNacimiento,$direccion){

$sql=" INSERT INTO persona (usuario,password,correo,nombre,edad,genero,fechaNacimiento,estadoCivil,ciudadNacimiento,direccion) VALUES ('".$usuario."','".$password."','".$correo."','".$nombre."','".$edad."','".$genero."','".$fechaNacimiento."','".$estadoCivil."','".$ciudadNacimiento."','".$direccion."')";
$resultado=$this->_db->query($sql);
  if(!$resultado) {
  echo "fallo el ingreso de datos";
 
  } else {
  return $resultado;
  $resultado->close();
  $this->_db->close();
  
 
  }
  }


public function buscar ($nombre){

$sql="SELECT *FROM persona WHERE persona='".$nombre."'";
$busca=$this->_db->query($sql);
$respuesta=$busca->fetch_all(MYSQLI_ASSOC);
if(respuesta) {

return $respuesta;
$respuesta->close();
$this->_db->close();


}
}


?>