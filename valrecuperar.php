<?php
include("conexion.php");
$con=conectar();

$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];


session_start();
$_SESSION['correo']=$correo;




$consulta="SELECT*FROM usuarios where correo='$correo'";
$resultado=mysqli_query($con,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    $sql="UPDATE usuarios SET contrasena='$contrasena' WHERE correo='$correo'";
    $query=mysqli_query($con,$sql);

    if($query){
        echo'<script type="text/javascript">
        alert("Contraseña cambiada con exito! \n Volviendo al login...");
        window.location.href="login.html";
        </script>';
        
        
    }

}else{
    ?>
    <?php
    include("recuperar.html");
    echo'<script type="text/javascript">
    alert("El correo ingresado no está registrado en nuestra pagina! \nRegresando al formulario de recuperación...");
    window.location.href="recuperar.html";
    </script>';

  ?>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($con);
?>