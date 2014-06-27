<?
	require("includes/conecta.php");
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<center>
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  
  
  <tr>
  	<td align="center"><br>
		<font face="Arial" size="3" color="#00467E"><b>
        NUEVO USUARIO
        </b></font><BR>
	</td>
  </tr>

  <tr>
  	<td align="right">&nbsp;</td>
  </tr>
  
  
  
  
  <tr valign="middle">
  	<td align=center>
  			
            
            <form name="forma" method="post" action="usuario_nuevo2.php">
 
            <table width=400 border="0" cellpadding="0" 
            cellspacing="0">
            
            
            <tr>
            	<td><font face="Arial" size="2" color="#3F92D5"><b>
            		Nombre</font>
                </td>
                <td width="5">&nbsp;</td>
            	<td>
                <input type="text" name="nombre" size="30" 
                maxlength="30" Onblur="this.value = this.value.toUpperCase();">
                </td>
            </tr>
            <tr><td colspan="3">&nbsp;</td></tr>
            <tr>
            	<td><font face="Arial" size="2" color="#3F92D5"><b>
            		Paterno</font>
                </td>
                <td width="5">&nbsp;</td>
            	<td>
                <input type="text" name="paterno" size="30" 
                maxlength="30" Onblur="this.value = this.value.toUpperCase();">
                </td>
            </tr>
            <tr><td colspan="3">&nbsp;</td></tr>
            <tr>
            	<td><font face="Arial" size="2" color="#3F92D5"><b>
            		Materno</font>
                </td>
                <td width="5">&nbsp;</td>
            	<td>
                <input type="text" name="materno" size="30" 
                maxlength="30" Onblur="this.value = this.value.toUpperCase();">
                </td>
            </tr>
            <tr><td colspan="3">&nbsp;</td></tr>
            <tr>
            	<td><font face="Arial" size="2" color="#3F92D5"><b>
            		Usuario</font>
                </td>
                <td width="5">&nbsp;</td>
            	<td>
                <input type="text" name="usuario" size="30" 
                maxlength="30" Onblur="this.value = this.value.toUpperCase();">
                </td>
            </tr>
            <tr><td colspan="3">&nbsp;</td></tr>
            <tr>
            	<td><font face="Arial" size="2" color="#3F92D5"><b>
            		Clave</font>
                </td>
                <td width="5">&nbsp;</td>
            	<td>
                <input type="text" name="clave" size="30" 
                maxlength="30" Onblur="this.value = this.value.toUpperCase();">
                </td>
            </tr>
            <tr><td colspan="3">&nbsp;</td></tr>
            <tr>
            	<td><font face="Arial" size="2" color="#3F92D5"><b>
            		Email</font>
                </td>
                <td width="5">&nbsp;</td>
            	<td>
                <input type="text" name="email" size="40" maxlength="50">
                </td>
            </tr>
            <tr><td colspan="3">&nbsp;</td></tr>
            <tr>
            	<td><font face="Arial" size="2" color="#3F92D5"><b>
            		Perfil</font>
                </td>
                
                
                
                <td width="5">&nbsp;</td>
            	<td>
                	<select name="id_perfil" size="1">
                	<?
					$query = "select * from perfiles ";
					$query = $query."where activo=1 order by nombre";
					$result 	 = mysql_query($query);
					$num_results = mysql_num_rows($result);
					
					for ($i=0; $i<$num_results; $i++)
					{	
						$row=mysql_fetch_array($result);
						echo "<option value=".$row['id_perfil'].">".$row['nombre']."</option>";
					}
					?>
                	</select>
                </td>
            </tr>
                        
            <tr>
            	<td>&nbsp;</td>
                <td width="5">&nbsp;</td>
            	<td>&nbsp;</td>
            </tr>
            
            <tr>
            	<td colspan="3" align="center">
                	<input type="submit" value="Grabar">
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="reset" value="Limpiar">
                    &nbsp;&nbsp;&nbsp;&nbsp;
            [ <a href="usuario.php" target="central" style="text-decoration:none">
            	Regresar 
              </a>
            ]
                </td>
            </tr>
            
            
            </table>
  	        </form>
		</td>
	</tr>
</table>
</body>
</html>
<script>document.forma.nombre.focus();</script>
