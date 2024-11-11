<?php
// Incluir el archivo de conexión
include 'conexion.php';

// Escribir la consulta para obtener los datos
$sql = "SELECT * FROM luchadores"; // Reemplaza 'nombre_tabla' con el nombre de tu tabla
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros de la Tabla de Luchadores</title>
</head>
<body>
    <h1>Registros de la Tabla de Luchadores</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Nombre en el Ring</th>
            <th>Fecha de Debut</th>
            <th>Fecha de Nacimiento</th>
            <th>Nacionalidad</th>
            <th>Altura (cm)</th>
            <th>Peso (kg)</th>
            <th>Movimiento Firma</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            // Salida de cada fila de datos
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["luchador_id"] . "</td>"; // Cambia 'luchador_id' por el nombre real de tu columna si es diferente
                echo "<td>" . $row["nombre"] . "</td>";
                echo "<td>" . $row["nombre_ring"] . "</td>";
                echo "<td>" . $row["fecha_debut"] . "</td>";
                echo "<td>" . $row["fecha_nacimiento"] . "</td>";
                echo "<td>" . $row["nacionalidad"] . "</td>";
                echo "<td>" . $row["altura_cm"] . "</td>";
                echo "<td>" . $row["peso_kg"] . "</td>";
                echo "<td>" . $row["movimiento_firma"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='9'>No hay registros</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
// Cerrar conexión
$conn->close();
?>
