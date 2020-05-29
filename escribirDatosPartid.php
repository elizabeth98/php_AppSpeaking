<?php


$dbname = 'UnityDB';
$dbuser = 'camilo';
$dbpass = 'Noviembre2018';
$dbhost = 'localhost';

//conectarce al servidor mysql  (servidor,user,pasword,NombreBD)
$conect = new mysqli($dbhost, $dbuser, $dbpass,$dbname);


//recibe los datos de unity, usamos el valor de estas variables

$idUser = $_REQUEST['idUs'];
$numEr = $_REQUEST['numE'];
$numAci = $_REQUEST['numA'];


  //insertar Valores en la base de datos Bonotes
  $adicionarDatos = mysqli_query($conect, "INSERT INTO speaking_datosxpartida(idUsuario_FK,numErrores,numAciertos) VALUES('$idUser','$numEr','$numAci')");

  echo "adicionadoResultados";





//http://tadeolabhack.com:8081/test/Datos/speakingPhp/escribirDatosPartid.php?idUs=2&numE=4&numA=3


?>

