<?php
session_start();
$DB_HOST=$_ENV["DB_HOST"];
$DB_USER=$_ENV["DB_USER"];
$DB_PASSWORD=$_ENV["DB_PASSWORD"];
$DB_NAME=$_ENV["DB_NAME"];
$DB_PORT=$_ENV["DB_PORT"];
$conexion = mysqli_connect("$DB_HOST","$DB_USER","$DB_PASSWORD","$DB_NAME","$DB_PORT");
/*/$conexion= mysqli_connect("localhost", "root", "", "login_register_db");
if ($conexion){
    echo'conectado exitosamente a la base de datos';
}else{
    echo 'no se ha podido conectar a la base de datos';
}
*/
?>
