<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM usuarios";
    $query=mysqli_query($con,$sql);


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Gestión de datos GTS</title>
  </head>
<body>
    <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <img src="imagenes/logo3.png">
          
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">

        </ul>

        <div class="text-end">
          <a type="button" class="btn btn-danger" href="index.html">Cerrar Sesión</a>
        </div>
      </div>
    </div>
  </header>
    <div class="container">
      <h2>Gestión de datos</h2>
    </div>
    <center><div >
        <div class="container mt-5">
              <div class="col-12">
                <form method="POST" action="gestioncrud.php">
                  <div class="mb-3">
                    <input type="text" class="form-control mb-3" name="buscar" id="buscar" placeholder="Ingrese su busqueda">
                  </div>
                  <button type="text" class="btn btn-primary">Buscar</button>
                </form>
              </div>
            </div>
            <div class="card col-12 mt-5">
              <div class="card-body">
                <?php
                 $busqueda=mysqli_query($con,"SELECT * FROM planes t1 INNER JOIN usuarios t2 ON t1.plan=t2.plan WHERE t2.nombrecompleto LIKE LOWER('%".$_POST["buscar"]."%') OR t2.sexo LIKE LOWER('%".$_POST["buscar"]."%') OR t2.plan LIKE LOWER('%".$_POST["buscar"]."%')");
                $numero = mysqli_num_rows($busqueda); ?>
                <h5 class="card-tittle">Resultados (<?php echo $numero; ?>)</h5>
                <?php while ($resultado = mysqli_fetch_array($busqueda)){ ?>
                    
                  <div >
                    <table class="table" >
                      <thead class="table-success table-striped">
                        <tr>
                            <th>Datos personales</th>
                          <th>ID</th>
                          <th>Nombre completo</th>
                          <th>RUT</th>
                          <th>Correo</th>
                          <th>Contraseña</th>
                          <th>Sexo</th>
                          <th>Fecha de nacimiento</th>
                          <th>Edad</th>
                          <th>Plan</th>
                          <th>Duracion</th>
                          <th>Numero tarjeta</th>
                          <th>Nombre tarjeta</th>
                          <th>Mes tarjeta</th>
                          <th>Año tarjeta</th>
                          <th>CCV</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <th></th>
                          <th><?php  echo $resultado['id']?></th>
                          <th><?php  echo $resultado['nombrecompleto']?></th>
                          <th><?php  echo $resultado['rut']?></th>
                          <th><?php  echo $resultado['correo']?></th>
                          <th><?php  echo $resultado['contrasena']?></th>
                          <th><?php  echo $resultado['sexo']?></th>
                          <th><?php  echo $resultado['fechanac']?></th>
                          <th><?php  echo $resultado['edad']?></th>
                          <th><?php  echo $resultado['plan']?></th>
                          <th><?php  echo $resultado['duracion']?></th>
                          <th><?php  echo $resultado['ntarjeta']?></th>
                          <th><?php  echo $resultado['nombretarjeta']?></th>
                          <th><?php  echo $resultado['mestarjeta']?></th>
                          <th><?php  echo $resultado['yeartarjeta']?></th>
                          <th><?php  echo $resultado['ccv']?></th>                                        
                        </tr>
                      </tbody>
                      <thead>
                          <tr>
                              <th>Datos de Plan</th>
                              <th>ID</th>
                              <th>Nombre de plan</th>
                              <th>Entrevista personal</th>
                              <th>Entrenamiento personalizado</th>
                              <th>Dieta personalizada</th>
                              <th>Revision</th>
                              <th>Contacto</th>
                              <th>Seguimiento</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <th></th>
                              <th><?php  echo $resultado['id_plan']?></th>
                              <th><?php  echo $resultado['plan']?></th>
                              <th><?php  echo $resultado['entrevista']?></th>
                              <th><?php  echo $resultado['entrpers']?></th>
                              <th><?php  echo $resultado['dietpers']?></th>
                              <th><?php  echo $resultado['revision']?></th>
                              <th><?php  echo $resultado['contacto']?></th>
                              <th><?php  echo $resultado['seguimiento']?></th>
                              <th></th>
                              <th></th>
                              <th></th>
                              <th><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editChildresn<?php echo $resultado['id']; ?>">Modificar</button></th>
                                <th><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteChildresn<?php echo $resultado['id']; ?>">Eliminar</button></th>
                          </tr>
                      </tbody>
                      <!--Ventana Modal para la Alerta de Eliminar--->
                      <?php include('modaldel.php'); ?>
                      <?php  include('modalmod.php'); ?>
                    </table>
                  </div>
                  <?php } ?>
              </div>
            </div>
    </div></center>
    
    <div class="container">
        <footer class="py-3 my-4">
          <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="home.html" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="nosotros.html" class="nav-link px-2 text-muted">Nosotros</a></li>
          </ul>
          <p class="text-center text-muted">© 2021, Iron Revolution Gym, Hernán Gómez Rivera</p>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="Js/jquery.min.js"></script>
    <script src="Js/popper.min.js"></script>
    <script src="Js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

        $(window).load(function() {
            $(".cargando").fadeOut(1000);
        });

//Ocultar mensaje
    setTimeout(function () {
        $("#contenMsjs").fadeOut(1000);
    }, 3000);



    $('.btnBorrar').click(function(e){
        e.preventDefault();
        var id = $(this).attr("id");

        var dataString = 'id='+ id;
        url = "delete.php";
            $.ajax({
                type: "POST",
                url: url,
                data: dataString,
                success: function(data)
                {
                  window.location.href="gestioncrud.php";
                  $('#respuesta').html(data);
                }
            });
    return false;

    });


});
</script>
</body>
</html>