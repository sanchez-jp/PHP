<?php

/*colorear tablas*/
echo "<table border><tr>";
for($i=1;$i<=10;$i++){
    if ($i==5){
        echo "<td bgcolor='red'>$i</td>";
    }
    else{
        echo "<td bgcolor='green'>$i</td>";
    }
}
echo "</tr></table>";

