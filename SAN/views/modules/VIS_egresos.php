<?php
#aca deberia de ir el session start

    #preguntamos si traemos una varibale ID. Deberia de venir x el boton de modificar


        $alumnos = ControladorFormularios::ctrSeleccionarEgresos();

        
?>



<br><br><br><br><br><br><br><br><br>

<center>
<div class="container-user"> 

  <!--<table class="table table-dark table-striped">-->

<table class="table-user">
    <thead>
      <tr>
      	<th>Cédula</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Genero</th>
        <th>Grado</th>
        <th>Seccion</th>
        <th>Nota</th>
        <th>Motivo de egreso</th>
        <th>representante</th>
        <th></th>
      </tr>
    </thead>
  
	<tbody>

		<?php foreach ($alumnos as $key => $value): ?>

		<tr>
			<td><?php echo $value['id']; ?></td>

			<td><?php echo $value['nombre'];?></td>

			<td><?php echo $value['apellido'];?></td>

			<td><?php echo $value['genero'];?></td>

			<td><?php echo $value['grado'];?></td>

			<td><?php echo $value['seccion'];?></td>

			<td><?php echo $value['nota'];?></td>

			<td><?php echo $value['motivo'];?></td>

			<td><?php echo $value['representante'];?></td>		
		</tr>

			
		 <?php endforeach ?>

	</tbody>
  </table>
  <br><br>
  <a class="btn btn-primary"  href="index.php?action=VIS_plantilla">Volver</a>
</div>
</center>