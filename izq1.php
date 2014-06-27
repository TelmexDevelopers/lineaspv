<? 	session_start();
require("includes/sesion.php");
require("includes/conecta.php");

?>


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<body topmargin="0">
<center>
<form name="forma" method="post" action="valida.php">
<table width="100%" border=0>
	<tr valign="0"><td align="center"><font size=3 face=Verdana color="#000066"><b>ACCESO</b></font></td></tr>
	<tr><td align="center">
	    <table border=1 width="90%" bgcolor="#FFFFFF" bordercolor="#432476" cellpadding="0" cellspacing="0">
                <tr bgcolor="BLUE"><td align="center">
                        <font face=verdana size=2 color=white>
                            <b>Usuario : </b>
                        </font>
                    </td>
                </tr>
                <tr><td align="center">
                		<font face=verdana size=1 color=black><b>
						<? echo $_SESSION['nombre_usuario'];?></b>
                    </td>
                </tr>
                <tr><td><font size=1>&nbsp;</font></td></tr>
                <tr bgcolor="BLUE"><td align="center">
                		<font face=verdana size=2 color=white>
                           <b>Perfil : </b><br>
                        </font>
                    </td>
                </tr>
                <tr><td align="center">
                		<font face=verdana size=1 color=black><b>
						<? echo $_SESSION['perfil'];?></b>
                    </td>
                </tr>
                <tr><td align="center">
                		<font face=verdana size=1 color=black>
                  			<? 	if ($_SESSION['perfil']<3)
								{	echo "<img src='images/admin.jpg'><br>";
								}
								else
								{	echo "<img src='images/user.jpg'><br>";
								}
							?>
                        </font>
                    </td>
				</tr>
		</table>
        </td>
	</tr>
</table>
<hr>
</form>
<table >
<tr><td align="center" color="blue"><img src="images/franjas3.jpg"></td></tr>
<tr><td align="center">.:CITAS PROGRAMADAS:.</td></tr>
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

</marquee></td></tr>
<tr><td align="center"><img src="images/franjas3.jpg"></td></tr>
</table>
</center>
</body>
<script>document.forma.usuario.focus();</script>