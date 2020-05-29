<?php


$dbname = 'UnityDB';
$dbuser = 'camilo';
$dbpass = 'Noviembre2018';
$dbhost = 'localhost';

$conect = new mysqli($dbhost, $dbuser, $dbpass,$dbname);

$idUsuario1=$_REQUEST['idus1'];
$idUsuario2=$_REQUEST['idus2'];
$mensaje=$_REQUEST['mens'];

$adicionarDatos = mysqli_query($conect, "INSERT INTO speaking_datomensaje(idUsuario_FK,id_usuario2_FK,mensaje) VALUES('$idUsuario1,'$idUsuario2','$mensaje')");

echo "mensaje adicionado";

//http://tadeolabhack.com:8081/test/Datos/speakingPhp/escribirMensaje.php?idus1=5&idus2=4&mens=helloBitch
?>