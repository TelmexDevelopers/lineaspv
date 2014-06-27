<?
		session_start();
	require("includes/conecta.php");
	require("includes/sesion.php");
	
	$id_actividad=$_GET['id_actividad'];
	
	$query  = "select * from actividades_empresa where id_actividad=".$id_actividad;
	$result = mysql_query($query);
	$row	= mysql_fetch_array($result);
	
	$id_actividad2 =$row['id_actividad'];
	$id_empresa= $row['id_empresa'];
	$actividad			= $row['actividad'];
	$nombre_jefe=$row['nombre_jefe'];
	$puesto=$row['puesto'];
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Documento sin t&iacute;tulo</title></head>

<body>
<center>
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  
  
  <tr>
  	<td align="center"><br>
		<font face="Arial" size="3" color="#00467E"><b>
        MODIFICACIONES DE ACTIVIDADES
        </b></font><BR>
	</td>
  </tr>

  <tr>
  	<td align="right">&nbsp;</td>
  </tr>
  
  
  
  
  <tr valign="middle">
  	<td align=center>
  			
            
            <form name="forma" method="post" action="actividades_cambios2.php">
           <input type="hidden" name="id_principal" value="<? echo $id_actividad2;?>"> 
            <table width=400 border="0" cellpadding="0" 
            cellspacing="0">
            <tr>
			<td><font face="Arial" size="2" color="#3F92D5"><b>
            		ID</font>      </td>
            <? 
			echo "<td><font face=Arial size=2 color=#3F92D5><b>";
			echo $id_actividad2. "</font></td>"  
			?>
            <tr>
			<td><font face="Arial" size="2" color="#3F92D5"><b>ESCUELA</font></td>
								
										<?
										$query2="select * from empresa where id_empresa=".$id_empresa;
		                                $result2 = mysql_query($query2);
		                                 $num_results2 = mysql_num_rows($result2);
											for ($i=0; $i<$num_results2; $i++)
											{	$row2=mysql_fetch_array($result2);
											$nombre2= $row2['nombre'];
											}
										?>
									<td>
                  <input name="empresa" type="text" style="max-width:100" value="<? echo $nombre2;?>" size="200" maxlength="200" readonly="readonly">
                </td>
			<tr>
            	<td><font face="Arial" size="2" color="#3F92D5"><b>
            		ACTIVIDAD</font>      </td>
            	<td><input name="actividad" type="text" style="max-width:100" value="<? echo $actividad ?>" size="100" maxlength="200"  onkeypress='return alfanumerico(event)' Onblur="this.value = this.value.toUpperCase();"></td>
            </tr>
			
			<tr>
            	<td><font face="Arial" size="2" color="#3F92D5"><b>
            		NOMBRE DEL JEFE</font>      </td>
            	<td><input name="nombre_jefe" type="text" style="max-width:100" value="<? echo $nombre_jefe ?>" size="100" maxlength="200"  onkeypress='return alfanumerico(event)' Onblur="this.value = this.value.toUpperCase();"></td>
            </tr>
			
			<tr>
            	<td><font face="Arial" size="2" color="#3F92D5"><b>
            		PUESTO</font>      </td>
            	<td><input name="puesto" type="text" style="max-width:100" value="<? echo $puesto ?>" size="100" maxlength="200"  onkeypress='return alfanumerico(event)' Onblur="this.value = this.value.toUpperCase();"></td>
            </tr>
			
            <tr><td colspan="3">&nbsp;</td></tr>
            <tr><td colspan="3">&nbsp;</td></tr>                        
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
            [ <a href="actividades.php" target="central" style="text-decoration:none">
            	Regresar 
              </a>
            ]                </td>
            </tr>
            </table>
  	        </form>
	</td>
	</tr>
</table>
</body>
</html>
<script>document.forma.aviso.focus();</script>
