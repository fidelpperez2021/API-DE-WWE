<?php 
// Incluir la conexión a la base de datos
include 'conexion.php'; 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campeonatos</title>
    <link rel="stylesheet" href="Campeonatos.css"> <!-- Link a tu archivo CSS -->
</head>
<body>
    <header>
        <h1>Campeonatos</h1>
    </header>
    <main>
        <?php
        // Consulta SQL para obtener datos de la tabla 'campeonatos'
        $sql = "SELECT * FROM campeonatos"; 
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Mostrar los datos en una tabla HTML
            echo "<table><tr><th>Campeonato</th><th>Descripción</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["nombre"] . "</td><td>" . $row["descripcion"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "No se encontraron resultados.";
        }

        // Cerrar la conexión
        $conn->close();
        ?>
    </main>
</body>
</html>
