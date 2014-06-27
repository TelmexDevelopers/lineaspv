<?
	require("includes/conecta.php");
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
        CONTROL
        </b></font><BR>
	</td>
  </tr>

  <tr valign=top>
  	<td align="right">
		<font face="Arial" size="3" color="#00467E"><b>
        &nbsp;
        </b></font>
		<a href='control_nuevo1.php' style="text-decoration:none">
        <img src='../images/alta2.jpg' border=0 alt="NUEVO"> 
        <font face="Arial" size="2" color="#00467E">Nuevo</font></a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
	</td>
  </tr>
  
  
  
  
  <tr valign="top">
  	<td align=center>
  			<table width=500 border="1" bgcolor="white" 
            cellpadding="0" cellspacing="0">
            
            <tr bgcolor="blue">
            	<td align="center">
            		<font face="Arial" size="2" color="white"><b>
            		NOMBRE DEL ALUMNO </font></td>
            	<td align="center">
            		<font face="Arial" size="2" color="white"><b>
            		ID</font>
                </td>
		       	<td align="center">
            		<font face="Arial" size="2" color="white"><b>
            		SERVICIO</font>
                </td>
				<td align="center">
            		<font face="Arial" size="2" color="white"><b>
            		ACTIVO</font>
                </td>
				
				<td align="center">
            		<font face="Arial" size="2" color="white"><b>
            		FECHA INICIAL</font>
				</td>
				<td align="center">
            		<font face="Arial" size="2" color="white"><b>
            		FECHA TERMINO</font>
                </td>
				<td align="center">
            		<font face="Arial" size="2" color="white"><b>
            		EMPRESA</font>
                </td>
				<td align="center">
            		<font face="Arial" size="2" color="white"><b>
            		ACTIVIDAD</font>
                </td>
							<td align="center">
            		<font face="Arial" size="2" color="white"><b>
            		REG FORMATO INICIO</font>
                </td>
				
				<td align="center">
            		<font face="Arial" size="2" color="white"><b>
            		REG FORMATO FINAL</font>
                </td>
            </tr>
				<? 	
					$query = "select * from control ";
					$query = $query." order by id_alumno";
					$result 	 = mysql_query($query);
					$num_results = mysql_num_rows($result);
				
					for ($i=0; $i<$num_results; $i++)
					{	
					
						$row=mysql_fetch_array($result);
						$id_control=$row['id_control'];
						$id_alumno = $row['id_alumno'];
						$id_servicio=$row['id_servicio'];
						$cumplio=$row['cumplio'];
						$fecha_inicial=$row['fecha_inicial'];
						$fecha_termino=$row['fecha_termino'];
						$fecha_inicial=$row['fecha_inicial'];
						$id_empresa=$row['id_empresa'];
						$id_actividad_empresa=$row['id_actividad_empresa'];
						$fecha_auto_inicio=$row['fecha_automatica_inicio'];
						$fecha_auto_termino=$row['fecha_automatica_termino'];
						
				     }
					 ?>
					 
					 
					 <? 
					 $query1 = "select * from alumnos where id_nombre= ".$id_alumno;
					//echo $id_alumno;
					$result1 	 = mysql_query($query1);
					$numresults1 = mysql_num_rows($result1);
					
					for ($i1=0; $i1<$numresults1; $i1++)
					{	
						$row1=mysql_fetch_array($result1);
						echo "<tr><td align=center>";
						echo "<font face='Arial' size=2>&nbsp;";
						echo "<a href='control_cambios1.php?id_nombre=".$row1['id_nombre']."'>";
                    	echo $row1['nombre']."</font>";
						echo "</a></td>";	
						}
						echo "<td align=center>";
						echo "<font face='Arial' size=2>&nbsp;";
						echo $id_control;
						?>
						
						<? 
					$query2 = "select * from servicios where id_servicio= ".$id_servicio;
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
						echo "<td align=center>";
						echo "<font face='Arial' size=2>&nbsp;";
						echo $id_control;
						?>
						
						
						
						  			</table>
    </table></td>
  </tr>
  <tr><td>&nbsp;</td></tr>
</table>
<p>&nbsp;</p>
</body>
</html>

