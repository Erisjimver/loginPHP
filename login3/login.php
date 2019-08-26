<!DOCTYPE html>
<!--
Yacoobs Cort. Mart.
Miercoles 31 de Mayo de 2017.
-->
<html>
    <head>
        <link  rel="stylesheet" href="Estilo.css" type="text/css"/>
        
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        $autenticado=false;
       if (isset($_POST["Boton"])){
           
      
            $loguear = $_POST["loguin"];
            $pass = $_POST["password"];


            try {
                    //Creamos una conexion con la libreria PDO
                    $base = new PDO('mysql:host=localhost; dbname=pruebas','root','');

                    //Esto sirve para capturar el error y que este sea visualizador por el catch().
                    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $base->exec("SET CHARACTER SET utf8");

                    //Creamos la sentencia y la guardamos en una variable.
                    $sql = "SELECT * FROM usuarios_pass WHERE USUARIOS= :login AND PASSWORD= :password";

                    //Prepara una sentencia para su ejecución y devuelve un objeto sentencia.
                    $consulta_preparada = $base->prepare($sql);

                    //htmlentities — Convierte todos los caracteres aplicables a entidades HTML.
                    //Devuelve un string con barras invertidas delante de los caracteres que necesitan ser escapados.
                    //Estos caracteres son la comilla simple ('), comilla doble "), barra invertida (\) 
                    //y NUL (el byte NULL). 
                    $login = htmlentities(addslashes($loguear));

                    $password = htmlentities(addslashes($pass));

                    //Vincula un valor al parámetro de sustitución con nombre o de signo de interrogación de la 
                    //sentencia SQL que se utilizó para preparar la sentencia. 
                    $consulta_preparada->bindValue(":login", $login);

                    $consulta_preparada->bindValue(":password", $password);

                    //Ejecutamos la sentencia preparada.
                    $consulta_preparada->execute();

                    //Evaluamos la condicion si la consulta_preparada obtuvo cambios en sus filas.(devuelve un 1 o 0)
                    //rowCount() Devuelve el número de filas afectadas por la última sentencia SQL 
                    if ($consulta_preparada->rowCount()!=0){


                        //session_start — Iniciar una nueva sesión o reanudar la existente.
                        //http://php.net/manual/es/function.session-start.php

                        //session_start();

                        //$_SESSION["usuario"]=$_POST["loguin"];
                        $autenticado=true;
                        if(isset($_POST["recordar"])){

                            setcookie("nombre_usuario", $_POST["loguin"], time()+86400);
                        }

                    }
                    else{

                       echo"<label style='Color:red'>Login Incorrecto!!!</label>"; 

                    }


                } catch (Exception $ex) {

                    echo"" . $ex->getLine();
                    die("Error: " . $ex->getMessage());

                }
                
        }
        
        ?>

        <?php
        
/*
        
        if (!isset($_SESSION["usuario"])){
            
            include "./formulario.php";
            
        }else{
          $Usu = $_SESSION["usuario"]; 
          
          echo "<table style='width: 500px;border: 0;padding: 10px 20px;'>";
         
            echo "<tr>";
                echo "<td><img src='imagen/usuario.png' width='100' height='100'</td>";
                echo"<label>Usuario: $Usu estas conectado...</label>";     
            echo"</tr>";
            
        echo"</table>"; 
           
            
        }

*/


        if($autenticado==false){
            if(!isset($_COOKIE["nombre_usuario"])){
                include("formulario.php");
            }
        }

 
        ?>
        
        
        <h2>Contenido de la Pagina Web</h2>
        
        <table style="width: 800px;border: 0;padding: 10px 20px;">
         
            <tr>
                <td><img src="imagen/imagen1.jpg" width="300" height="160"</td>
                <td><img src="imagen/imagen2.jpg" width="300" height="160"</td>      
            </tr>
            <tr>
                <td><img src="imagen/imagen3.jpg" width="300" height="160"</td>
                <td><img src="imagen/imagen4.jpg" width="300" height="160"</td>   
            </tr>
        </table> 
       
    </body>
</html>
