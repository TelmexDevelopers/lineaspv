<?
		session_start();
	require("includes/conecta.php");
	require("includes/sesion.php");
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
        NUEVA ACTIVIDAD
        </b></font><BR>
	</td>
  </tr>

  <tr>
  	<td align="right">&nbsp;</td>
  </tr>
  
  
  
  
  <tr valign="middle">
  	<td align=center>
  			
            
            <form name="forma" method="post" action="actividades_nuevo2.php">
 
            <table width=400 border="0" cellpadding="0" 
            cellspacing="0">
            
            
            <tr>
			<td><font face="Arial" size="2" color="#3F92D5"><b>EMPRESA</font></td>
								<td><SELECT NAME="empresa" SIZE="1">
										<?
										$query2="select * from empresa order by nombre;";
		                                $result2 = mysql_query($query2);
		                                 $num_results2 = mysql_num_rows($result2);
											for ($i=0; $i<$num_results2; $i++)
											{	$row2=mysql_fetch_array($result2);
												echo "<OPTION VALUE=".$row2['id_empresa'].">".$row2['nombre']."</option>";
											}
										?>
									</SELECT></td></b><tr>
			<tr>
            	<td><font face="Arial" size="2" color="#3F92D5"><b>
            		ACTIVIDAD</font>      </td>
            	<td><input name="actividad" type="text" style="max-width:100" value="" size="50" maxlength="200"  onkeypress='return alfanumerico(event)' Onblur="this.value = this.value.toUpperCase();"></td>
            </tr>
			<tr>
            	<td><font face="Arial" size="2" color="#3F92D5"><b>
            		NOMBRE DEL JEFE</font>      </td>
            	<td><input name="nombre_jefe" type="text" style="max-width:100" value="" size="50" maxlength="200"  onkeypress='return alfanumerico(event)' Onblur="this.value = this.value.toUpperCase();"></td>
            </tr>

<tr>
            	<td><font face="Arial" size="2" color="#3F92D5"><b>
            		PUESTO</font>      </td>
            	<td><input name="puesto" type="text" style="max-width:100" value="" size="50" maxlength="200"  onkeypress='return alfanumerico(event)' Onblur="this.value = this.value.toUpperCase();"></td>
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
