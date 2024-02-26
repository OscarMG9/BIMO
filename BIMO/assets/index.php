<?php include("./backend/conexion.php")?>
<!DOCTYPE html>
<html lang="es">
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
                <form action="../assets/backend/admin/logIn.php" method="post">
                    <h2><b>Login</b></h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"> </ion-icon>
                       <input type="text" id="usuario" name="nombre_u" required>
                       <label for="usuario">Usuario</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="contrasena" id="pass" required>
                        <label for="pass">Contraseña </label>
                    </div>
                    <div class="forget">
                        <label class="text-light"><input type="checkbox">Recordar <a href="#">Olvide mi Contraseña</a></label>
                    </div >
                    <button type="submit" class="btn btn-light rounded btn-entrar my-3" onclick="return validarFormulario()">Log in</button>

                    <div class="register">
                        <p class="text-light">No tengo una cuenta <a href="#">Registrarse</a></p>
                    </div>
                </form>

            </div> 

        </div>
    </section>
</body>
</html>

