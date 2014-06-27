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
        USUARIOS
        </b></font><BR>
	</td>
  </tr>

  <tr valign=top>
  	<td align="right">
		<font face="Arial" size="3" color="#00467E"><b>
        &nbsp;
        </b></font>
		<a href='usuario_nuevo1.php' style="text-decoration:none">
        <img src='images/alta2.jpg' border=0 alt="NUEVO"> 
        <font face="Arial" size="2" color="#00467E">Nuevo</font></a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
	</td>
  </tr>
  
  
  
  
  <tr valign="top">
  	<td align=center>
  			<table width=700 border="1" bgcolor="white" 
            cellpadding="0" cellspacing="0">
            
            <tr bgcolor="blue">
            	<td align="center">
            		<font face="Arial" size="2" color="white"><b>
            		NOMBRE</font></td>
            	<td align="center">
            		<font face="Arial" size="2" color="white"><b>
            		PERFIL</font></td>
            	<td align="center">
            		<font face="Arial" size="2" color="white"><b>
            		EMAIL</font></td>
            	<td align="center">
            		<font face="Arial" size="2" color="white"><b>
            		USUARIO</font>
                </td>
            	<td align="center">
            		<font face="Arial" size="2" color="white"><b>
            		CLAVE</font>
                </td>
            	<td align="center">
            		<font face="Arial" size="2" color="white"><b>
            		ID</font>
                </td>
		       	<td align="center">
            		<font face="Arial" size="2" color="white"><b>
            		ESTATUS</font>
                </td>
            </tr>
				<? 	
					$query = "select u.nombre,u.paterno,u.materno,u.email,u.usuario,";
					$query = $query."u.clave,u.activo,u.id_usuario,p.nombre as perfil ";
					$query = $query."from usuarios u, perfiles p ";
					$query = $query."where p.id_perfil=u.id_perfil ";
					$query = $query." order by u.nombre,paterno,materno";
					$result 	 = mysql_query($query);
					$num_results = mysql_num_rows($result);
				
					
					for ($i=0; $i<$num_results; $i++)
					{	
						$row=mysql_fetch_array($result);
						
						echo "<tr><td align=center>";
						echo "<font face='Arial' size=2>&nbsp;";
						echo "<a href='usuario_cambios1.php?id_usuario=".$row['id_usuario']."'>";
                    	echo $row['nombre']." ".$row['paterno']." ".$row['materno']."</font>";
						echo "</a></td>";
						
						echo "<td align=center>";
						echo "<font face='Arial' size=2>";
                    	echo $row['perfil']."</font></td>";
						
						echo "<td align=center>";
						echo "<font face='Arial' size=2>";
                    	echo $row['email']."</font></td>";
						
						echo "<td align=center>";
						echo "<font face='Arial' size=2>";
                    	echo $row['usuario']."</font></td>";
						
						echo "<td align=center>";
						echo "<font face='Arial' size=2>";
                    	echo $row['clave']."</font></td>";
						
						echo "<td align=center>";
						echo "<font face='Arial' size=2>";
                    	echo $row['id_usuario']."</font></td>";
						
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

