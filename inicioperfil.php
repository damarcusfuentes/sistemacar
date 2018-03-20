<!doctype html>
<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.html");
	}elseif ($_SESSION['rol']==4) {
		header("Location:inicioperfil.php");
	}
	?>

<html lang="en">
  <head>
    <title>INICIO SISTEMA CAR</title>
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
            background:#BCBCFB;
        }
         li:hover{
            background: #000;
               
        }
            
			strong{
				  background-color: black;
				color: white;
              font-size: 12px;
				
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
  <a class="navbar-brand" href="inicioperfil.php">Bienvenid@ <strong> <?php echo $_SESSION['user'];?> </strong>  <span class="sr-only">(current)</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"> </span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
    <ul class="navbar-nav ml-auto">
        
       <li class="nav-item ">
           <a class="nav-link font" href=""><font color="blue">INICIO</font></a>
      </li>
      
       <li class="nav-item">
           <a class="nav-link" href=""><font color="blue"> DATOS PERSONALES</font></a>
      </li>
      
       <li class="nav-item">
        <a class="nav-link" href=""><font color="blue">CITAS MEDICAS</font></a>
      </li>
        
         <li class="nav-item">
        <a class="nav-link" href=""><font color="blue">PLAN NUTRICIONAL</font></a>
      </li>
        
         <li class="nav-item">
        <a class="nav-link" href=""><font color="blue">COMPETENCIAS</font></a>
      </li>
      
        
   
      
        
        <a href="cerrarsesion.php" class="btn btn-danger btn-lg active btn-sm" role="button" aria-pressed="true">CERRAR SESION</a>
        
    </ul>
    
      </div>
</nav>
      
      <section class="container mt-2 pt-2">
       <h3>PLATAFORMA QUE PERMITE LA EVALUACION DE ATLETAS Y OPTIMIZACION DE PROCESOS PARA EL <br>  CENTRO DE ALTO RENDIMIENTO</h3>
          
      <br>
  

      </section>
      
      
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="carrousel/3.jpg" width="900" height="400" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="carrousel/5.jpg" width="900" height="400" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="carrousel/4.jpg"  width="900" height="400" alt="Third slide">
    </div>
     
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
     
      
    
      <style>
          h3{ text-align: center;
              font-size: 20px;  
          }
          
          h4{
              text-align: center;
              font-size: 15px;
          }
          
             
        h5{
            font-size: 20px;
        }
          
          .btn-primary{ background: #021425; color:#fff;}
          .btn-primary:hover{ 
              
              cursor: pointer;
              background: #000000;
              color: #fff;
              
          
          
          }
          
      </style>
      
      
      
      
      <section class="container mt-5 pt-5">
       <h3>ESTA PLATAFORMA ES POSIBLE GRACIAS A:</h3>
          
      <hr>
   <div class="card-deck">
  <div class="card">
    <img class="card-img-top img-fluid" src="carrousel/itt.PNG"  width="318" height="180" alt="Card image cap">
    
  </div>
  <div class="card">
    <img class="card-img-top  img-fluid" src="carrousel/2.png"  width="318" height="180" alt="Card image cap">

  </div>
 
</div>
      </section>
      
      <style>
         .blockquote-footer1{ background: red;  color: }
          
          .blockquote-footer2{background: darkgreen;}
          
           
          h4{
              font-size: 15px;
             
          }
          
          .card-body
          
          { background: gray; 
              
              color: white;
          
          
          }
          
           .card-body2
          
          { background: green; 
              
              color: white;
          
          
          }
              
          h5{
              font-size: 25px;
              color: black;
             
          }
         
      </style>
      
     
          
 <section class="container color mt-2 pt-2">
    <div class="card text-center">
  <div class="card-header">
      
  </div>
  <div class="card-body">
      <h5>DESARROLLADORES DE LA PLATAFORMA CAR</h5>
   
      
      
       <p class="card-text">MARCOS GENARO FUENTES BARAJAS</p>
       <p class="card-text">RAQUEL DOMINGUEZ GORDILLO</p>
       <p class="card-text">KAREN NOHEMI MORALES GALINDO</p>
       <p class="card-text">JOSE ISAAC BONILLA JR</p>
       <p class="card-text">YAHARA LIZETT HERNANDEZ CORDOVA</p>
       <p class="card-text">MARYURID CHAVEZ DUARTE</p>
       <p class="card-text">VICTOR MANUEL RODRIGUEZ HERNANDEZ</p>
   
  </div>
  <div class="card-footer text-muted">
   
  </div>
</div>
      </section>
      
      
    <section class="container color mt-2 pt-2">
    <div class="card text-center">
  <div class="card-header">
      
  </div>
  <div class="card-body2">
      <br>
      <h5>PERSONAS QUE CONTRIBUYERON AL DESARROLLO DE LA PLATAFORMA CAR</h5>
   
      
      
       <p class="card-text">DR. ARNULFO ALANIS GARZA </p>
       <p class="card-text">DR. ALEJANDRO RAZO </p>
       <p class="card-text">LIC. SERGIO CONTRERAS HERNANDEZ</p>
       <p class="card-text">LIC. ARMANDO MARTINEZ GRACIALINO</p>
       <p class="card-text">TEC. BAUDEL CALVILLO CASTORENA</p>
       <p class="card-text">PSIC. ALEJANDRA AVILA FLORES</p>
       <p class="card-text">L.N. JENNY RIOS PIÑAL</p>
       <p class="card-text">ING. FRANCISCO TRUJILLO OLIVAS</p>
      <p class="card-text">DR. CARLOS M.JIMENEZ AMARO</p>
      
      <br>
   
  </div>
  <div class="card-footer text-muted">
    <br>
  </div>
</div>
        
      </section>
      
     
    
      <style>
          footer{
	clear: both;
	margin-top: 50px;
	background: #000;
	color: #000;
	text-align: center;
	padding: 30px;
}
          
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
background:#BCBCFB;;
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