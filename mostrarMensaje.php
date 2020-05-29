<?php


$dbname = 'UnityDB';
$dbuser = 'camilo';
$dbpass = 'Noviembre2018';
$dbhost = 'localhost';

//conectarce al servidor mysql  (servidor,user,pasword,NombreBD)
$conect = new mysqli($dbhost, $dbuser, $dbpass,$dbname);

$idMensaje= $_REQUEST['idmens'];

//consultar la tabla
$consulta = mysqli_query($conect, "SELECT * FROM speaking_datomensaje WHERE idMensaje ='$idMensaje' ");


while($mensaje= mysqli_fetch_array($consulta))
{
	$mensajem = $mens['mensaje'];	
	
}

$rta = $mensajem;

echo $rta;	
echo "\n";

//http://tadeolabhack.com:8081/test/Datos/speakingPhp/mostrarMensaje.php?idmens=1

?>