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
        session_start();
        ob_start();
        $_SESSION['ingreso']="entra";
    ?>

    <div class="row">
        <div class="col-md-4"></div>
        <dic class="col-md-4">
        

        <h1>LOGIN</h1>
        <form method="POST" aaction="LOGIN.php">
        
        <div class="form-group">
            <label for="id_clientes">ID DE CLIENTE</label>
            <input type="text" name="id_clientes" class="form-control" id="id_clientes">
        </div>

        <div class="form-group">
            <label for="correo">CORREO ELECTRONICO</label>
            <input type="text" name="correo" class="form-control" id="correo">
        </div>

        <div class="form-group">
            <label for="pass">CONTRASEÑA</label>
            <input type="text" name="pass" class="form-control" id="pass">
        </div>
        <input type="submit" value="ENTRAR" class="btn btn-success" name="LOGIN"></input>
        </form>
        </div>

</body>
</html>