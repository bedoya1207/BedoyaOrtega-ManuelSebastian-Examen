<?php
 //incluir conexión a la base de datos
 include "../../config/conexionBD.php";
 $Autor = $_GET['Autor'];

 
 //echo "Hola " . $cedula;

 
 //$sql = "SELECT * FROM usuario WHERE usu_eliminado = 'N' and usu_cedula='$cedula'";
 //$sql2 = "SELECT * FROM telefono WHERE usu_cedula='$cedula'";

 $sql4 = "SELECT * FROM Capitulo c, autor a, libro l WHERE  c.libro_lib_codigo=l.lib_codigo and c.autor_aut_codigo=a.aut_codigo and a.aut_nombre='$Autor'";

 
//cambiar la consulta para puede buscar por ocurrencias de letras
 //$result = $conn->query($sql);
 //$result2 = $conn->query($sql2);
 $result3 = $conn->query($sql4);
 

 echo " <table style='width:100%','color: white'>
 <tr>
 <th>Nombre Libro</th>
 <th>ISBN</th>
 <th>Numero de paginas</th>
 <th>Numero de Capitulo</th>
 <th>Titulo Capitulo</th>
 <th>Nombre Autor</th>
 <th>Nacionalidad</th>
 </tr>";
 
 
 if ($result3->num_rows > 0) {
 while($row1 = $result3->fetch_assoc()) {

 echo "<tr>";
 echo " <td>" . $row1['lib_nombre'] . "</td>";
 echo " <td>" . $row1['lib_isbn'] . "</td>";
 echo " <td>" . $row1['lib_num_paginas'] . "</td>";
 echo " <td>" . $row1['cap_número'] . "</td>";
 echo " <td>" . $row1['cap_titulo'] . "</td>";
 
 echo " <td>" . $row1['aut_nombre'] . "</td>";
 echo " <td>" . $row1['aut_nacionalidad'] . "</td>";
 echo "</tr>";
 
 }
 } else {
 echo "<tr>";
 echo " <td colspan='7'> No existen usuarios registradas en el sistema </td>";
 echo "</tr>";
 }
 echo "</table>";
 
 
 $conn->close();

?>
