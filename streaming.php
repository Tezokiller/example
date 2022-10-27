<!DOCTYPE HTML>

<html>
<head>
<title>Actividad 2.4</title>
<link rel="stylesheet" type="text/css" href="ejemplo1.css" title="miEjemplo" media="all" />
</head>
<body>
<header>
  <h1>Actividad 2.4 </h1>
  <h2>STREAMING</h2>
</header>

<section>
  <h3>¿Qué son las plataformas de streaming?</h3>
    <article>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
    nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis 
    nisl ut aliquip ex ea commodo consequat. </p>
    </article>
  <h3>Usos</h3>
    <article>
    <p>Duis autem vel eum iriure dolor in hendrerit 
    in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla 
    facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent 
    luptatum zzril delenit augue duis dolore te feugait nulla facilisi. 
    Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet 
    doming id quod mazim placerat facer possim assum. Typi non habent claritatem 
    insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes 
    demonstraverunt lectores legere me lius quod ii legunt saepius. </p>
    </article>
  <h3>Artículo  tercero</h3>
    <article>
    <table width="1300" heigth="100">
<tr>
<td background="logo3.jpg" width="100%" heigth="100%" ><center><b><font size="20" color="black"><h1> A &nbsp; &nbsp; P &nbsp; &nbsp; I &nbsp; &nbsp; S </h1></B></h1></font></center></td>
 
        </tr>
</table>

<HR>
<BR>
<body bgcolor="#000000">

<br>
<video src="intro.mp4" controls>
    </article>
  <br/><br/>
  <nav> 
  <p><a href="index.html">Regresar al menu</a></p>
</nav>
</section>

<aside>
   <div id="anuncio1">
   <html>
   <h1>Datos Array</h1>
   <?php
$data = file_get_contents("https://run.mocky.io/v3/eed5da19-0749-4fe1-8f6b-f1d4a086f774");
$notas = json_decode($data, true);
foreach ($notas as $nota)
{
$nombre = "";
$apellidos = "";
$nota_final = "";
foreach ($nota as $key => $value){
switch ($key) {
case 'nombre':
$nombre = $value;
break;
case 'apellidos':
$apellidos = $value;
break;
case 'nota':
$nota_final = $value;
break;
}
}
echo "<p>Alumno: " . $nombre ."". $apellidos ."->". $nota_final . "</p>";
}
print_r($notas);
?>


    </div>
</aside>
<footer>
<h1>Trabajo elaborado por alumnos de la UTP</h1>
   <h2>Contactate con nosotros: selecciona <a href="equipo/equipo.html">Equipo Dinamita</a></h2>
   <br/>
</footer>
</body>
</html>