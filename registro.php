<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
	
		<link href="css/bootstrap-4.4.1.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="100%" border="0">
  <tbody>
    <tr>
      <th width="25%" height="278" scope="row"><img src="18.jpeg" width=200px height=200px>&nbsp;</th>
		
      <td width="50%"><h1 style="text-align: center">Bachillerato Bivalente Militarizado</h1>
      <h1 style="text-align: center">&quot;"Batallón Primer Ligero"&quot;</h1></td>
		
      <th width="25%" scope="row"><img src="img/logo1.png" width=225px height=225px></th>
    </tr>
  </tbody>
	
<br><br>

</table>
	<h1 style="text-align: center">REPORTE DE INCIDENCIAS</h1>
<form action="conexion.php" method="_GET">
	<table width="70%" height="376" border="1" align="center">
		<tr>
	  <th colspan="2" bgcolor="#FFFFFF" style="text-align: left" scope="row">FECHA:<input type="date" name="fecha_"></th></tr>
	    <tr>
	      <th colspan="2" bgcolor="#9A9A9A" scope="row">DATOS DE QUIEN REPORTA</th>
        </tr>
	    <tr>
	      <th colspan="2" bgcolor="#FFFFFF" style="text-align: left" scope="row">NOMBRE:<span style="text-align: center">
	     <input type="text" name="nombrereporta" size="30" maxlength="50" id="nombrereporta" required="required">
	         </span></th>
        </tr>
		  <br><br>
	    <tr>
	      <th colspan="2" style="text-align: left" scope="row">CARGO:<span style="text-align: center">
	      <input type="text" name="cargo_" size="30" maxlength="30" id="cargo_" required="required">
	         </span></th>
        </tr>
		  
	    <tr>
	      <th colspan="2" bgcolor="#9A9A9A" style="text-align: center" scope="row">DATOS DEL CADETE</th>
        </tr>
	    <tr>
	      <th width="56%" style="text-align: left" scope="row">NOMBRE:<span style="text-align: center">
			  <input type="text" name="nombrecadete" size="30" maxlength="50" id="nombrecadete" required="required"> </span></th>
	      <th width="44%" style="text-align: left" scope="row">GRADO:<span style="text-align: center">
			  <?php
                    $con = mysqli_connect("localhost", "root", "bbmcelaya", "base_registros");
                    $Sql="SELECT DISTINCT grados FROM grupos";
                    $result=mysqli_query($con,$Sql);
                    if ($row = mysqli_fetch_array($result))
                    { 
                        echo '<select name= "id_grados" id= "id_grados">';
                        echo '<option value ="'.$id_grados.'" selected="selected">Seleccione grado</opytion> ';
                    do 
                    {
                        echo '<option value= "'.$row["grados"].'">'.$row["grados"].'</option>';
                    } 
                    while ($row = mysqli_fetch_array($result)); 
                        echo '</select>';
                    }
                ?>
			  </span>
			  <br>
			GRUPO:<span style="text-align: center">
			  <?php
                    $con = mysqli_connect("localhost", "root", "bbmcelaya", "base_registros");
                    $Sql="SELECT DISTINCT grupos FROM grupos";
                    $result=mysqli_query($con,$Sql);
                    if ($row = mysqli_fetch_array($result))
                    { 
                        echo '<select name= "id_grupos" id= "id_grupos">';
                        echo '<option value ="'.$id_grupos.'" selected="selected">Seleccione Grupo</option> ';
                    do 
                    {
                        echo '<option value= "'.$row["grupos"].'">'.$row["grupos"].'</option>';
                    } 
                    while ($row = mysqli_fetch_array($result)); 
                        echo '</select>';
                    }
                ?>
			  </span></th>
        </tr>
	    <tr>
	      <th colspan="2" style="text-align: left" scope="row">MATRICULA:<span style="text-align: center">
			  <input type="text" name="matricula_" size="30" maxlength="500" id="imatricula_" required="required"> </span></th>
        </tr>
	    <tr>
	      <th colspan="2" bgcolor="#9A9A9A" scope="row">CLASIFICACIÓN DEL INCIDENTE</th>
        </tr>
	    <tr>
			<th scope="row"><label><input type="radio" name="clasificacion" value="conducta" id="clasificacion" required="required">
			CONDUCTA</label></th>
			<th scope="row"><label><input type="radio" name="clasificacion" value="academico" id="clasificacion" required="required">
			  ACADEMICO
			</label></th>
        </tr>
		<tr>
	      <th colspan="2" bgcolor="#9A9A9A" scope="row">DESCRIPCIÓN DE HECHOS</th>
        </tr>
		<tr>
		<tr>
	      <th colspan="2" scope="row"><p style="text-align: center">
		<textarea name= "descripcion_" rows="5" cols=110></textarea></p>
		</th>
		</tr>
		<th colspan="2" bgcolor="#9A9A9A" scope="row">MEDIDAS DE ATENCION Y SEGUIMIENTO</th>
		<tr>
	      <th colspan="2" scope="row"><p style="text-align: center">
		<textarea name= "medidas_atencion" rows="5" cols=110></textarea></p>
		</th>
        </tr>
		
</table>

		<h1 align="center">
		<input type="submit" value="Enviar">
		</h1>
</form>	
</body>
</html>
