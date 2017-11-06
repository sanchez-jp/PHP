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
        
       
        <table border>
            <tr>
                <td>Apellido1</td>
                <td>Apellido2</td>
                <td>Nombre</td>
            </tr>
            
        <?php
         echo "<br><br>";
        /* Tablas con PHP */
        /* Con php generamos las distintas filas */
        for($fila=1; $fila<=3; $fila++){ 
        ?>
            <tr> <!-- Pintamos la fila con html -->
            <?php /* Añadimos los elementos a la tabla con php */
            for($columna=1; $columna<=3; $columna++){ ?>
                <!--Pintamos columna con html e introducimos elemento con php-->
                <td> <?php echo $fila.$columna ?> </td>   
            <?php
            }
            ?>
            </tr> <!-- Cerramos la fila en html -->
        <?php /* Cierre del for del código php */   
        }
        ?>
        </table>     
    </body>
</html>