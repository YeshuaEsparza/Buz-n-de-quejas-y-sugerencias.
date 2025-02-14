<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="images/fcc_logo.jpg" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="css/estilos.css">
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
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="validar_usuario.php" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Matricula" name="matricula">
                        <span class="Estilo1">*ERROR DE USUARIO* </span><br /> 
                        <input type="password" placeholder="Contraseña" name="password">
                        <span class="Estilo1">*ERROR* </span><br /> 
                        <button>Entrar</button>
                    </form>

                    <!--Register-->
                    <form action="registro_usuario_be.php" method="POST" class="formulario__register">
                        <h2>Registrarse</h2>
                        <input type="text" placeholder="Nombre(s)" name="nombre">
                        <input type="text" placeholder="Apellidos" name="apellidos">
                        <input type="text" placeholder="Correo Electronico institucional" name="correo">
                        <input type="text" placeholder="Matricula" name="matricula">
                        <input type="text" placeholder="Usuario" name="usuario">
                        <input type="date" placeholder="Año de nacimiento"name="fecha_nac">
                        <input type="password" placeholder="Contraseña" name="password">
                        <button>Registrarse</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="assets/js/script.js"></script>
</body>
</html>