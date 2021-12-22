<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Modificar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="Js/jquery-3.4.1.min.Js"></script>
    </head>
    <body>
<!--ventana para Update--->
<div class="modal fade" id="editChildresn<?php echo $resultado['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: crimson !important;">
      <h5 class="modal-title">Modificar datos</h5>
      <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>


      <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $resultado['id'] ?>">

            <div class="modal-body" id="cont_modal">

            <input type="hidden" name="id" value="<?php echo $resultado['id']  ?>">
                                <label for="nombrecompleto">Nombre completo</label>
                                <input type="text" class="form-control mb-3" name="nombrecompleto" placeholder="Nombre completo" value="<?php echo $resultado['nombrecompleto']  ?>">
                                <label for="rut">RUT (Sin puntos y con guión)</label>
                                <input type="text" class="form-control mb-3" name="rut" placeholder="RUT" maxlength="10" minlength="9" value="<?php echo $resultado['rut']  ?>">
                                <label for="correo">Correo</label>
                                <input type="email" class="form-control mb-3" name="correo" placeholder="Correo" value="<?php echo $resultado['correo']  ?>">
                                <label for="contrasena">Contraseña</label>
                                <input type="text" class="form-control mb-3" name="contrasena" placeholder="Contraseña" minlength="8" id="password" value="<?php echo $resultado['contrasena']  ?>">
                                <label for="sexo">Sexo</label>
                                <select  class="form-select" id="sexo" name="sexo" value="<?php echo $resultado['sexo']  ?>">
                                    <option selected="true" disabled="disabled">Confirme o modifique el sexo</option>
                                    <option>Masculino</option>
                                    <option>Femenino</option>
                                    <option>Otros</option>
                                </select>
                                <label for="fechanac">Fecha de nacimiento</label>
                                <input type="date" class="form-control mb-3" id="fecha" name="fechanac" placeholder="Fecha de nacimiento" min="1920-01-01" max="2007-12-31" value="<?php echo $resultado['fechanac']  ?>">
                                <label for="edad">Edad</label>
                                <input type="number" name="edad" id="edad" class="form-control input-sm" readonly="" value="<?php echo $resultado['edad']  ?>"/>
                                <label for="sexo">Plan escogido</label>
                                <select  class="form-select" id="plan" name="plan" value="<?php echo $resultado['plan']  ?>">
                                    <option selected="true" disabled="disabled">Confirme o modifique el plan</option>
                                    <option>Principiante</option>
                                    <option>Intermedio</option>
                                    <option>Experto</option>
                                </select>
                                <label for="sexo">Duracion del plan</label>
                                <select  class="form-select" id="duracion" name="duracion" value="<?php echo $resultado['duracion']  ?>">
                                    <option selected="true" disabled="disabled">Confirme o modifique la duracion del plan</option>
                                    <option>Mensual</option>
                                    <option>Trimestral</option>
                                </select>
                                <label for="ntarjeta">Numero tarjeta</label>
                                <input type="text" class="form-control mb-3" name="ntarjeta" placeholder="Numero tarjeta" maxlength="19" value="<?php echo $resultado['ntarjeta']  ?>">
                                <label for="nombretarjeta">Nombre tarjeta</label>
                                <input type="text" class="form-control mb-3" name="nombretarjeta" placeholder="Nombre tarjeta" value="<?php echo $resultado['nombretarjeta']  ?>">
                                <label for="mestarjeta">Mes tarjeta</label>
                                <input type="number" min="1" max="12" class="form-control mb-3" name="mestarjeta" placeholder="Mes tarjeta" value="<?php echo $resultado['mestarjeta']  ?>">
                                <label for="yeartarjeta">Año tarjeta</label>
                                <input type="number" min="2021" max="2029" class="form-control mb-3" name="yeartarjeta" placeholder="Año tarjeta" value="<?php echo $resultado['yeartarjeta']  ?>">
                                <label for="ccv">CCV</label>
                                <input type="text" class="form-control mb-3" name="ccv" placeholder="CCV" maxlength="3" value="<?php echo $resultado['ccv']  ?>">
                
                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-success">Guardar Cambios</button>
            </div>
       </form>

    </div>
  </div>
</div>
<!---fin ventana Update --->
<script src='Js/calcular_edad.js'></script>
