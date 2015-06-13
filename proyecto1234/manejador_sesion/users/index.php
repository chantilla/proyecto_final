<?php
// Evitar los warnings the variables no definidas!!!
$err = isset($_GET['error']) ? $_GET['error'] : null ;

?>

<!DOCTYPE html>

<html lang="esp">

	<head>
    	<meta charset="utf-8" />
    	<title>Session Form</title>
    </head>
    
    <body>
    
    	<form name="user" action="session_init.php" method="post">
        	<?php if($err==1){
				echo "Usuario o Contraseña Erróneos <br />";
			}
			if($err==2){
				echo "Debe iniciar sesion para poder acceder el sitio. <br />";
			}
			?>
        	<label>User name</label><br />
            <input type="text" name="usern" id="usern" maxlength="15" /><br />
            <label>Password</label><br />
            <input type="password" name="passwd" id="passwd" maxlength="10" /><br />
            <input type="submit" name="enter" id="enter" value="Enter" />        
        </form>
    
    </body>
    
</html>