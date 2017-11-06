<?php

/* colorear tablas */
echo "<table border><tr>";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        echo "<td bgcolor='red'>$i</td>";
    } else {
        echo "<td bgcolor='green'>$i</td>";
    }
}
echo "</tr></table>";
echo "<br>";
?>

<?php
/* colorear tablas */
echo "<table border>";
for ($fila = 1; $fila <= 10; $fila++) {
    echo "<tr>";
    for ($columna = 1; $columna <= 10; $columna++) {
        if (($fila%2+$columna)%2 == 0) {
            echo "<td bgcolor='BLACK'>$fila$columna</td>";
        } else {
            echo "<td bgcolor='WHITE'>$fila$columna</td>";
        }
    }
}
echo "<tr>";
echo "</table>";

echo "<br>";
?>

<?php

/* colorear tablas */
echo "<table border>";
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    if ($i == 5) {
        echo "<td bgcolor='red'>$i</td>";
    } else {
        echo "<td bgcolor='green'>$i</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>