<?
		session_start();
	require("includes/conecta.php");
	require("includes/sesion.php");
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
        NUEVO AVISO
        </b></font><BR>
	</td>
  </tr>

  <tr>
  	<td align="right">&nbsp;</td>
  </tr>
  
  
  
  
  <tr valign="middle">
  	<td align=center>
  			
            
            <form name="forma" method="post" action="aviso_nuevo2.php">
 
            <table width=400 border="0" cellpadding="0" 
            cellspacing="0">
            
            
            <tr>
            	<td><font face="Arial" size="2" color="#3F92D5"><b>
            		AVISO</font>
                </td>
                <td width="5">&nbsp;</td>
            	<td>
                <textarea name="aviso" cols="30" rows="4" style="max-width:100"></textarea>
                </td>
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
