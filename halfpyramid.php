<?php
echo "<pre>";
$space = 6;
for ($i = 0; $i <= 6; $i++) {
    
    for ($k = 0; $k < $space; $k++) {
        echo "&nbsp;";
    }
    for ($j = 0; $j < 1 * $i - 1; $j++) {
        echo "O";
    }
    
    $space--;
    echo "<br/>";
}
echo "</pre>";
?>