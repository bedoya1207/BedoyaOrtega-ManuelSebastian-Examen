<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    
	<title>Nuevo libro</title>
</head>
<body>


	<form id="formulario01"  method="POST" action="../../../Admin/Controladores/Admin/Agregar.php" >
		
			
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
		<form id="formulario01"  method="POST" action="../../../Admin/Controladores/Admin/Agregarcap.php">
			<div class="formulario__grupo" id="grupo__correo">
				<label for="correo" class="formulario__label">Correo Electrónico</label>
				<div class="formulario__grupo-input">
					<input type="email"  name="correo" id="correo" placeholder=""/>
					
				</div>
               
				
			</div>

            <!-- Grupo: Contraseña -->
			<div class="formulario__grupo" id="grupo__password">
				<label for="password" class="formulario__label">Contraseña</label>
				<div class="formulario__grupo-input">
					<input type="password"  name="contrasena" id="contrasena" placeholder=""
                    onkeyup="return validarContrasena(this)"/>
					
				</div>
                <span id="mensajeContrasena" class="error"></span>
				
			</div>


            <!-- Grupo: TIpo Teléfono -->
			<div class="formulario__grupo" id="grupo__tipo">
				<label for="tipo" class="formulario__label">Tipo de Teléfono</label>
				<div class="formulario__grupo-input">
					<input type="text"  name="tipo" id="tipo" placeholder=""
                    onkeyup="return validarCorreo(this)"/>
					
				</div>
                <span id="mensajeTipo" class="error"></span>
				
			</div>
		</form>
			<input type="submit" id="crear" name="crear" value="Aceptar" />
            <input  type="reset" id="cancelar" name="cancelar" value="Cancelar" />
			<input  type="button" onclick="location.href='index.html'" id="regresar" name="regresar" value="Regresar" />
			
			
	</form>
	

	
	
</body>
</html>