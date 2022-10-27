<!DOCTYPE HTML>

<html>
<head>
<title>Actividad 2.4</title>
<link rel="stylesheet" type="text/css" href="ejemplo1.css" title="miEjemplo" media="all" />
</head>
<body>
<header>
  <h1>Actividad 2.4 </h1>
  <h2>Ejercicio Imprimir</h2>
</header>
<nav> 
<p><a href="imprimir.php">Enlace 1</a></p>
<p><a href="#">Enlace 2</a></p>
<p><a href="#">Enlace 3</a></p>
<p><a href="#">Enlace 4</a></p>
</nav>
<section>
  <h1>Parte principal de la página: Título</h1>
  <h2>Subtítulo de la parte principal.</h2>
  <h3>Artículo primero</h3>
    <article>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
    nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
    enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis 
    nisl ut aliquip ex ea commodo consequat. </p>
    </article>
  <h3>Artículo segundo</h3>
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
    <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. 
    Mirum est notare quam littera gothica, quam nunc putamus parum claram, 
    anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. 
    Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
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

<h2>En forma de tabla</h2>
 
<?php
 //bucle para recorrer los elementos del array
 for ($i = 0; $i<count($notas); $i++){
?>
 <table border="1">
  <tr>
   <td>Nombre: </td>
   <td>
    <?php echo $notas[$i]["nombre"]; ?> 
   </td>
  </tr>
  <tr>
   <td>Apellido: </td>
   <td>
    <?php echo $notas[$i]["apellidos"]; ?>
   </td>
  </tr>
  <tr>
   <td>Nota final: </td>
   <td>
    <?php echo $notas[$i]["nota"]; ?>
   </td>
  </tr>  
 </table><br />
<?php 
 } //cerramos bucle 
?> 

    </div>
</aside>
<footer>
   <h1>Página del manual de HTML5 por Anyelguti</h1>
   <h2>Contacta con nosotros: email <a href="mailto:aprendeweb@ymail.com">aprendeweb@ymail.com</a></h2>
   <br/>
</footer>
</body>
</html>