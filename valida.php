<? session_start();
	require("includes/conecta.php");
	require("includes/partes.php");
	
	$query = "select u.id_usuario,u.nombre,u.paterno,u.materno,p.nombre as perfil,p.id_perfil ";
	$query = $query." from usuarios u,perfiles p ";
	$query = $query."where p.id_perfil=u.id_perfil and u.activo=1 and ";
	$query = $query."upper(usuario)='".strtoupper($_POST["usuario"])."' and ";
	$query = $query."upper(clave)='".strtoupper($_POST["clave"])."'";
  	//echo $query;
	
	$result = mysql_query($query, $db_conn);
	
	if (mysql_num_rows($result)>0)
  	{	$row=mysql_fetch_array($result);
		
		//$_SESSION['id_usuario'] 	= $row['id_usuario'] ;
		$_SESSION["autentificado"] = "SI";
		
		$_SESSION['id_usuario'] 	= $row['id_usuario'] ;
		//echo $_SESSION['id_usuario'];
		
		$_SESSION['nombre_usuario'] = "";
		$_SESSION['nombre_usuario'] = $row['nombre']." ".$row['paterno']." ".$row['materno'] ;
		//echo "aqui=".$_SESSION['nombre_usuario'];
		
		
		$_SESSION['id_perfil'] 		= $row['id_perfil'] ;
		
		$_SESSION['perfil'] = $row['perfil'];
		
		$_SESSION['tot_depositos'] 	= tot_depositos($row['id_perfil']);
		$_SESSION['depositos']		= depositos($row['id_perfil']);	
		
		$_SESSION['tot_funcionalidades'] = tot_funcionalidades($row['id_perfil']);
		$_SESSION['funcionalidades']	 = funcionalidades($row['id_perfil']);	
		//echo "Funcionalidades=".$_SESSION['funcionalidades'];
		
		mysql_close($db_conn);
		echo "<script>top.location='menu.php';</script>";
	}
	else
	{?>
        <body bgcolor="#EBF2FA">
            <font size=2 face=Verdana color=#A42D43>&nbsp;</font><br><br>
            <form name="forma" method="post" action="valida.php">
            <table width="100%" height="90%">
            <tr><td align="center">
    		  	<!--<table border=1 width="450" height="267" bgcolor="#FFFFFF" bordercolor="#432476" cellpadding="0" cellspacing="0">
					<tr><td align=left height="80"><img src="images/logo.jpg" border="0"></td></tr>
                    <tr><td align="center" height="30" bgcolor="#510051">
                            <font face=arial color=white size="3"><b>ADMINISTRADOR</b></font>
							<p>
							<font color="#FFFFFF">Usuario o/y contraseña incorrectos</font></p>
                        </td>
                  </tr>
					<tr><td>&nbsp;</td></tr>
				</table>
            </td></tr>
			</table> -->
			<script>
				alert('LOS DATOS INGRESADOS NO TIENEN ACCESO AL SISTEMA !  USUARIO O CONTRASEÑA INCORRECTOS');
				top.location='index.php';
			</script>
		</body>
    <? 
	}
?>
