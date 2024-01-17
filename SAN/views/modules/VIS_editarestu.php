<?php

    #preguntamos si traemos una varibale ID. Deberia de venir x el boton de modificar
    if(isset($_GET["id"])){

        $item = "id";           #busca coincidencias en la columna id
        $valor = $_GET["id"];    #busca que sea igual a el id que traiga la varible GET

        $estudiante = ControladorFormularios::ctrSeleccionarEstu($item,$valor);

    }

?>

<br><br><br><br><br><br><br><br>
<form method="POST">
<center>
<div class="container-user"> 

  <!--<table class="table table-dark table-striped">-->

<table class="table-user">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Género</th>
        <th>Grado</th>
        <th>Seccion</th>
        <th>representante</th>

      </tr>
    </thead>
  
    <tbody>

            <tr>
            <td><input type="text" class="form-control" id="id" name="ActualizarId" value="<?php echo $estudiante["id"]; ?>" required></td>

            <td><input type="text" class="form-control" id="nombre" name="ActualizarNombre" value="<?php echo $estudiante["nombre"]; ?>" required></td>

            <td><input type="text" class="form-control" id="apellido" name="ActualizarApellido" value="<?php echo $estudiante["apellido"]; ?>" required></td>

            <td><select class="form-control" name="ActualizarGenero" required>
                    <option>Seleccione:</option>
                    <option value="F">Femenino</option>
                    <option value="M">Masculino</option>
            </select></td>
        
            <td><select class="form-control" name='ActualizarGrado' required>
                <option>Seleccione:</option>
                <option value="1">1er Grado</option>
                <option value="2">2do Grado</option>
                <option value="3">3er Grado</option>
                <option value="4">4to Grado</option>
                <option value="5">5to Grado</option>
                <option value="6">6to Grado</option>
            </select></td>

            <td><select class="form-control" name='ActualizarSeccion' required>
                <option>Seleccione:</option>
                <option value="A">Seccion A</option>
                <option value="B">Seccion B</option>
                <option value="C">Seccion C</option>
            </select>
                
            </td>

            <td><input type="text" class="form-control" id="representante" name="ActualizarRepresentante" value="<?php echo $estudiante["representante"]; ?>" required></td>
                

           
        </tr>


    </tbody>

  </table>

</div>

</div>
            <?php
                $actualizar = new ControladorFormularios;   #metodo no estatico: instanciamos
                $actualizar -> ctrActualizarEstu();
            ?>
                <button type="submit" class="btn btn-primary">Actualizar</button>
</center>
</form>
