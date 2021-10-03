<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3ec0ec7a1c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <title>Iniciar Sesion</title>
</head>
<body>
    <div class="contenedor">
        <h1 class="titulo">Iniciar Sesion</h1>
        <hr class="border">

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">
            <div class="form-group">
                <i class="icono izquierda fa fa-user"></i>
                <input type="text" name="usuario" class="usuario" placeholder="Usuario">
            </div>
            
            <div class="form-group">
                <i class="icono izquierda fa fa-lock"></i>
                <input type="password" name="password" class="password_btn" placeholder="Constraseña">
                <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
            </div> 

            <?php if(!empty($errores)) : ?>
                <div class="error">
                    <ul>
                        <?php echo $errores; ?>
                    </ul>
                </div>
            <?php endif; ?>       
        </form>

        <p class="texto-registrate">
            ¿ Aun tienes cuenta ?
            <a href="registro.php">Registrate</a>
        </p>
        
    </div>
</body>
</html>