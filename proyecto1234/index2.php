<?php?>
<html>
    <head>
        <p>.</p>
        <p>.</p>
         <td><center><img src="./login/1.png"></td></center>
         <td>.</td>
         <p>.</p>
         <p>.</p>
       
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="./login/libs/bootstrap/css/bootstrap.css">
    <script src="./login/libs/jquery-2.1.0.js"></script>
    <link rel="stylesheet" href="./login/libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
    <script src="./login/libs/validacion/jquery.validate.min.js"></script>
    <script src="./login/libs/validacion/messages.js"></script>
    <script src="./login/libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
    </head>
    <body>
      

    <div class="jumbotron">
        <form action="login.php" method="post" id="alumno">
             <center><table class="table-bordered">
                
            <center>
                <div class="row">
          
                <div class="col-xs-6">
                    ususario:
                </div>
                <div class="col-xs-3">
                    <input type="text" name="login" >
                </div>
            </div>
              <div class="row">
          
                <div class="col-xs-6">
                    clave:
                </div>
                <div class="col-xs-3">
                    <input type="password" name="pass" >
                </div>
            </div>
        </center>
          
            <p>
            <div class="row">
                <td colspan="2">
                    <input type="submit" name='bot' value='Enviar' class="btn btn-primary" >
                </div>
            </p>
            </div>
        </table>
    </center>
        </form>
    </div>
        
       
    </body>
</html>
