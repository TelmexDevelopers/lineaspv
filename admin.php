<? 	require("includes/partes.php"); 
require("includes/conecta.php");
	validadores();
?>
<body topmargin="0">
<center>
<form name="forma" method="post" action="valida.php">
<table width="100%" border=0>
	<tr valign="0"><td align="center"><font size=2 face=Verdana color="#CC0001"><b>ACCESO</b></font></td></tr>
	<tr><td align="center">
	    <table border=0 width="100%" bgcolor="#FFFFFF" bordercolor="#432476" cellpadding="0" cellspacing="0">
            <tr><td align="center"><font face=verdana size=2 color="#4F004F">Usuario</font></td></tr>
            <tr><td align="center"><input type="text" name="usuario" size="15" maxlength="20" 
                    onkeypress='return alfanumerico(event)' 
                    Onblur="this.value = this.value.toUpperCase();">
                </td>
            </tr>
            <tr><td align="center"><font face=verdana size=2 color="#4F004F">Clave</font></td></tr>
            <tr><td align="center"><input type="password" name="clave" size="15" maxlength="20" 
                    onkeypress='return alfanumerico(event)' 
                    Onblur="this.value = this.value.toUpperCase();">
                </td>
            </tr>
            <tr><td align=center><br>
                    <input type="submit" name="enviar" value="Accesar">
                    &nbsp;&nbsp;
                    <input type="reset" name="limpiar" value="Limpiar">
                    <hr>
                </td>
            </tr>
		</table>
        </td>
	</tr>
</table>
</form>
<!-- <table >
<tr><td align="center"><img src="images/franjas3.jpg"></td></tr>
<tr><td align="center">AVISOS</td>
</tr>
<tr><td align="center">

<marquee align="middle" style="font-family: Arial; color: #FFFFFF" bgcolor="#000000" 
direction="up" scrolldelay="300">
				<?
					$query = "select * from avisos where activo=1 ";
					$result 	 = mysql_query($query);
					$num_results = mysql_num_rows($result);
				
					
					for ($i=0; $i<$num_results; $i++)
					{	
						$row=mysql_fetch_array($result);
						
						echo "<div font face='Arial' size=2>";
                    	echo $row['aviso']."</div><br><br>";
					}
                ?>

</marquee>
</td>
</tr>
<tr><td align="center"><img src="images/franjas3.jpg"></td></tr>
</table>  -->
</center>
</body>			
<script>document.forma.usuario.focus();</script>