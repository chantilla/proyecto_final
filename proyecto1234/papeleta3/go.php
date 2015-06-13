
<?php
	// Recibimos la ID del vinculo desde la URL
	$id = $_REQUEST['id'];
	$estado = $_REQUEST['estado'];
	
	mysql_connect("127.0.0.1", "root", "") or die(mysql_error());
	mysql_select_db("elecciones") or die(mysql_error());

	// Incrementamos en 1 el contador del link con la ID especificada en la url
	$update = "UPDATE voto_alcade SET voto_alcalde=(voto_alcalde + 1) WHERE id='$id'";
	$update = "UPDATE ciudadano SET estado=1 WHERE estado='$estado'";
	mysql_query($update) or die (mysql_error());

?>	
