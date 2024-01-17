<?php


$usuarios = ControladorFormularios::ctrSeleccionarRegistros(null, null); #Los traemos nulo pq no necesitamos buscar coincidencias 



?>

<br><br><br><br><br><br><br><br><br>

<center>
<div class="container-user"> 

	<table class="table-user">

		<thead>
		<tr>
			<th>&&</th>
			<th>Usuario</th>
			<th>Password</th>
			<th>Email</th>
			<th>Estatus</th>
			<th>Cargo</th>
			<th>Fecha</th>
			<th>cargar</th>
		</tr>
		</thead>
	
		<tbody>

			<?php foreach ($usuarios as $key => $value): ?>

				<tr>
					<td><?php echo ($key+1); ?></td>

					<td><?php echo $value['user'];?></td>

					<td><?php echo $value['password'];?></td>

					<td><?php echo $value['email'];?></td>

					<td><?php echo $value['status2'];?></td>

					<td><?php echo $value['cargo'];?></td>


					<td><?php echo $value['fecha'];?></td>

					<td>
						<div class="acciones">
						
																					
							<a class="btn btn-danger"  name="EditarRegistro" href="index.php?action=VIS_editar&id=<?php echo $value["id"]; ?>">Editar</a>


					</td>

				</tr>

				
			<?php endforeach ?>

		</tbody>

	</table>
</div>

</center>