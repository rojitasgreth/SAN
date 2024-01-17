<?php

    /* preguntamos si traemos una varibale ID. Deberia de venir por el boton de cargar (nota). 
        busca coincidencias en la columna id
        busca que sea igual a el id que traiga la varible.
        Pasa las variables al modelo, solicitando respuesta, para así mostrar la info del estudiante al cargar notas*/
    if(isset($_GET["id"])){

        $item = "id";
        $valor = $_GET["id"];

        $estudiante = ControladorFormularios::ctrSeleccionarEstu($item,$valor);

    }

?>

<br><br><br><br><br><br><br><br>
<form method="POST">
<center>
<div class="container-user"> 

<table class="table-user">
    <thead>
      <tr>
        <th>Cédula estudiantil</th>
        <th>Nota</th>
        
      </tr>
    </thead>
  
    <tbody>

            <tr>
            <td><?php echo $valor;?></td>

            <td><select class="CargarNota" name='CargarNota' required>
                <option>Seleccione:</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
            </select>
            </td>
            </tr>


    </tbody>

  </table>

</div>

</div>
        <input type="hidden" name="id" value="<?php echo $valor; ?>">
            <?php

                #Se instancia el método no estatico para cargar nota.
                $CargarNota = new ControladorFormularios; 
                $CargarNota -> ctrCargarNota();
            ?>
                <button type="submit" class="btn btn-primary">Cargar nota</button>
</center>
</form>