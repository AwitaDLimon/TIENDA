<!doctype html>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<html lang="en">
<head>
<title>programa</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<style>
    body{
        background:black;
        font-family:serif; 
        font-size:20px;
        color:#00ff00;
        text-align:center;
    }
</style>
</head>

<body>
        <?php

            if(isset($_POST['REGISTRAR'])){
                include("abrir_conexion.php");

                $id_clientes=$_POST['id_clientes'];
                $nombre=$_POST['nombre'];
                $appat=$_POST['appat'];
                $apmat=$_POST['apmat'];
                $direccion=$_POST['direccion'];
                $telefono=$_POST['telefono'];
                $correo=$_POST['correo'];
                $pass=$_POST['pass'];

                $conexion->query("INSERT INTO $tabla_bd1 (id_clientes,nombre,appat,apmat,direccion,telefono,correo,pass) values ('$id_clientes','$nombre','$appat','$apmat','$direccion','$telefono','$correo','$pass')");
                
                echo "SE REGISTRO DE FORMA EXITOSA";

                include("cerrar_conexion.php");
            }

            if(isset($_POST['CONSULTA'])){
                include("abrir_conexion.php");

                $id_clientes=$_POST['id_clientes'];

                $resultados=mysqli_query($conexion,"SELECT * FROM $tabla_bd1 WHERE id_clientes=$id_clientes");
                while($consulta=mysqli_fetch_array($resultados))
                {
                    echo
                    "
                        <table width=\"100%\" border=\"1\">
                            <tr>
                                <td>id del cliente</td>
                                <td>".$consulta['id_clientes']."</td>
                            </tr>
                            <tr>
                                <td>nombre</td>
                                <td>".$consulta['nombre']."</td>
                            </tr>
                            <tr>
                                <td>apellido paterno</td>
                                <td>".$consulta['appat']."</td>
                            </tr>
                            <tr>
                                <td>apellido materno</td>
                                <td>".$consulta['apmat']."</td>
                            </tr>
                            <tr>
                                <td>direccion</td>
                                <td>".$consulta['direccion']."</td>
                            </tr>
                            <tr>
                                <td>telefono</td>
                                <td>".$consulta['telefono']."</td>
                            </tr>
                            <tr>
                                <td>correo electronico</td>
                                <td>".$consulta['correo']."</td>
                            </tr>
                            <tr>
                                <td>contraseña</td>
                                <td>".$consulta['pass']."</td>
                            </tr>
                        </table>
                    ";

                    echo "CONSULTA REALIZADA CON EXITO";
                    echo "<br>";
                }

                include("cerrar_conexion.php");
            }

        ?>
        </div>
    </div>
</body>
</html>