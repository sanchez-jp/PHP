<! DOCTYPE HTML>
<html lang="es">
    <head>
        <title>Tablass con PHP</title>
        <meta charset="utf-8">
    </head>
    <body>
        <table border>
            <tr> <!-- fila -->
                <td><b>Nombre</b></td>
                <td><b>Apellido1</b></td>
                <td><b>Apellido2</b></td>
            </tr>
            <tr>
                <td>Antonio</td>
                <td>Garcia</td>
                <td>Blanco</td>
            </tr>
            <tr>
                <td>Manuela</td>
                <td>Rodriguez</td>
                <td>Caballo</td>
            </tr>
        </table>
        <?php
        echo "<br><br>";
        /* Tablas con PHP */
        echo "<table border>"
            ."<tr>"
                ."<td>Apellido1</td>"
                ."<td>Apellido2</td>"
                ."<td>Nombre</td>"
            ."</tr>";
        /* Con php generamos las distintas filas */
        for($fila=1; $fila<=3; $fila++){
            echo "<tr>"; // Pintamos la fila
            for($columna=1; $columna<=3; $columna++){
                echo "<td>";
                echo "$fila.$columna";
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </body>
</html>