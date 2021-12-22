<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombrecompleto=$_POST['nombrecompleto'];
$rut=$_POST['rut'];
$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];
$sexo=$_POST['sexo'];
$fechanac=$_POST['fechanac'];
$edad=$_POST['edad'];
$plan=$_POST['plan'];
$duracion=$_POST['duracion'];
$ntarjeta=$_POST['ntarjeta'];
$nombretarjeta=$_POST['nombretarjeta'];
$mestarjeta=$_POST['mestarjeta'];
$yeartarjeta=$_POST['yeartarjeta'];
$ccv=$_POST['ccv'];

$sql="UPDATE usuarios SET nombrecompleto='$nombrecompleto',rut='$rut',correo='$correo',contrasena='$contrasena',sexo='$sexo',fechanac='$fechanac', edad='$edad', plan='$plan' , duracion='$duracion' , ntarjeta='$ntarjeta' , nombretarjeta='$nombretarjeta' , mestarjeta='$mestarjeta' , yeartarjeta='$yeartarjeta' , ccv='$ccv'   WHERE id='$id'";
$query=mysqli_query($con,$sql);

echo "<script type='text/javascript'>
        window.location='gestioncrud.php';
    </script>";
?>