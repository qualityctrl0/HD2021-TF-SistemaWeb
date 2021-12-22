<?php
include("conexion.php");
$con=conectar();


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



$sql="INSERT INTO usuarios(nombrecompleto, rut, correo, contrasena, sexo, fechanac, edad, plan, duracion, ntarjeta, nombretarjeta, mestarjeta, yeartarjeta, ccv) VALUES('$nombrecompleto','$rut','$correo','$contrasena','$sexo','$fechanac','$edad','$plan','$duracion','$ntarjeta','$nombretarjeta','$mestarjeta','$yeartarjeta','$ccv')";
$query= mysqli_query($con,$sql);

if($query){
    if($plan=="Experto"){
        Header("Location: homeexperto.html");
        
    }else {
    }
    if($plan=="Intermedio"){
        Header("Location: homeintermedia.html");
        
    }else {
    }
    if($plan=="Principiante"){
        Header("Location: homeprincipiante.html");
        
    }else {
    }
    
    
}else {
}
?>