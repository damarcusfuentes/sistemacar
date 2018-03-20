<!doctype html>

<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.html");
	}elseif ($_SESSION['rol']==5) {
		header("Location:atletas.php");
	}
	?>

<html lang="es">
  <head>
    <title>Atletas</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     

    <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.css">
      <link href="logo.jpg" rel="shortcut icon">
      
      <!-- script para abrir en otra ventana-->
   

      
  </head>
  <body>
   <style>
        .bg-nav{
            background-color:#BCBCFB;
        }
         li:hover{
             background:rgba(0,0,0,0.8);
             
            
            
        }
       
       
        .navbar-toggler-icon{
            background-color: black;
        }
       
        .navbar-toggler{
            background-color: black;
        }
       
      </style>
      
      

  <nav class="navbar navbar-expand-lg  navbar-dark bg-nav">
       <a class="navbar-brand" href="">
   <img src="carrousel/2.png" width="180" height="55" class="d-inline-block align-top" alt="" >
           <a class="navbar-brand">SISTEMA CAR</a>
  </a>
  <a class="navbar-brand" href="atletas.php">Bienvenido: <strong> <?php echo $_SESSION['user'];?> </strong>  <span class="sr-only">(current)</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"> </span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
    <ul class="navbar-nav ml-auto">
        
       <li class="nav-item ">
           <a class="nav-link font" href="atletas.php"><font color="blue">INICIO</font></a>
      </li>
      
       <li class="nav-item">
           <a class="nav-link" href="datosatleta.php"><font color="blue">MI PERFIL</font></a>
      </li>
      
       <li class="nav-item">
        <a class="nav-link" href="#"><font color="blue">CITAS MEDICAS</font></a>
      </li>
        
         <li class="nav-item">
        <a class="nav-link" href="#"><font color="blue">PLAN NUTRICIONAL</font></a>
      </li>
        
         <li class="nav-item">
        <a class="nav-link" href="#"><font color="blue">COMPETENCIAS</font></a>
      </li>
      
        
         
    </ul>
      <a href="cerrarsesion.php" class="btn btn-danger btn-lg active btn-sm" role="button" aria-pressed="true">CERRAR SESION</a>
      
      </div>
</nav>
      
  <br>
<br>

  <br>

  <br>

  <br>

  <br>

  <br>

  <br>

  <br>

  
  <br>

  
  <br>

  <br>

  
  <br>

  
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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>