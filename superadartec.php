<!doctype html>


<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.html");
	}elseif ($_SESSION['rol']==2) {
		header("Location:superadmin.php");
	}
	?>

<html lang="en">
  <head>
    <title>SUPER ADMINISTRADOR</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     

    <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.css">
      <link href="logo.jpg" rel="shortcut icon">
      
      <!-- estilos CSS-->
      <style>
         
      </style>
      
  </head>
  <body>
    <style>
        .bg-nav{
            background:#6D90CA;
        }
         li:hover{
            background:#BA1D1D;
             
            
            
        }
            
        .navbar-toggler-icon{
            background-color: black;
        }
       
        .navbar-toggler{
            background-color: black;
        }
		
		
			h4{
				
				 color: black;
              font-size: 20px; 
				
			}
       h3{
				
				 color: black;
              font-size: 35px; 
				
			}
      </style>
      
      

  <nav class="navbar navbar-expand-lg  navbar-dark bg-nav">
       <a class="navbar-brand" href="">
   <img src="carrousel/2.png" width="180" height="55" class="d-inline-block align-top" alt="" >
           <a class="navbar-brand">SISTEMA CAR</a>
  </a>
  <a class="navbar-brand" href="administrador1.php">Bienvenido: <strong><?php echo $_SESSION['user'];?> </strong>  <span class="sr-only">(current)</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"> </span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
    <ul class="navbar-nav ml-auto">
        
       <li class="nav-item ">
           <a class="nav-link " href="superadmin.php"><font color="white">INICIO</a></font>
      </li>
      
       <li class="nav-item">
           <a class="nav-link" target=_self href="supadminusr.php"><font color="white"> ADMINISTRAR USUARIOS</font></a>
      </li>
      
       <li class="nav-item">
        <a class="nav-link" href="supadatle.php"><font color="white">ATLETAS</font></a>
      </li>
        
         <li class="nav-item">
        <a class="nav-link" href="superadartec.php"><font color="white">AREA. TECNICA</font></a>
      </li>
        
         <li class="nav-item">
        <a class="nav-link" href="supadarmed.php"><font color="white">AREA. MEDICA</font></a>
      </li>
      
        
   
      
        
        <a href="cerrarsesion.php" class="btn btn-danger btn-lg active btn-sm" role="button" aria-pressed="true">CERRAR SESION</a>
        
    </ul>
    
      </div>
</nav>
      <br>
	  <br>
      
	  
	  
	     <section class="container mt-5 pt-5">
       <center><h3> AREA TECNICA</h3></center>
          
      <br>
	  <br>
	  <br>

   <div class="card-deck" >
   
       <div class="card">
    <img class="card-img-top img-fluid" src="img/modulos/entrenador.jpg"  width="318" height="180" alt="Card image cap">
    <div class="card-body">
      <center> <h4 class="card-title">ENTRENADOR</h4>
     <a class="btn btn-primary btn-sm" href="#" role="button">INGRESAR</a> </center>
    </div>
  </div>
       
       
       
       
  <div class="card">
    <img class="card-img-top img-fluid" src="img/modulos/preparadorfisico.jpg"  width="318" height="180" alt="Card image cap">
    <div class="card-body">
     <center>  <h4 class="card-title">PREPARADOR FISICO</h4>
    <a class="btn btn-primary btn-sm" href="preparadorfisico.php" role="button">INGRESAR</a> </center>
    </div>
  </div>
  
  
 
            
</div>
      </section>
      
<br>
<br>
  <br>    
    
      <style>
    
          
          footer{
	clear: both;
	margin-top: 50px;
	background: #000;
	color: #85c34a;
	text-align: center;
	padding: 30px;
}


footer {
width:100%;
background:#6D90CA;
margin: 0px;
clear:both;
color: #000;
text-align: center;
padding: 9px;
font-size: 90%;
}

footer ul{
padding: 3px;
list-style-type: none;
text-align:center;
margin: 8px;
border-radius: 16px;
}

footer ul li {
display: inline;
}

footer ul  li  a {
text-decoration: none;
font-family: Arial;
padding: .2em 1em;
color:#fff;
background-color: 
#021425;
}

footer ul  li  a:hover{
color: #fff;
background-color: 
#021425;
}

.texto {
color: #fff;
position:relative;
padding:4px ;
text-align:center;
font-weight: 320;
border-radius:32px;
}


.texto h3, .texto p {
background: rgba(0,0,0,.8);
display: inline-block;
padding: 8px 8px;
border-radius:27px;
}


.texto p {
font-size: 20px;
letter-spacing: 2.5px;
border-radius:38px;
}
          
          
      </style>
      <footer class="footer mt-3 pt-3">
         <div><ul>
             
            
        
           
        
        
        </ul></div>
			<div>Circuito Vial Sur S/N, Col. Otay Universidad, Tijuana, Baja California, México</div>
	<div>  &copy; 2018 CENTRO DE ALTO RENDIMIENTO BC</div>

          
      </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>