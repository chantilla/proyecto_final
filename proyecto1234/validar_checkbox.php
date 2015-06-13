<html>
    <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
    <script src="./libs/jquery-2.1.0.js"></script>
    <link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
    <script src="./libs/validacion/jquery.validate.min.js"></script>
    <script src="./libs/validacion/messages.js"></script>
    <script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
    </head>
    <body>
      <form action="./menu/menu2.php" method="post">


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$conn=mysql_connect("localhost","root","");
mysql_select_db("elecciones",$conn);

$ano_apertura=$_POST['ano_apertura'];




if($_POST['checkbox'] != "")
{
         if(is_array($_POST['checkbox']))
         {
             // realizamos el ciclo
             while(list($key,$value) = each($_POST['checkbox'])) 
            {
                $sql=mysql_query("INSERT INTO apertura (ano_apertura, tipo_apertura) VALUES ('$ano_apertura','$value')");
            }
         }
}

if( $sql)
echo '<h1>Bienvenido al sistema de lecciones electronica </h1><br><a href="./menu/menu2.php"><center>Menu</a>';
else
echo '<h1>El proceso de guardado no se realizó correctamente</h1><br><a href="checkbox.php">ir atrás</a>';
        
?>