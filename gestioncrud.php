<!--Conexion a la Base de datos--->
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
<body style="background-color: black;">
  
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
  <br>
  <br>
    <div class="container text-white">
      <h2>Gestión de datos</h2>
    </div>
    <center><div >
        <div class="container mt-5">
              <div class="col-12">
                <form method="POST" action="gestioncrud.php">
                  <div class="mb-3">
                    <input type="text" class="form-control mb-3" name="buscar" id="buscar" placeholder="Ingrese su busqueda">
                  </div>
                  <button type="text" class="btn btn-danger">Buscar</button>
                </form>
              </div>
            </div>
            <div class="card col-12 mt-5">
              <div class="card-body bg-black">

                <!-- Consulta php para "BUSCAR" -->
                <?php
                 $busqueda=mysqli_query($con,"SELECT * FROM planes t1 INNER JOIN usuarios t2 ON t1.plan=t2.plan WHERE t2.nombrecompleto LIKE LOWER('%".$_POST["buscar"]."%') OR t2.sexo LIKE LOWER('%".$_POST["buscar"]."%') OR t2.plan LIKE LOWER('%".$_POST["buscar"]."%') OR t2.rut LIKE LOWER('%".$_POST["buscar"]."%') OR t2.duracion LIKE LOWER('%".$_POST["buscar"]."%') OR t2.edad LIKE LOWER('%".$_POST["buscar"]."%') ");
                $numero = mysqli_num_rows($busqueda); ?>
                <h5 class="card-tittle text-white">Resultados (<?php echo $numero; ?>)</h5>
                <?php while ($resultado = mysqli_fetch_array($busqueda)){ ?>

                    <!-- Tabla que muestra los datos buscados" -->
                  <div >
                    <table class="table bg-white" >
                      <thead class="table-dark table-striped">
                        <tr>
                          <!-- Fila que muestra los apartados buscados" -->
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
                          <!-- Muestra los datos de la Base de datos" -->
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
                      <!--Ventana Modal para la Alerta de Modificar--->
                      <?php  include('modalmod.php'); ?>
                    </table>
                  </div>
                  <?php } ?>
              </div>
            </div>
    </div></center>
    
    <div>
      <!--Footer--->
        <footer class="p-5 bg-black text-white text-center  position-relative">
            <div class="container">
                <p class="lead">Copyright &copy; 2021 Gorilla Training Systems</p>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <!--Scripts para mostrar los modals--->
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