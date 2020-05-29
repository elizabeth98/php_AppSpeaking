<?php


$dbname = 'UnityDB';
$dbuser = 'camilo';
$dbpass = 'Noviembre2018';
$dbhost = 'localhost';

//conectarce al servidor mysql  (servidor,user,pasword,NombreBD)
$conect = new mysqli($dbhost, $dbuser, $dbpass,$dbname);


//recibe los datos de unity, usamos el valor de estas variables
$nomb = $_REQUEST['nombr'];



//pregunto si el id de usuario ya esta en la tabla
$IDexistente = mysqli_query($conect, "SELECT * FROM SpeakingUsuario WHERE nombre='$nomb' ");


//se obtienen todos los datos del usuario idUser
while($row = mysqli_fetch_array($IDexistente))
{
    $usuarioID = $row['idUser'];
    $usuarioNombre = $row['nombre'];
    $usuarioContra = $row['contrasena'];
    $usuarioCorreo= $row['correo'];

    echo $usuarioNombre;


}



//http://tadeolabhack.com:8081/test/Datos/leer.php?nombr=Elizabeth


?>

