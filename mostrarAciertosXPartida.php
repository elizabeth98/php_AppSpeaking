<?php


$dbname = 'UnityDB';
$dbuser = 'camilo';
$dbpass = 'Noviembre2018';
$dbhost = 'localhost';

//conectarce al servidor mysql  (servidor,user,pasword,NombreBD)
$conect = new mysqli($dbhost, $dbuser, $dbpass,$dbname);

$partidaID = $_REQUEST['IDpart'];

//consultar la tabla
$consulta = mysqli_query($conect, "SELECT * FROM speaking_datosxpartida WHERE idPartida ='$partidaID' ");


while($aciertos= mysqli_fetch_array($consulta))
{
	$aciertosPartida = $aciertos['numAciertos'];	

}

$rta = $aciertosPartida;

echo $rta;	
echo "\n";

//http://tadeolabhack.com:8081/test/Datos/speakingPhp/mostrarAciertosXPartida.php?IDpart=1

?>