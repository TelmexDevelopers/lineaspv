<?
		session_start();
	require("includes/conecta.php");
	require("includes/sesion.php");
	
	$id_carrera=$_GET['id_carrera'];
	
	$query  = "select * from carreras where id_carrera=".$id_carrera;
	$result = mysql_query($query);
	$row	= mysql_fetch_array($result);
	$id_carrera2 =$row['id_carrera'];
	$id_escuela= $row['id_escuela'];
	$nombre			= $row['nombre'];
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
        MODIFICACIONES DE CARRERA
        </b></font><BR>
	</td>
  </tr>

  <tr>
  	<td align="right">&nbsp;</td>
  </tr>
  
  
  
  
  <tr valign="middle">
  	<td align=center>
  			
            
            <form name="forma" method="post" action="carrera_cambios2.php">
           <input type="hidden" name="id_principal" value="<? echo $id_carrera2;?>"> 
            <table width=400 border="0" cellpadding="0" 
            cellspacing="0">
            <tr>
			<td><font face="Arial" size="2" color="#3F92D5"><b>
            		ID</font>      </td>
            <? 
			echo "<td><font face=Arial size=2 color=#3F92D5><b>";
			echo $id_carrera2. "</font></td>"  
			?>
            <tr>
			<td><font face="Arial" size="2" color="#3F92D5"><b>ESCUELA</font></td>
								
										<?
										$query2="select * from escuelas where id_escuela=".$id_escuela;
		                                $result2 = mysql_query($query2);
		                                 $num_results2 = mysql_num_rows($result2);
											for ($i=0; $i<$num_results2; $i++)
											{	$row2=mysql_fetch_array($result2);
											$nombre2= $row2['nombre'];
											}
										?>
									<td>
                  <input name="escuela" type="text" style="max-width:100" value="<? echo $nombre2;?>" size="200" maxlength="200" readonly="readonly">
                </td>
			<tr>
            	<td><font face="Arial" size="2" color="#3F92D5"><b>
            		CARRERA</font>      </td>
            	<td><input name="carrera" type="text" style="max-width:100" value="<? echo $nombre ?>" size="100" maxlength="200"  onkeypress='return alfanumerico(event)' Onblur="this.value = this.value.toUpperCase();"></td>
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
            [ <a href="carreras.php" target="central" style="text-decoration:none">
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
