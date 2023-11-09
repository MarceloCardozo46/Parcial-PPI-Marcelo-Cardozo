<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y registro</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>

        <div class="contenedor__todo">

            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-signup">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesión</p>
                    <button id="btn__signup">Registrarse</button>
                </div>
            </div>

            <div class="contenedor__login-signup">
                <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electronico" name="correo" required>
                    <input type="password" placeholder="Contraseña" name="contrasena" required>
                    <button>Entrar</button>
                </form>
                <form action="php/registro_usuario_be.php" method="POST" class="formulario__signup">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo" required>
                    <input type="text" placeholder="Correo Electronico" name="correo" required>
                    <input type="text" placeholder="Usuario" name="usuario" required>
                    <input type="password" placeholder="Contraseña" name="contrasena" required>
                    <button>Registrarse</button>
                </form>
    
            </div>
            
        </div>
        
    </main>
    <script src="js/script.js"></script>
</body>
</html>