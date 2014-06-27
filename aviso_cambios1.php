<?
	session_start();
	require("includes/conecta.php");
	require("includes/sesion.php");
	
	$id_aviso = $_GET['id_aviso'];
	
 	$query  = "select * from avisos where id_aviso=".$id_aviso;
	$result = mysql_query($query);
	$row	= mysql_fetch_array($result);
	
	$aviso			= $row['aviso'];
	$activo			= $row['activo'];
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<center>
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  
  
  <tr>
  	<td align="center"><br>
		<font face="Arial" size="3" color="#00467E"><b>
        CAMBIO A AVISOS
        </b></font><BR>
	</td>
  </tr>

  <tr>
  	<td align="right">&nbsp;</td>
  </tr>
  
  
  
  
  <tr valign="middle">
  	<td align=center>
  			
            
           <form name="forma" method="post" action="aviso_cambios2.php">
           <input type="hidden" name="id_aviso" value="<? echo $id_aviso;?>">
			
            <table width=400 border="0" cellpadding="0" 
            cellspacing="0">
            <tr>
            	<td><font face="Arial" size="2" color="#3F92D5"><b>
            		ID AVISO</font>
                </td>
                <td width="5">&nbsp;</td>
            	<td><font face="Arial" size="2" color="#3F92D5">
                		<b><? echo $id_aviso;?></b>
                    </font>
                </td>
            </tr>
            <tr><td colspan="3">&nbsp;</td></tr>
            
            
            <tr>
            	<td><font face="Arial" size="2" color="#3F92D5"><b>
            		Aviso</font>
                </td>
                <td width="5">&nbsp;</td>
            	<td>
                <textarea name="aviso" cols="30" rows="4" style="max-width:100"><? echo $aviso;?></textarea>
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
            [ <a href="aviso.php" target="central" style="text-decoration:none">
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
<script>document.forma.aviso.focus();</script>