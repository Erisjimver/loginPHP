<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <link  rel="stylesheet" href="Estilo.css" type="text/css"/>
        
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
         <h1>Introduce tus Datos Para Loguin</h1>
        <!--Esta seria la forma de hacer que al darle al boton loguin esta vuelva a recargar nuestra pagina
         de nuevo y esta linea de codigo se añade dentro del proceso action=" " -->
        <form action="<?php echo $_SERVER['PHP_SELF'];?> " method="post">
            <table>
            
                <td><tr>
                <label style="padding: 12px">Loguin:</label><input type="text" name="loguin" placeholder="introduce nombre"></td></tr>
                <br>
                <td><tr>
                <label>Password:</label><input type="password" name="password"></td></tr>
                <br>
                <td><tr>
                <label>Recordar:</label><input type="checkbox" name="recordar"></td></tr>
                <td><tr><input  style="margin-left: 110px" type="submit" name="Boton" id="Boton" value="Loguin">
                    
                    </td></tr>
            </table> 
        </form>
        
        
        
    </body>
</html>
