<?php
function conectar(){
    $host="localhost";
    $user="root";
    $pass="hernan123";

    $bd="hd-2021-tf";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>