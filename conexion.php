<!-- Este apartado hace la conexión con la base de datos -->
<?php
function conectar(){
    $host="localhost";
    $user="root";
    $pass="Vichuquen832";
    $bd="hd-2021-tf";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);
    
    return $con;
}
?>
