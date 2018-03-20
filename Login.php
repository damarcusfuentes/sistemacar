
<?php
header("Content-Type: text/html;charset=utf-8");

session_start();
require("conexion.php");

$username=$_POST['email'];
$password =$_POST['password'];



// Mandamos a llamar a la conexion que hace referencia a la  base de datos




// Se hace un select a la tabla  usuarios de la base de datos  car2018

$sql2=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$username'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($password==$f2['passsuperadmin']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			$_SESSION['rol']=$f2['rol'];

			echo '<script>alert("BIENVENID@ SUPER ADMINISTRADOR")</script> ';
			echo "<script>location.href='superadmin.php'</script>";
		
		}
	}


$sql3=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$username'");
	if($f3=mysqli_fetch_assoc($sql3)){
		if($password==$f3['passadmin1']){
			$_SESSION['id']=$f3['id'];
			$_SESSION['user']=$f3['user'];
			$_SESSION['rol']=$f3['rol'];

			echo '<script>alert("BIENVENID@ ADMINISTRADOR")</script> ';
			echo "<script>location.href='administrador1.php'</script>";
		
		}
	}




$sql4=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$username'");
	if($f4=mysqli_fetch_assoc($sql4)){
		if($password==$f4['passadmin2']){
			$_SESSION['id']=$f4['id'];
			$_SESSION['user']=$f4['user'];
			$_SESSION['rol']=$f4['rol'];

			echo '<script>alert("BIENVENID@ ADMINISTRADOR2")</script> ';
			echo "<script>location.href='aministrador2.php'</script>";
		
		}
	}


	$sql=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$username'");
	if($f=mysqli_fetch_assoc($sql)){
		if($password==$f['password']){
			$_SESSION['id']=$f['id'];
			$_SESSION['user']=$f['user'];
			$_SESSION['rol']=$f['rol'];
			
			
		echo '<script>alert("BIENVENID@ USUARIO")</script> ';
			echo "<script>location.href='atletas.php'</script>";
			
		}else{
			echo '<script>alert("Contraseña Incorrecta")</script> ';
		
			echo "<script>location.href='index.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='index.php'</script>";	

	}

?>


