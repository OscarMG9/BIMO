<?php
    session_start();

    include '../conexion.php';

    $correo = $_POST['Correo'];
    $contrasena = $_POST['Contrasena'];

    // Consulta para verificar las credenciales usando el correo electrónico
    $checkLogin = mysqli_query($conexion, "SELECT * FROM Usuario WHERE Correo = '$correo' AND Contrasena = '$contrasena'");

    if(mysqli_num_rows($checkLogin) > 0){
        $_SESSION['Correo'] = $correo;
        header("location: ../../html/Dashboard.php");
        exit;
    } else{
        echo '
            <script>
                alert("Usuario no encontrado, verifica tus datos");
                window.location = "../../index.php";
            </script>
        ';
      exit;
    }
?>
