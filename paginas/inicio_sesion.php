<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.">
    <title>iniciar sesion</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/inicio_sesion.css">
</head>
<body>
    <div class="container">
        <div class="formulario">
            <h1>Inicio de Sesion</h1>
            <form action="./index_sesion.html" method="post">
                <div class="username">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="usuario" required>
                    <label for="">Nombre de usuario.</label>
                </div>
                <div class="username">
                    <input type="password" name="contraseña" required>
                    <label for="">Contraseña</label>
                </div>
                <div class="recordar">¿Olvido su contraseña?</div>
                    <button type="submit" onclick="login" value="">Iniciar Sesión</button>
                <div class="registrarse">
                    ¿No tienes una cuenta? <a href="./registro.html">crear cuenta.</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
