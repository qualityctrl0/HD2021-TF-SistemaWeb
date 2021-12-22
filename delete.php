<!-- Este apartado elimina datos de la BD y CRUD -->
<?php

include("conexion.php");
$con=conectar();

$id=$_REQUEST['id'];

$sql="DELETE FROM usuarios  WHERE id='$id'";
$query=mysqli_query($con,$sql);


?>
