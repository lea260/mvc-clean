<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Lista de Autos</title>
</head>

<body>
    <h1>Lista de Autos </h1>
    <?php if (!empty($autos)): ?>
        <table border="1" cellpadding="5">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Patente</th>
                    <th>Modelo</th>
                    <th>Estado</th>
                    <th>Ver Detalle</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($autos as $auto): ?>
                    <tr>
                        <td><?= htmlspecialchars($auto->getId()) ?></td>
                        <td><?= htmlspecialchars($auto->getPatente()) ?></td>
                        <td><?= $auto->getModelo() ?></td>
                        <td><?= $auto->getEstado() ?></td>
                        <td>
                            <a href="<?= BASE_URL_CTRL ?>auto/detalle_controller.php?id=<?= $auto->getId() ?>">Ver detalles</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No hay autos registrados.</p>
    <?php endif; ?>
    <p><a href="<?= BASE_URL ?>index.php">Volver al menú</a></p>
</body>

</html>