<?php include("./backend/conexion.php")?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./plugins/css/bootstrap.css">
    <link rel="stylesheet" href="./css/login.css">
</head>
<body class="font">

    <section>
        <div class = "form-box">
            <div class="form-value">
                <form action="">
                    <h2><b>Login</b></h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"> </ion-icon>
                       <input type="email" required>
                       <label for="">Usuario</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password"required>
                        <label for="">Contraseña </label>
                    </div>
                    <div class="forget">
                        <label for="" class="text-light"><input type="checkbox">Recordar <a href="#">Olvide mi Contraseña</a></label>
                    </div>
                    <a type="submit" class="btn btn-light rounded btn-entrar my-3 "  href="./html/Dashboard.html" onclick="validarFormulario()"> Log in</a>
                    <div class="register">
                        <p class="text-light">No tengo una cuenta <a href="#">Registrarse</a></p>
                    </div>
                </form>

            </div> 

        </div>
    </section>
</body>
</html>
