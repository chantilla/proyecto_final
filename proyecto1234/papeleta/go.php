
<?php
	// Recibimos la ID del vinculo desde la URL
	$id = $_REQUEST['id'];
	
	mysql_connect("127.0.0.1", "root", "") or die(mysql_error());
	mysql_select_db("elecciones") or die(mysql_error());

	// Incrementamos en 1 el contador del link con la ID especificada en la url
	$update = "UPDATE voto_partido SET voto_partido=(voto_partido + 1) WHERE id='$id'";
	mysql_query($update) or die (mysql_error());

?>	
