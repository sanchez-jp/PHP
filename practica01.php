<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // Esto es un comentario de una línea
        /* Esto es un comentario de varias lineas*/
            //<br> realiza salto de linea
            echo "PHP se ejecuta siempre en el servidor <br>"
            ."<br>"; // El punto se usa para concatenar
            // Definición de variables
            $a=2;
            $b=5;
            $c=8;
            $cadena="Hola";
            $nombre = "Juan";
            $d = "8.9";
            
            // Salida por pantalla de variables:
            echo "La variable \$a vale $a <br>";
            echo "Varios espacios en blanco se sacan con &nbsp; &nbsp;"
            . "&nbsp; Ahora continuamos con texto<br><br>";
            
            // Operadores
            $v = $a/$b;
            $t = $a*$b;
            // ... Igual que java
           
            /* CONDICIONALES */
            $cadena1 = "";
            if(empty($cadena1)){ /* Sila cadena está vacía... */
                echo "La cadena está vacía<br>";
            }
            else{ /* si no... */
                echo "La cadena tiene algo<br>";
            }
            
            /* Preguntamos ahora si existe (si está definida) */
            if (isset($cadena1)){
                echo "La \$cadena1 está definida y va a ser destruida<br>";
                unset($cadena1); /* Elimina la variable */
            }
            else {
                echo "La \$cadena1 no está definida<br>";
            }
            
            /* repetimos el código para comprobar que la variable se destruye */
            
            if (isset($cadena1)){ /* Si la variable está definida... */
                echo "La \$cadena1 está definida y va a ser destruida<br>";
            }
            else { /* Si no... */
                echo "La \$cadena1 no está definida<br>";
            }
            
            /* -- BUCLES -- */
            $i = 1;
            while ($i <=10){
                echo "$i &nbsp;";
                $i ++;
            }
            
            echo "<br><br>";
            
            for ($i=0; $i<10; $i++){
                echo "$i <br>";
            }
            echo "<br>Otro bucle for<br>";
            for ($i=0; $i<30; $i+=3){
                echo "$i <br>";
            }
            echo "<br>";
            
            /* -- SWITCH --*/
            $dia = 4;
            switch($dia){
                case 1: echo "El día es Lunes";
                    break;
                case 2: echo "El día es Martes";
                    break;
                case 3: echo "El día es Miercoles";
                    break;
                case 4: echo "El día es Jueves";
                    break;
                case 5: echo "El día es Viernes";
                    break;
                case 6: echo "El día es Sábado";
                    break;
                case 7: echo "El día es Domingo";
                    break;
            }
        ?>
        
        <h1>Esto vuelve a ser html puro</h1>
    </body>
</html>
