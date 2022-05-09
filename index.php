<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de usuarios</title>
    <link rel="stylesheet" type="text/css" href="assets/css//home-styles.css">
</head>

<body>
    <!-- Header -->
    <header>
            <h1 class="name-app"><i class="fa-solid fa-house"></i> Gestor de usuarios</h1>
            <form name="search-form" class="search-form" method="POST" action="<?php echo $_SERVER["PHP_SELF"] ?>">
                <label for="search">Buscar usuarios <i class="fa-solid fa-magnifying-glass"></i></label>
                <input type="search" name="searchº">
            </form>
            <a href="" class="new-user-btn"><i class="fa-solid fa-circle-plus"></i> Nuevo</a>
        </header>

        <!-- Contenido principal -->
        <div id="main-flex-container">
            <table>
                <th>Seleccionar</th>
                <th>Usuario</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Fecha registro</th>
            </table>

            <form name="action-form" class="update-form" method="POST" action="<?php echo $_SERVER["PHP_SELF"]?>">
                <div id="update-form-flex-container">
                    <label for="users">Actualizar usuario</label><br>
                    <select name="users">
                        <option value="">Selecciona un usuario</option>
                    </select>
                </div>
                <button class="update-user-btn" name="Update">Actualizar usuario</button>
                <button class="delete-user-btn" name="Delete">Eliminar seleccionados</button>
            </form>
        </div>

        <!-- Footer -->
        <footer>
            Powered by Zabieru © <?= date("Y")?>
        </footer>
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/833d921ab7.js" crossorigin="anonymous"></script>
</body>

</html>