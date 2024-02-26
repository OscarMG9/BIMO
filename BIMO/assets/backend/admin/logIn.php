<?php
    session_start();

    include '../conexion.php';

    $user = $_POST['Nombre_U'];
    $passwordLogin = $_POST['Contrasena'];
    // $passwordLogin = hash('sha512', $passwordLogin);

    $checkLogin = mysqli_query($conexion, "SELECT * FROM Usuario WHERE Nombre_U = '$user' AND Contrasena = '$passwordLogin'");

    if(mysqli_num_rows($checkLogin) > 0){
        $_SESSION['Nombre_U'] = $user;
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