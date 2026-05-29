<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista</title>

    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>

<div class="tabla-contenedor">

    <h1>Lista de Registrados</h1>

    <table>

        <thead>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Programa</th>
            </tr>
        </thead>

        <tbody>

        <?php while($fila = $datos->fetch_assoc()) { ?>

            <tr>
                <td><?php echo $fila["dni"]; ?></td>
                <td><?php echo $fila["nombre"]; ?></td>
                <td><?php echo $fila["apellido"]; ?></td>
                <td><?php echo $fila["programa"]; ?></td>
            </tr>

        <?php } ?>

        </tbody>

    </table>

    <br>

    <a href="index.php">
        <button>Volver</button>
    </a>

</div>

</body>
</html>