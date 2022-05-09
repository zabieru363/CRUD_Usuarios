<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Crear usuario</title>
        <link rel="stylesheet" href="../../assets/css/create-user-styles.css">
    </head>
    <body>
        <!-- Header -->
        <header>
            <h1 class="name-app"><i class="fa-solid fa-house"></i> Gestor de usuarios</h1>
            <h1>Crear nuevo usuario</h1>
            <a href="../../index.php" class="back-btn"><i class="fa-solid fa-angle-left"></i> Volver</a>
        </header>

        <!-- Formulario de creación de usuario -->
        <div id="form-container">
            <form name="create-user-form" class="create-user-form" method="POST" action="<?php echo $_SERVER["PHP_SELF"]?>">
                <label for="username">Nombre de usuario</label>
                <input type="text" name="username"><br>
                <span class="error"></span><br>

                <label for="name">Nombre</label>
                <input type="text" name="name"><br>
                <span class="error"></span><br>

                <label for="lastname">Apellidos</label>
                <input type="text" name="lastname"><br>
                <span class="error"></span><br>

                <label for="email">Email</label>
                <input type="email" name="email"><br>
                <span class="error"></span><br>

                <label for="password">Contraseña</label>
                <input type="password" name="password"><br>
                <span class="error"></span><br>

                <input type="submit" class="create-user-btn" name="Create" value="Crear">
            </form>
        </div>

        <!-- FONT AWESOME -->
        <script src="https://kit.fontawesome.com/833d921ab7.js" crossorigin="anonymous"></script>
    </body>
</html>