<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="../controladores/agregar.css" rel="stylesheet"/>
	<title>Nuevo libro</title>
</head>
<body  style="text-align: center;"  >


	<form id="formulario01"  method="POST" action="../controladores/agregar.php" >
			<h1>Nuevo libro</h1>
			
			<div class="formulario__grupo" id="grupo__nombres">
				<label for="nombrel" class="formulario__label">nombre libro</label>
				<div class="formulario__grupo-input">
					<input type="text"  name="nombre" id="nombre" placeholder=""/>
				</div>	
			</div>

			<div class="formulario__grupo" id="grupo__isbn">
				<label for="isbn" class="formulario__label">ISBN</label>
				<div class="formulario__grupo-input">
					<input type="text"  name="isbn" id="isbn" placeholder=""/>	
				</div>	
			</div>
			
			<div class="formulario__grupo" id="grupo__numerospag">
				<label for="numerospag" class="formulario__label">Numero Paginas</label>
				<div class="formulario__grupo-input">
					<input type="text"  name="numerospag" id="numerospag" placeholder=""/>
				</div>		
			</div>
		<form id="formulario01"  method="POST" action="../controladores/agregarcap.php" >
			<h1>Capitulos</h1>
			<div class="formulario__grupo" id="grupo__Ncapitulo">
				<label for="capitulo" class="formulario__label">Número capitulo</label>
				<div class="formulario__grupo-input">
					<input type="text"  name="capitulo" id="nombre capitulo" placeholder=""/>	
				</div>
               
				
			</div>

            
			<div class="formulario__grupo" id="grupo__NombreC">
				<label for="capitulon" class="formulario__label">Nombre Capitulo</label>
				<div class="formulario__grupo-input">
					<input type="text"  name="capitulon" id="capitulon" placeholder=""/>	
				</div>			
			</div>


			<div class="formulario__grupo" id="grupo__tipo">
				<label for="tipo" class="formulario__label">nombre autor</label>
				<div class="formulario__select">
				<select  name="cerveza">    
					<option value="SanMiguel">San Miguel</option>    
					<option value="Mahou">Mahou</option>    
					<option value="Heineken">Heineken</option>    
					<option value="Carlsberg">Carlsberg</option>    
					<option value="Aguila">Aguila</option>   

				</select>
					
				</div>
                <span id="mensajeTipo" class="error"></span>
				
			</div>
			<br>
		</form> 
			<div class="botones" style="background-color: black;">
			<p>&nbsp;</p>
			<input type="submit" id="crear" name="crear" value="Aceptar" />
			<p>&nbsp;</p>
			<p>&nbsp;</p>
            <input  type="reset" id="cancelar" name="cancelar" value="Cancelar" />
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<input  type="button" onclick="location.href='index.html'" id="regresar" name="regresar" value="Regresar" />
			<p>&nbsp;</p>	
		</div>
			
	</form>
	

	
	
</body>
</html>