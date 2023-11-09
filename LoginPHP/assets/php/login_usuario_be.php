<?php

    include 'conexion_be.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $contrasena_encriptada = hash('sha512', $contrasena);

    $query = "SELECT * FROM usuarios WHERE correo='$correo' and contrasena='$contrasena_encriptada'";
    $validar_login = mysqli_query($conexion, $query);

    // Errores de sql
    
    if (!$validar_login) {
        die("Error en la consulta: " . mysqli_error($conexion));
    }
    
    if(mysqli_num_rows($validar_login) > 0){
        header("location: ../website/index.html");
    } else{
        echo '
            <script>
                alert("Usuario incorrecto");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }

?>