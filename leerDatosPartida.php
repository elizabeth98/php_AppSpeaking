<?php


$dbname = 'UnityDB';
$dbuser = 'camilo';
$dbpass = 'Noviembre2018';
$dbhost = 'localhost';

//conectarce al servidor mysql  (servidor,user,pasword,NombreBD)
$conect = new mysqli($dbhost, $dbuser, $dbpass,$dbname);


//recibe los datos de unity, usamos el valor de estas variables
$numParti = $_REQUEST['numP'];


//pregunto si el id de usuario ya esta en la tabla
$IDexistente = mysqli_query($conect, "SELECT * FROM speaking_datosxpartida WHERE numPartida='$numParti' ");


//se obtienen todos los datos del usuario idUser
while($row = mysqli_fetch_array($IDexistente))
{
    $partidaID = $row['idPartida'];
    $partidaUsIDfk = $row['IdUser_FK'];
    $partidaNumPartida = $row['numPartida'];
    $partidaNumErrores = $row['numErrores'];
    $partidaNumAciertos = $row['numAciertos'];
    

    echo $partidaID;


}



//http://tadeolabhack.com:8081/test/Datos/leer.php?numP=9


?>

