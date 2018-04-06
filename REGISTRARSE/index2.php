<!DOCTYPE html>

	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
	?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>INICIO DE SESIÓN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">


    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>


    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
	<?php
	include("include/cabecera.php");
	?>
</div>
</header>

<?php

include("include/menu.php");

?>


<div id="myCarousel" class="carousel slide homCar">
		<div class="carousel-inner" style="border-top:18px solid #222; border-bottom:1px solid #222; border-radius:4px;">
		  
		  
		  <div class="item active">
			<img src="images/inge.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>¿Qué es Redes y Telecomunicaciones?</h4>
				  <p>
				   Ingeniería en Redes y Telecomunicaciones es:
				  </p>
			</div>
		  </div>
		  
		  
		  <div class="item">
			<img src="images/tele.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Telecomunicaciones</h4>
				  <p>
				  Las telecomunicaciones son la trasmisión a distancia de datos de información por medios 
				  electrónicos y/o tecnológicos.
				  <br>
				  Los datos de información son transportados a los circuitos de telecomunicaciones mediante 
				  señales eléctricas.
				  </p>
			</div>
		  </div>
		  
		   <div class="item">
			<img src="images/infor.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Informática
</h4>
				  <p>
				  La topografía aplicada permite adquirir los conocimientos necesarios para realizar levantamientos topográficos para futuras aplicaciones y proporciona la capacidad para resolver problemas que se presentan en el campo.
				  </p>
			</div>
		  </div>
		  
		   <div class="item">
			<img src="images/redes.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Redes
</h4>
				  <p>
				  La topografía aplicada permite adquirir los conocimientos necesarios para realizar levantamientos topográficos para futuras aplicaciones y proporciona la capacidad para resolver problemas que se presentan en el campo.
				  </p>
			</div>
		  </div>
		  
		   <div class="item">
			<img src="images/1.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Topografía</h4>
				  <p>
				  La topografía aplicada permite adquirir los conocimientos necesarios para realizar levantamientos topográficos para futuras aplicaciones y proporciona la capacidad para resolver problemas que se presentan en el campo.
				  </p>
			</div>
		  </div>
		  
		   <div class="item">
			<img src="images/1.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Topografía</h4>
				  <p>
				  La topografía aplicada permite adquirir los conocimientos necesarios para realizar levantamientos topográficos para futuras aplicaciones y proporciona la capacidad para resolver problemas que se presentan en el campo.
				  </p>
			</div>
		  </div>
		  
		   <div class="item">
			<img src="images/1.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Topografía</h4>
				  <p>
				  La topografía aplicada permite adquirir los conocimientos necesarios para realizar levantamientos topográficos para futuras aplicaciones y proporciona la capacidad para resolver problemas que se presentan en el campo.
				  </p>
			</div>
		  </div>
		  
		   <div class="item">
			<img src="images/1.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Topografía</h4>
				  <p>
				  La topografía aplicada permite adquirir los conocimientos necesarios para realizar levantamientos topográficos para futuras aplicaciones y proporciona la capacidad para resolver problemas que se presentan en el campo.
				  </p>
			</div>
		  </div>
		  
		   <div class="item">
			<img src="images/1.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Topografía</h4>
				  <p>
				  La topografía aplicada permite adquirir los conocimientos necesarios para realizar levantamientos topográficos para futuras aplicaciones y proporciona la capacidad para resolver problemas que se presentan en el campo.
				  </p>
			</div>
		  </div>
		  
		   <div class="item">
			<img src="images/1.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Topografía</h4>
				  <p>
				  La topografía aplicada permite adquirir los conocimientos necesarios para realizar levantamientos topográficos para futuras aplicaciones y proporciona la capacidad para resolver problemas que se presentan en el campo.
				  </p>
			</div>
		  </div>
		  
		   <div class="item">
			<img src="images/1.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Topografía</h4>
				  <p>
				  La topografía aplicada permite adquirir los conocimientos necesarios para realizar levantamientos topográficos para futuras aplicaciones y proporciona la capacidad para resolver problemas que se presentan en el campo.
				  </p>
			</div>
		  </div>
		  <div class="item">
			<img src="images/5.png" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Curso de Algebra Lineal </h4>
				  <p>
				  No olvide que la clave del éxito en el estudio de las herramientas matemáticas radica en el entendimiento cabal de los conceptos fundamentales y la aplicación razonada enla resolución de problemas.
				  </p>
			</div>
		  </div>
		</div>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
</div>
			
<h3>MODELO EDUCATIVO</h3>
<P>Estamos instalados en el municipio de Juventino Rosas, Guanajuato,pertenecemos al Subsistema Nacional de Universidades Politécnicas.
En la UPJR contribuimos a que los egresados de nivel medio superior tengan opciones de continuar su formación profesional, adecuada a sus
intereses y a las necesidades de desarrollo estatal, regional y nacional, que les permitan participar ventajosamente en el mercado laboral,
razón por lo que sólo contamos con carreras vanguardistas.</P>

<P>Nuestro sistema educativo se enfatiza en la búsqueda permanente de nuevas formas de enseñanza-aprendizaje diseñadas con enfoques educativos 
flexibles y centrados en el aprendizaje, que desarrollan en los estudiantes habilidades para aprender a lo largo de la vida. Contando con 
programas educativos de buena calidad, diseñados con base en competencias, entendidas como los conocimientos, habilidades, destrezas y actitudes
necesarias para que el egresado pueda integrarse a cualquier ambiente.</P>

<div class="col-md-4 col-sm-6 col-xs-12">
            <div class="wrap-item text-justify">
			 <div class="item-img">
               <img src="images/MODELO.jpg">
              </div>
<br>
<P>En la formación de los alumnos se pone especial atención en el trabajo en grupo y en el fortalecimiento de valores,
como por ejemplo, la honestidad, el respeto a los demás, la responsabilidad, la libertad y la solidaridad, con el objeto 
de lograr en ellos una formación integral que contribuya a conformar una sociedad más justa.</P>
</br>

 <p>Se enfatiza también el aprendizaje del idioma inglés, de manera que el nivel de conocimiento alcanzado por nuestros alumnos 
al egresar les permita competir con ventaja en el ámbito laboral, de cara a las demandas de la creciente integración internacional.</p>	

<h3>Estructura Curricular</h3>
<div class="col-md-4 col-sm-6 col-xs-12">
            <div class="wrap-item text-justify">
			 <div class="item-img">
               <img src="images/2.png">
              </div>
			  

<h3>¿COMO PUEDES INSCRIBIRTE?</h3>


<p>>Para poder reinscribirte deberás seguir el siguiente procedimiento:</p>
<br>
<p>
-Descargar el recibo para el pago de Inscripción, seleccionar la Universidad Politécnica de Juventino Rosas y el concepto de Inscripción. Se encuentra  localizado en la página https://pagosenlinea.guanajuato.gob.mx/public/servicios?tipoServicio=ODES </br>
<br>
-Descargar el recibo de pago del Seguro Escolar (los encuentras en la pestaña de Servicios Escolares, en el menú superior de la página web de la UPJR).</br>
<br>
-Realizar el pago en el banco: $892 pesos de Inscripción y $50 pesos del seguro escolar (Obligatorio).</br>
<br>
-Entregar el voucher en el Departamento de Recursos Financieros.</br>
<br>
-Presentar los recibos sellados por el Departamento de Recursos Financieros al Departamento de Control Escolar.</br>
<br>
-Realizar precarga de materias.</br></p>

<h3>Si tienes dudas puedes acudir al departamento de Control Escolar o comunícate.</h3>
<p>VÍA TELEFÓNICA:
(412) 157-8000 Ext. 320

01 800 76-58-757</p>

<p> O MEDIANTE CORREO ELECTRÓNICO:
<br>auxiliar_escolares@upjr.edu.mx</br>
<br>tec_escolares@upjr.edu.mx</br>
serv_escolares@upjr.edu.mx</p>

<h3>Materias incluidas en el programa de aprendizaje de la carrera en Ingeniería en Redes y Telecomunicaciones</h3>
<div class="row" style="text-align:center">
			<div class="span2">
				<div class="well well-small">
					<h4>1er. Cuatrimestre</h4>
					<a href="al.php"><small>Ver detalles</small></a>	
				</div>
			</div>			
			

    
	</style>
  </body>
</html>