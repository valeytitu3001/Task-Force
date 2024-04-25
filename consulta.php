<!DOCTYPE html>
<html lang="es">
<head>
	
    <meta charset="utf-8">
    <title>Buscar Cadete</title>
<style type="text/css">
body {
    background-image : url("img/17.png");
  background: cover;
	
}
	
</style>
</head>
<body>
<font color="#FFFFFF" face="arial">
    <h1 align="center" class="font-secondary display-4">REGISTRO</h1>
</font>
	<form action="reporte.php" method="POST">
<table align="center" width="40%" height="200" border="1">
  <tbody>
    <tr>
      <td align="center"  bgcolor="#D7D7D7"><h2 style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif">BUSCAR CADETE POR NOMBRE</h2></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#FFFFFF">  
		  <label for="nombre" >Nombre:</label>
    <input  type="text" id="nombre" name="nombre">
    <button type="submit" id="cadete" name="cadete">Buscar por alumno</button></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#D7D7D7"><h2 style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif"  >BUSCAR CADETE POR MATRICULA</h2></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#FFFFFF">    <label for="matricula">Matricula:</label>
    <input type="text" id="matricula" name="matricula">
    <input type="submit" id="mat" name="mat" value="Buscar Por Matricula"></td>
    </tr>
  </tbody>
</table>
</form>
</body>
</html>