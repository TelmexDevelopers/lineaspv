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
  	<td align="center"><font face="Arial" size="3" color="#00467E"><b>
        SERVICIOS
        </b></font>
	</td>
  </tr>
  
  <tr valign=top>
  	<td align="right">
		<font face="Arial" size="3" color="#00467E"><b>
        
        </b></font>
		<a href='servicios_nuevo1.php' style="text-decoration:none">
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
            			SERVICIO</font></td>
            	<td align="center" width="50">
            		<font face="Arial" size="2" color="white"><b>
            		ID</font>
                </td>
			
			  
				
		      <td align="center" width="50">
            		<font face="Arial" size="2" color="white"><b>
            		ELIMINAR</font>
                </td>
			  
            </tr>
				<? 	
					$query = "select * from servicios ";
					$query = $query." order by id_servicio";
					$result 	 = mysql_query($query);
					$num_results = mysql_num_rows($result);
					
					
					for ($i=0; $i<$num_results; $i++)
					{	
						$row=mysql_fetch_array($result);
						
						$id_servicio=$row['id_servicio'];
						
						echo "<tr><td>";
						echo "<font face='Arial' size=2>&nbsp;";
						echo "<a href='servicios_cambios1.php?id_servicio=".$row['id_servicio']."'>";
                    	echo $row['nombre']."</font>";
						echo "</a></td>";
						
						echo "<td align=center>";
						echo "<font face='Arial' size=2>";
                    	echo $row['id_servicio']."</font></td>";
						
						
						echo"<td>";
						echo "<font face='Arial' size=2>&nbsp;";
						echo "<a href='servicios_baja1.php?id_servicio=".$row['id_servicio']."'>";
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

