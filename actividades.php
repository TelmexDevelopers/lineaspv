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
       ACTIVIDADES
        </b></font><BR>
	</td>
  </tr>
  
  <tr valign=top>
  	<td align="right">
		<font face="Arial" size="3" color="#00467E"><b>
        &nbsp;
        </b></font>
		<a href='actividades_nuevo1.php' style="text-decoration:none">
        <img src='images/alta2.jpg' border=0 alt="NUEVO"> 
        <font face="Arial" size="2" color="#00467E">Nuevo</font></a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
	</td>
  </tr>
  
  
  
  
  <tr valign="top">
  	<td align=center>
  			<table width=600 border="1" bgcolor="white" 
            cellpadding="0" cellspacing="0">
            
            <tr bgcolor="blue">
            	<td align="center">
            		<font face="Arial" size="2" color="white"><b>ACTIVIDAD</font></td>
            	<td align="center" width="50">
            		<font face="Arial" size="2" color="white"><b>
            		ID</font>
                </td>
		       	<td align="center" width="100">
            		<font face="Arial" size="2" color="white"><b>
            		EMPRESA</font>                </td>
						
							<td align="center" width="100">
            		<font face="Arial" size="2" color="white"><b>
            		NOMBRE DEL JEFE</font>
					
						<td align="center" width="100">
            		<font face="Arial" size="2" color="white"><b>
            		PUESTO</font>
						
						
						<td align="center" width="100">
            		<font face="Arial" size="2" color="white"><b>
            		ELIMINAR</font>                </td>
						
            </tr>
				<? 	
					$query = "select * from actividades_empresa ";
					$query = $query." order by id_actividad";
					$result 	 = mysql_query($query);
					$num_results = mysql_num_rows($result);
					
					
					for ($i=0; $i<$num_results; $i++)
					{	
						$row=mysql_fetch_array($result);
						
						$id_actividad=$row['id_actividad'];
						$id_empresa=$row['id_empresa'];
						$nombre_jefe=$row['nombre_jefe'];
						$puesto=$row['puesto'];
						
						
						echo "<tr><td>";
						echo "<font face='Arial' size=2>&nbsp;";
						echo "<a href='actividades_cambios1.php?id_actividad=".$row['id_actividad']."'>";
                    	echo $row['actividad']."</font>";
						echo "</a></td>";
						
						
						echo "<td align=center>";
						echo "<font face='Arial' size=2>";
                    	echo $row['id_actividad']."</font></td>";
						
						
					$query2 = "select * from empresa where id_empresa= ".$id_empresa;
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
						echo $nombre_jefe;
                    	echo "</font></td>";
						
							echo "<td align=center>";
						echo "<font face='Arial' size=2>&nbsp;";
						echo $puesto;
                    	echo "</font></td>";
						
						
		
						echo "<td align=center>";
						echo "<font face='Arial' size=2>&nbsp;";
						echo "<a href='actividades_baja1.php?id_actividad=".$row['id_actividad']."'>";
                    	echo "ELIMINAR</font></td>";
						
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

