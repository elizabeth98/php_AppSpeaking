<?php


$dbname = 'UnityDB';
$dbuser = 'camilo';
$dbpass = 'Noviembre2018';
$dbhost = 'localhost';

//conectarce al servidor mysql  (servidor,user,pasword,NombreBD)
$conect = new mysqli($dbhost, $dbuser, $dbpass,$dbname);

$userID = $_REQUEST['IDuser'];

//consultar la tabla
$consulta = mysqli_query($conect, "SELECT * FROM SpeakingUsuario WHERE idUsuario ='$userID' ");


while($datosUsuario= mysqli_fetch_array($consulta))
{
	$nombreU = $datosUsuario['nombre'];	
	$correoU = $datosUsuario['correo'];
	
}

$rta1 = $nombreU;
$rta2 = $correoU;

echo $rta1;	
echo "\n";
echo $rta2;	

//http://tadeolabhack.com:8081/test/Datos/speakingPhp/mostrarNombreXUsuario.php?IDuser=5

?>