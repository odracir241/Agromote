 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>ValidarUsuario</title>
    </head>

    <body>
 <?php
 require_once('bd.php');
        error_reporting(0);
        $io = 0;
        $io2 = 0;
           $email = $_POST['email'];
        $Password = $_POST['password'];
		echo $email;
		echo $Password;
        if (strlen($Password) < 1 || strlen($Password) > 12) {
            echo "A�n no se han llenado los campos";
            header('Location: index.html');
        } else {
                $SQL2 = "SELECT *  FROM `usuarios` WHERE `Correo` LIKE '".$email."' AND `Password` LIKE '".$Password."'";
                $res = mysql_query($SQL2);
                
                
                 $SQL3 = "SELECT *  FROM `subusuarios` WHERE `Correo` LIKE '".$email."' AND `Password` LIKE '".$Password."'";
                $res2 = mysql_query($SQL3);
                echo "<br>";
                if (!$res || !$res2) {
                    echo "Aun no estas registrado!!";
                    echo "<br>";
                    header('Location: registrarUsuario.html');
                }
                if ($res || $res) {
                    if ($res == "") {
                        echo "hola";
                    }
                    while ($fila = mysql_fetch_array($res)) {
                        session_start();
                        $_SESSION['id']=$fila['idUsuarios'];
                        $_SESSION['Nombre'] = $fila['Nombre'];
                        $_SESSION['Apellidos'] = $fila['Apellidos'];
                        $_SESSION['Correo'] = $fila['Correo'];
                        $_SESSION['Password']=$fila['Password'];
                        $_SESSION['telefono']=$fila['Telefono'];
                         $_SESSION['sub']=$io2;
                       if ($_SESSION['Nombre'] || $_SESSION['email'] || $_SESSION['Password']) {
                           echo "hay ta";
                           header('Location: principal.php');
                           $io2=0;
                        }
                        if ($fila['Correo'] == "" && $fila['Password'] == "") {
                            echo "hola";
                            header('Location: index.html');
                            $io2=0;
                        }
                    }
                    
                     while ($fila2 = mysql_fetch_array($res2)) {
                         
                        session_start();
                        $_SESSION['id']=$fila2['idSubUsuarios'];
                        $_SESSION['Nombre'] = $fila2['Nombre'];
                        $_SESSION['Apellidos'] = $fila2['Apellido'];
                        $_SESSION['Correo'] = $fila2['Correo'];
                        $_SESSION['Password']=$fila2['Password'];
                        $_SESSION['telefono']=$fila2['Telefono'];
                        $_SESSION['confPs']=$fila2['Conf_Pass'];
                                
                        if($_SESSION['confPs']!=""){
                            $io2=1;
                        $_SESSION['sub']=$io2;
                        }
                       if ($_SESSION['Nombre'] || $_SESSION['email'] || $_SESSION['Password']) {
                           echo "hay ta2";
                           header('Location: principal.php');
                           $io2=0;
                        }
                        if ($fila2['Correo'] == "" && $fila2['Password'] == "") {
                            echo "hola2";
                            header('Location: index.html');
                            $io2=0;
                        }
                    }
                    
                    
                echo "<br>";
                echo "Usuario no registrado";
                echo "<br>";
                if($_SESSION['Nombre']==""){
                   header('Location: index.html');
                }
            }
        }

        /* mysql_close($db); */

        ?>
        <a href="registrarUsuario.html">Registrate</a>
         </body>
         </html>