<?php

if(isset($_REQUEST['grado']) && isset($_REQUEST['seccion'])){

    $item = "grado";
    $valor = $_REQUEST['grado'];

    $item2 = "seccion";
    $valor2 = $_REQUEST['seccion'];

    $estudiante = ControladorFormularios::ctrSeleccionarAula($item,$valor, $item2, $valor2);
}else{
  echo "ERROR";
  }
?>


<br><br><br><br><br><br><br><br><br>

<center>

<div class="container-user"> 

  <table class="table-user">
      <thead>
        <tr>
          <th>&&</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Grado</th>
          <th>Seccion</th>
          <th>Representante</th>
          <th>Nota</th>
          <th></th>

        </tr>
      </thead>
    
    <tbody>

      <?php foreach ($estudiante as $key => $value): ?>

        <tr>
          
          <td><?php echo $value['id']; ?></td>

          <td><?php echo $value['nombre'];?></td>

          <td><?php echo $value['apellido'];?></td>

          <td><?php echo $value['grado'];?></td>

          <td><?php echo $value['seccion'];?></td>

          <td><?php echo $value['representante'];?></td>

          <td><?php echo $value['nota'];?></td>

          <td><a class="btn btn-danger"  name="CargarNota" href="index.php?action=VIS_cargarnota&id=<?php echo $value["id"]; ?>">Cargar</a></td>

      </tr>

        
      <?php endforeach ?>

    </tbody>

  </table>
</div>



</center>