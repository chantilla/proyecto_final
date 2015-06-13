<?php
 

   $login = $_REQUEST['login'];
   $pass = $_REQUEST['pass'];


   $conexion = mysql_connect("localhost","root") or die ("PROBLEMAS AL CONECTAR EL SEVIDOR");

   mysql_select_db("login",$conexion) or die ("ERROR AL TRATAR DE CONNECTAR CON LA BASE DE DATOS");


   $estandar = mysql_query("SELECT * FROM usuario where login = '".$login."' and passnormal = '".$pass."'", $conexion);

   $admin = mysql_query("SELECT * FROM usuario where login = '".$login."' and passadmin = '".$pass."'", $conexion);

   if ($row = mysql_fetch_array($estandar)){

   	header("location:./menu/menu.php");
   
   }else if ($row = mysql_fetch_array($admin)){
   	header("location:./menu/menu.php");

   }else{
   	echo"error contraseña o nombre de usuario incorrecto";
   }




?>