<?
		session_start();
	require("includes/conecta.php");
	require("includes/sesion.php");
?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<center>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr valign=top>
  	<td align="center"><br>
		<font face="Arial" size="3" color="#00467E"><b>
        ALUMNOS REGISTRADOS
        </b></font><BR>
	</td>
  </tr>
  
  <tr valign=top>
  	<td align="right">
		<font face="Arial" size="3" color="#00467E"><b>
        &nbsp;
        </b></font>
		<a href='nuevoalumno.php' style="text-decoration:none">
        <img src='../images/alta2.jpg' border=0 alt="NUEVO"> 
        <font face="Arial" size="2" color="#00467E">Nuevo</font></a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
	</td>
  </tr>
  
  
  
  
  <tr valign="top">
  	<td align=center>
  			<table width=1200 border="1" bgcolor="white" 
            cellpadding="0" cellspacing="0">
            
            <tr bgcolor="BLUE">
            	<td align="center">
            		<font face="Arial" size="2" color="white"><b>
            		NOMBRE</font></td>
            	<td align="center" width="50">
            		<font face="Arial" size="2" color="white"><b>
            		ID</font>
                </td>
		       	<td align="center" width="100">
            		<font face="Arial" size="2" color="white"><b>
            		MATRICULA</font>
                </td>
				<td align="center" width="100">
            		<font face="Arial" size="2" color="white"><b>
            		ESCUELA</font>
                </td>
				<td align="center" width="100">
            		<font face="Arial" size="2" color="white"><b>
            		CARRERA</font>
                </td>
				
				<td align="center" width="100">
            		<font face="Arial" size="2" color="white"><b>
            		CORREO ELECTRONICO</font>
                </td>
				<td align="center" width="100">
            		<font face="Arial" size="2" color="white"><b>
            		SERVICIO</font>
                </td>
				<td align="center" width="100">
            		<font face="Arial" size="2" color="white"><b>
            		TELEFONO</font>
                </td>
				<td align="center" width="100">
            		<font face="Arial" size="2" color="white"><b>
            		FECHA REGISTRADO</font>
                </td>
				<td align="center" width="100">
            		<font face="Arial" size="2" color="white"><b>
            		ESTATUS</font>
                </td>
				
				<td align="center" width="100">
            		<font face="Arial" size="2" color="white"><b>
            		ELIMINAR</font>
                </td>
				
            </tr>
				<? 	
					$query = "select * from alumnos ";
					$query = $query." order by id_nombre";
					$result 	 = mysql_query($query);
					$num_results = mysql_num_rows($result);
					
					
					for ($i=0; $i<$num_results; $i++)
					{	
						$row=mysql_fetch_array($result);
						$id_nombre=$row['id_nombre'];
						$correo_electronico=$row['correo_electronico'];
						$telefono=$row['telefono'];
						$fecha_registrado=$row['fecha_automatica'];
						$id_servicio=$row['id_servicio'];
						$activo=$row['activo'];
						$id_escuela=$row['id_escuela'];
						$id_carrera=$row['id_carrera'];
						
						echo "<tr><td>";
						echo "<font face='Arial' size=2>&nbsp;";
						echo "<a href='alumnos_cambios1.php?id_nombre=".$id_nombre."'>";
                    	echo $row['nombre']."</font>";
						echo "</a></td>";
						
						echo "<td align=center>";
						echo "<font face='Arial' size=2>";
                    	echo $row['id_nombre']."</font></td>";
					    echo "<td align=center>";
						echo "<font face='Arial' size=2>";
                    	echo $row['matricula']."</font></td>";
						
						$query2 = "select * from escuelas where id_escuela= ".$id_escuela;
					$result2 	 = mysql_query($query2);
					$numresults2 = mysql_num_rows($result2);
					
					for ($i2=0; $i2<$numresults2; $i2++)
					{	
						$row2=mysql_fetch_array($result2);
						echo "<td align=center>";
						echo "<font face='Arial' size=2>&nbsp;";
                    	echo $row2['nombre']."</font>";
						echo "</a></td>";	
						}
						
						$query3 = "select * from carreras where id_carrera= ".$id_carrera;
					$result3 	 = mysql_query($query3);
					$numresults3 = mysql_num_rows($result3);
					
					for ($i3=0; $i3<$numresults3; $i3++)
					{	
						$row3=mysql_fetch_array($result3);
						echo "<td align=center>";
						echo "<font face='Arial' size=2>&nbsp;";
                    	echo $row3['nombre']."</font>";
						echo "</a></td>";	
						}
						
						echo "<td align=center>";
						echo "<font face='Arial' size=2>&nbsp;";
                    	echo $correo_electronico."</font>";
						echo "</a></td>";
					
					$query4 = "select * from servicios where id_servicio= ".$id_servicio;
					$result4 	 = mysql_query($query4);
					$numresults4 = mysql_num_rows($result4);
					
					for ($i4=0; $i4<$numresults4; $i4++)
					{	
						$row4=mysql_fetch_array($result4);
						echo "<td align=center>";
						echo "<font face='Arial' size=2>&nbsp;";
                    	echo $row4['nombre']."</font>";
						echo "</a></td>";	
						}
					echo "<td align=center>";
						echo "<font face='Arial' size=2>&nbsp;";
                    	echo $telefono."</font>";
						echo "</a></td>";
						echo "<td align=center>";
						echo "<font face='Arial' size=2>&nbsp;";
                    	echo $fecha_registrado."</font>";
						echo "</a></td>";
					
						echo "<td align=center>";
						echo "<font face='Arial' size=2>";
						if ($activo==1)
						{	echo "EN PROCESO";	}
						else
						{	echo "NO ACEPTADO";	}
						echo "</font></td>";
						
						echo "<td>";
						echo "<font face='Arial' size=2>&nbsp;";
						echo "<a href='alumnos_baja1.php?id_nombre=".$id_nombre."'>";
                    	echo "ELIMINAR</font>";
						echo "</a></td>";
						
						
						echo "</tr>";
						
					
						
						}
					
					
					
					?>
					
					
							</table>
  	        
  	        <table width=700 border="1" bgcolor="white" 
            cellpadding="0" cellspacing="0">            
    </table></td>
  </tr>
  <tr><td>&nbsp;</td></tr>
</table>
<p>&nbsp;</p>
</body>
</html>

