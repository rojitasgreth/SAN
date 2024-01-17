<?php

    #preguntamos si traemos una varibale ID. Deberia de venir x el boton de modificar
    if(isset($_GET["id"])){

        $item = "id";           #busca coincidencias en la columna id
        $valor = $_GET["id"];    #busca que sea igual a el id que traiga la varible GET

        $estudiante = ControladorFormularios::ctrSeleccionarEstu($item,$valor);

    }

?>
<br><br><br><br><br><br><br><br>
<center>
<div class="container-user"> 

  <!--<table class="table table-dark table-striped">-->

<table class="table-user">
    <thead>
      <tr>
         <th>&&</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Género</th>
        <th>Grado</th>
        <th>Seccion</th>
        <th>Nota</th>
        <th>representante</th>
        <th>Motivo_egreso</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
  
    <tbody>


            <tr>
            <td><?php echo $estudiante['id'];?></td>

            <td><?php echo $estudiante['nombre'];?></td>

            <td><?php echo $estudiante['apellido'];?></td>

            <td><?php echo $estudiante['genero'];?></td>

            <td><?php echo $estudiante['grado'];?></td>

            <td><?php echo $estudiante['seccion'];?></td>

            <td><?php echo $estudiante['nota'];?></td>

            <td><?php echo $estudiante['representante'];?></td>
            
            <form method="post">
            <td>
                <select class="motivo" name='motivo'>
                <option>Seleccione:</option>
                <option value="Retiro">Retiro</option>
                <option value="Graduado">Egresado 6to</option>
                <option value="Otro">Otro</option>
            </select>

            <td>

                <input type="hidden" value="<?php echo $estudiante["id"]; ?>" name="id">

            <td>

                
                    <input type="hidden" value="<?php echo $estudiante["id"]; ?>" name="DesincEstu">

                    <button type="submit" class="btn btn-danger"  name="DesincEstu">Aceptar</button>
                    <?php

                        $eliminar = new ControladorFormularios();
                        $eliminar -> ctrDesincorporarEstudiante();


                    ?>
                </form>
                                
            </td>

        </tr>

            

    </tbody>

  </table>
</div>
</center>
