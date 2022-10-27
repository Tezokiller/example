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

<html>
<h1>En forma de tabla</h1>
 
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
