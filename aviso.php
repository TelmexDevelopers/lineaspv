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
        AVISOS
        </b></font><BR>
	</td>
  </tr>
  
  <tr valign=top>
  	<td align="right">
		<font face="Arial" size="3" color="#00467E"><b>
        &nbsp;
        </b></font>
		<a href='aviso_nuevo1.php' style="text-decoration:none">
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
            		AVISO</font></td>
            	<td align="center" width="50">
            		<font face="Arial" size="2" color="white"><b>
            		ID</font>
                </td>
		       	<td align="center" width="100">
            		<font face="Arial" size="2" color="white"><b>
            		ESTATUS</font>
                </td>
            </tr>
				<? 	
					$query = "select * from avisos ";
					$query = $query." order by aviso";
					$result 	 = mysql_query($query);
					$num_results = mysql_num_rows($result);
					
					
					for ($i=0; $i<$num_results; $i++)
					{	
						$row=mysql_fetch_array($result);
						
						echo "<tr><td>";
						echo "<font face='Arial' size=2>&nbsp;";
						echo "<a href='aviso_cambios1.php?id_aviso=".$row['id_aviso']."'>";
                    	echo $row['aviso']."</font>";
						echo "</a></td>";
						
						echo "<td align=center>";
						echo "<font face='Arial' size=2>";
                    	echo $row['id_aviso']."</font></td>";
						
						echo "<td align=center>";
						echo "<font face='Arial' size=2>";
						if ($row['activo']==1)
						{	echo "HABILITADO";	}
						else
						{	echo "DESHABILITADO";	}
						echo "</font></td>";
						
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

