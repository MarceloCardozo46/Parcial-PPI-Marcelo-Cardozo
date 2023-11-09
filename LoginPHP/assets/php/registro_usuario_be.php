 <?php
include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$contrasena_encriptada = hash('sha512', $contrasena);

// Escapar los valores de entrada para prevenir inyección SQL
$nombre_completo = mysqli_real_escape_string($conexion, $nombre_completo);
$correo = mysqli_real_escape_string($conexion, $correo);
$usuario = mysqli_real_escape_string($conexion, $usuario);
$contrasena = mysqli_real_escape_string($conexion, $contrasena);

$query = "INSERT INTO usuarios (nombre_completo, correo, usuario, contrasena)
          VALUES ('$nombre_completo', '$correo', '$usuario', '$contrasena_encriptada')";
// Verificar que el correo no se repita

$queryCorreoRepetido = "SELECT * FROM usuarios WHERE correo = '$correo'";
$verificar_correo = mysqli_query($conexion, $queryCorreoRepetido);

if(mysqli_num_rows($verificar_correo) > 0){
    echo '
        <script>
            alert("Este correo ya está registrado, intenta con otro diferente");
            window.location = "../index.php";
        </script>
    ';
    mysqli_close($conexion);
    exit();
} 

// Verificar que el usuario no se repita
$queryUsuarioRepetido = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
$verificar_usuario = mysqli_query($conexion, $queryUsuarioRepetido);

if(mysqli_num_rows($verificar_usuario) > 0){
    echo '
        <script>
            alert("Este usuario ya está registrado, intenta con otro diferente");
            window.location = "../index.php";
        </script>
    ';
    mysqli_close($conexion);
    exit();
} 


$ejecutar = mysqli_query($conexion, $query);

if($ejecutar) {
    echo '
        <script>
            alert("Usuario almacenado exitosamente");
            window.location = "../website/index.html";
        </script>
    ';

} else {
    if (!$ejecutar) {
        echo "Error: " . mysqli_error($conexion);
    }
    
    echo '
        <script>
            alert("Inténtalo de nuevo");
            window.location = "../index.php";
        </script>
    ';

    
}

mysqli_close($conexion);
?>
