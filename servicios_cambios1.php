<?
	session_start();
	require("includes/conecta.php");
	require("includes/sesion.php");
	
	$id_servicio = $_GET['id_servicio'];
	
 	$query  = "select * from servicios where id_servicio=".$id_servicio;
	$result = mysql_query($query);
	$row	= mysql_fetch_array($result);
	
	$nombre			= $row['nombre'];
	$id_servicio1= $row['id_servicio'];
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
        CAMBIOS SERVICIOS
        </b></font><BR>
	</td>
  </tr>

  <tr>
  	<td align="right">&nbsp;</td>
  </tr>
  
  
  
  
  <tr valign="middle">
  	<td align=center>
  			
            
           <form name="forma" method="post" action="servicios_cambios2.php">
           <input type="hidden" name="id_servicio" value="<? echo $id_servicio1;?>">
			
            <table width=400 border="0" cellpadding="0" 
            cellspacing="0">
            <tr>
            	<td><font face="Arial" size="2" color="#3F92D5"><b>
            		ID SERVICIO</font>
                </td>
                <td width="5">&nbsp;</td>
            	<td><font face="Arial" size="2" color="#3F92D5">
                		<b><? echo $id_servicio1;?></b>
                    </font>
                </td>
            </tr>
            <tr><td colspan="3">&nbsp;</td></tr>
            
            
            <tr>
            	<td><font face="Arial" size="2" color="#3F92D5"><b>
            		SERVICIO</font>
                </td>
                <td width="5">&nbsp;</td>
            	<td>
                  <input name="nombre" type="text" style="max-width:100" value="<? echo $nombre;?>" size="200" maxlength="200" onkeypress='return alfanumerico(event)' Onblur="this.value = this.value.toUpperCase();">
                </td>
            </tr>
            <tr><td colspan="3">&nbsp;</td></tr>
            <tr>
            	                <td width="5">&nbsp;</td>
            	
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
            [ <a href="escuelas.php" target="central" style="text-decoration:none">
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