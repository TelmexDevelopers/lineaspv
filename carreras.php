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
       CARRERAS
        </b></font><BR>
	</td>
  </tr>
  
  <tr valign=top>
  	<td align="right">
		<font face="Arial" size="3" color="#00467E"><b>
        &nbsp;
        </b></font>
		<a href='carreras_nuevo1.php' style="text-decoration:none">
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
            		<font face="Arial" size="2" color="white"><b>
            		CARRERA</font></td>
            	<td align="center" width="50">
            		<font face="Arial" size="2" color="white"><b>
            		ID</font>
                </td>
		       	<td align="center" width="100">
            		<font face="Arial" size="2" color="white"><b>
            		ESCUELA</font>                </td>
						
						<td align="center" width="100">
            		<font face="Arial" size="2" color="white"><b>
            		ELIMINAR</font>                </td>
						
            </tr>
				<? 	
					$query = "select * from carreras ";
					$query = $query." order by id_carrera";
					$result 	 = mysql_query($query);
					$num_results = mysql_num_rows($result);
					
					
					for ($i=0; $i<$num_results; $i++)
					{	
						$row=mysql_fetch_array($result);
						
						$id_escuela=$row['id_escuela'];
						
						echo "<tr><td>";
						echo "<font face='Arial' size=2>&nbsp;";
						echo "<a href='carrera_cambios1.php?id_carrera=".$row['id_carrera']."'>";
                    	echo $row['nombre']."</font>";
						echo "</a></td>";
						
						
						echo "<td align=center>";
						echo "<font face='Arial' size=2>";
                    	echo $row['id_carrera']."</font></td>";
						
						
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
						echo "<td align=center>";
						echo "<font face='Arial' size=2>&nbsp;";
						echo "<a href='carrera_baja1.php?id_carrera=".$row['id_carrera']."'>";
                    	echo "ELIMINAR</font>";
						
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

