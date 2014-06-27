<?
	$db_conn = mysql_connect("localhost","root","family7477") or die("<br><br><hr><br><font color=red>ERROR : &nbsp;ERROR DE ACCESO. <br><br><br><br>POR FAVOR HABLE CON EL ADMINISTRADOR<br><br><br><br><a href='default.php'>REGRESAR</a><hr>");
	mysql_select_db("telmex_servlada", $db_conn)            or die("<br><br><hr><br><font color=red><br><br>POR FAVOR HABLE CON EL ADMINISTRADOR<br><br><br><br><a href='default.php'>REGRESAR</a><hr>");
	
function cerrar()
{	
	mysql_close();
}
?>