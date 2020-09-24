<?php
echo "<pre>";
$space = 5;
for ($i = 0; $i <= 5; $i++) {
    
    for ($k = 0; $k < $space; $k++) {
        echo "&nbsp;";
    }
    for ($j = 0; $j < 2 * $i - 1; $j++) {
        echo "O";
    }
    
    $space--;
    echo "<br/>";
}
echo "</pre>";
?>