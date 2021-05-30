<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <link href="../controladores/agregar.css" rel="stylesheet"/>
    <title>Nuevo capitulo </title>
</head>
<body>
    <?php
    $isbnt=$_GET['isbn'];
    echo("<form id='formulario01'  method='POST' action='../controladores/agregarcap.php?isbn=$isbnt' >");
    ?>
			<h1>Capitulos</h1>
			
				<label for="capitulo" class="formulario__label">Número capitulo</label>
				<div class="formulario__grupo-input">
					<input type="text"  name="nucapitulo" id="nucapitulo" placeholder=""/>	
				</div>
               
				
			

            
			<div class="formulario__grupo" id="grupo__NombreC">
				<label for="capitulon" class="formulario__label">Nombre Capitulo</label>
				<div class="formulario__grupo-input">
					<input type="text"  name="capitulon" id="capitulon" placeholder=""/>	
				</div>			
			</div>

            <br>
            
			<div class="formulario__grupo" id="grupo__tipo">
				<label for="tipo" class="formulario__label">nombre autor</label>
                <br>
					<?php
					include '../../config/conexionBD.php';
					$sql = "SELECT aut_nombre from autor ";

					$result = $conn->query($sql);
					echo('<select name="nombres" id="nombres">
					');
 				if ($result->num_rows > 0) {
 					while($row = $result->fetch_assoc()) {
						echo('<option value="'.$row['aut_nombre'].'">'.$row['aut_nombre'].'</option>');
 					}
				}
					echo('</select>');
					?>
			</div>
			<br>
            <p>&nbsp;</p>
			<input type="submit" id="crear" name="crear" value="Aceptar"/>
            <br>
            <br>
            <input  type="reset" onclick="location.href='registrar.php'" id="cancelar" name="cancelar" value="Regresar" />
		</form> 
       
</body>
</html>