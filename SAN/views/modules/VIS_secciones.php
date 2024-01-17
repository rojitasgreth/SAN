<link rel="stylesheet" href="resources/css/secciones.css">  
<center>
	
	<fieldset>
	<legend></legend>

            <form method="POST" class="form" action="index.php?action=	VIS_v_plantilla">

                <label>Seleccione el Grado</label>
                <select name="grado" required>
                    <option value= 1>1</option>
					<option value= 2>2</option>
					<option value= 3>3</option>
					<option value= 4>4</option>
					<option value= 5>5</option>
					<option value= 6>6</option>
                </select>



				<label for="seccion">Selecciona una sección:</label>
				<div class="radio-group">
					<input type="radio" id="seccion-a" name="seccion" value="a">
					<label for="seccion-a">Sección A</label>

					<input type="radio" id="seccion-b" name="seccion" value="b">
					<label for="seccion-b">Sección B</label>

					<input type="radio" id="seccion-c" name="seccion" value="c">
					<label for="seccion-c">Sección C</label>
				</div>


				
					<button type="submit" class="btn btn-primary">Continuar</button>
					<a class="btn btn-primary"  name="VerEgresos" href="index.php?action=VIS_egresos">Ver Egresos</a>


            </form>

			
	</fieldset>
</center>


