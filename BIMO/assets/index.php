<?php include("./backend/conexion.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>

    <section>
        <div class = "form-box">
            <div class="form-value">
                <form action="./backend/admin/login.php" method="post">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"> </ion-icon>
                        <input type="email" name="Correo" required>
                        <label for="">Usuario</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="Contrasena" required>
                        <label for="">Contraseña </label>
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox">Recordar <a href="#">Olvide mi Contraseña</a></label>
                    </div>
                    <button> Log in</button>
                    <div class="register">
                        <p>No tengo una cuenta <a href="#">Registrarse</a></p>
                    </div>
                </form>

            </div> 

        </div>
    </section>
</body>
</html>

