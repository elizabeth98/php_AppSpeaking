<?php


$dbname = 'UnityDB';
$dbuser = 'camilo';
$dbpass = 'Noviembre2018';
$dbhost = 'localhost';

//conectarce al servidor mysql  (servidor,user,pasword,NombreBD)
$conect = new mysqli($dbhost, $dbuser, $dbpass,$dbname);


//recibe los datos de unity, usamos el valor de estas variables

$nombre = $_REQUEST['nom'];
$contrasena = $_REQUEST['contra'];
$correo = $_REQUEST['co'];


  //insertar Valores en la base de datos Bonotes
  $adicionarDatos = mysqli_query($conect, "INSERT INTO SpeakingUsuario(nombre,contrasena,correo) VALUES('$nombre','$contrasena','$correo')");

  echo "adicionado";





//http://tadeolabhack.com:8081/test/Datos/speakingPhp/escribir.php?nom=Elizabeth&contra=1234&co=elizbeth99@hotmail.com


?>

