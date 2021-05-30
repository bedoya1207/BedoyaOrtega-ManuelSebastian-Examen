<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Capitulos libro</title>
 <style type="text/css" rel="stylesheet">
 .error{
 color: red;
 }
 </style>
</head>
<body>
    
 <?php
 //incluir conexión a la base de datos
 include '../../config/conexionBD.php';
 $isbnt=$_GET["isbn"];
 $numeroCapitulo = isset($_POST["nucapitulo"]) ? trim($_POST["nucapitulo"]) : null;
 $Ncapitulo = isset($_POST["capitulon"]) ? trim($_POST["capitulon"]) : null;
 $Autores = isset($_POST["nombres"]) ? trim($_POST["nombres"]) : null;
 $sql="SELECT lib_codigo from libro where lib_isbn = '$isbnt'";
 $sql2="SELECT aut_codigo from autor where aut_nombre = '$Autores'";
echo($sql);
 $result = $conn->query($sql);
    if ($result->num_rows> 0) {
            while($row = $result->fetch_assoc()) {
                echo("entro");
                $codigolibro= $row['lib_codigo'];
            } 
        }
        echo($codigolibro);
$result2 = $conn->query($sql2);
        if ($result2->num_rows> 0) {
           while($row2 = $result2->fetch_assoc()) {
           $codigoAutor= $row2['aut_codigo'];
           } 
       }

 
$sql3 = "INSERT INTO capitulo VALUES (null , $numeroCapitulo, '$Ncapitulo',$codigolibro, $codigoAutor)";
echo($sql3);
  if ($conn->query($sql3) === TRUE) {
  echo "<p>Se ha creado los datos personales correctamemte!!!</p>";
  echo "<a href='../vista/capitulo.php?isbn=$isbnt'>Crear Capitulos</a>";
  echo "<a href='../vista/index.html'>Terminar</a>";
  } else {
  if($conn->errno == 1062){
  echo "<p class='error'>El libro con este  $isbnt ya esta registrado en el sistema </p>";
  }else{
  echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";
  }
  }
  $conn->close();
  
  
  
  ?>

 </body>
 </html>