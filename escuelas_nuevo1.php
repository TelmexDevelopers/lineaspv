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
       NUEVA ESCUELA </b></font>
		
  </tr>

  <tr>
  	<td align="right">&nbsp;</td>
  </tr>
  
  
  
  
  <tr valign="middle">
  	<td align=center>
  			
            
            <form name="forma" method="post" action="escuelas_nuevo2.php">
 
            <table width=400 border="0" cellpadding="0" 
            cellspacing="0">
            
            
            <tr>
            	<td><font face="Arial" size="2" color="#3F92D5"><b>
            		ESCUELA</font>   
					<td>
                  <input name="escuela" type="text" style="max-width:100" value="" size="100" maxlength="200" onKeyPress='return alfanumerico(event)' onBlur="this.value = this.value.toUpperCase();">
	   <BR>	</td>
					
					             </td>
                <td width="5">&nbsp;</td>
            	<td>&nbsp;</td>
            
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
            ]                </td>
            </tr>
            </table>
  	        </form>		</td>
	</tr>
</table>
</body>
</html>
<script>document.forma.aviso.focus();</script>
