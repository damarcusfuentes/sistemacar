<?php
require_one('config.php');

class modelo{
protected $_db;

public function_construct(){
$this->_db=new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);


 if ( $this->_db->connect_errno)P{
 echo"fallo al conectar la base de datos".$this->_db->connect_errno;
 return;
  
 }

$this->_db->set_charset(DB_CHARSET);

  }
 }

?>