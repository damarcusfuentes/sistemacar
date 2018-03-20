<?php
header("Content-Type: text/html;charset=utf-8");

$realname=$_POST['realname'];
$email=$_POST['nick'];
$password=$_POST['password'];
$password2=$_POST['password2'];


if (isset($_POST['perfil']) && !empty($_POST['perfil']))
	{
		$perfil = $_POST['perfil'];
		$perfil = $perfil;	
	}else{
		$perfil = "";
	}	

require("conexion.php");

$checkemail=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$email'");
	$check_mail=mysqli_num_rows($checkemail);
		if($password==$password2){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el correo electronico designado para un usuario, verifique sus datos");</script> ';
			 echo "<script>location.href='index.php'</script>";
			}else{
				
				//require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				mysqli_query($mysqli,"INSERT INTO login VALUES('','$realname','$password','$email','$perfil','','','','2')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario Registrado con Exito");</script> ';
                echo "<script>location.href='index.php'</script>";
				
			}
			
		}else{
			echo ' <script language="javascript">alert("Las Contraseñas No Coinciden, Vuelva A Intentarlo");</script> ';
			echo "<script>location.href='index.php'</script>";
				
		}

	
?>