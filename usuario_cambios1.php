<?
	require("includes/conecta.php");
	
	$id_usuario = $_GET['id_usuario'];
	
 	$query  = "select * from usuarios where id_usuario=".$id_usuario;
	$result = mysql_query($query);
	$row	= mysql_fetch_array($result);
	
	$nombre			= $row['nombre'];
	$paterno		= $row['paterno'];
	$materno		= $row['materno'];
	$activo			= $row['activo'];
	$usuario		= $row['usuario'];
	$clave			= $row['clave'];
	$email			= $row['email'];
	
	$id_perfil		= $row['id_perfil'];
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
        CAMBIO A USUARIOS
        </b></font><BR>
	</td>
  </tr>

  <tr>
  	<td align="right">&nbsp;</td>
  </tr>
  
  
  
  
  <tr valign="middle">
  	<td align=center>
  			
            
           <form name="forma" method="post" action="usuario_cambios2.php">
           <input type="hidden" name="id_usuario" value="<? echo $id_usuario;?>">
			
            <table width=400 border="0" cellpadding="0" 
            cellspacing="0">
            
            
            <tr>
            	<td><font face="Arial" size="2" color="#3F92D5"><b>
            		Nombre</font>
                </td>
                <td width="5">&nbsp;</td>
            	<td>
                <input type="text" name="nombre" value="<? echo $nombre;?>" size="30" 
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
                <input type="text" name="paterno" value="<? echo $paterno;?>" size="30" 
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
                <input type="text" name="materno" value="<? echo $materno;?>" size="30" 
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
                <input type="text" name="usuario" value="<? echo $usuario;?>" size="30" 
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
                <input type="text" name="clave" value="<? echo $clave;?>" size="30" 
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
                <input type="text" name="email" value="<? echo $email;?>" size="40" maxlength="50">
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
						echo "<option value=".$row['id_perfil'];
						if ($row['id_perfil']==$id_perfil)
						{	echo " selected ";	}
						echo ">".$row['nombre']."</option>";
					}
					?>
                	</select>
                </td>
            </tr>
            
            <tr><td colspan="3">&nbsp;</td></tr>
            <tr>
            	<td><font face="Arial" size="2" color="#3F92D5"><b>
            		Estatus</font>
                </td>
                <td width="5">&nbsp;</td>
            	<td>
				<select name='activo' style='width: 100px'>
				
                <option value='0' 
                <?	if ($activo==0) { echo "  selected ";} ?>
				>Deshabilitado</option>
				
				<option value='1' 
				<?	if ($activo==1) { echo "  selected ";} ?>
				>Habilitado</option>
				
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