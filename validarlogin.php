<?php
include("conexion.php");
$con=conectar();

$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];

session_start();
$_SESSION['correo']=$correo;


$consulta="SELECT*FROM usuarios where correo='$correo' and contrasena='$contrasena'";
$resultado=mysqli_query($con,$consulta);
$filas=mysqli_num_rows($resultado);


$busquedaplan=mysqli_query($con,"SELECT plan FROM usuarios where correo='$correo' and contrasena='$contrasena'");
$resultado2 = mysqli_fetch_array($busquedaplan);
$plan=$resultado2['plan'];


if($filas){
  
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

}else{
    ?>
    <?php
    include("login.html");
    echo'<script type="text/javascript">
    alert("Datos erróneos ó no registrados! \nRegresando al login...");
    window.location.href="login.html";
    </script>';

  ?>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($con);
?>