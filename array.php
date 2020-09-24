<!DOCTYPE html>
<html>
<body>

<?php
$marks =array(

    "mohammad"=>array(
        "physics"=>35,
        "maths"=>30,
        "chemistry"=>39
    ),
    "qadir"=>array(
        "physics"=>30,
        "maths"=>32,
        "chemistry"=>29
    
    ),
    "zara"=>array(
        "physics"=>31,
        "maths"=>22,
        "chemistry"=>39
    )
    );
    

    //echo $marks['mohammad']['physics'] . "\n";
    foreach($marks as $mark) { 
        echo $mark['physics']. " ".$mark['maths']." ".$mark['chemistry']."\n";  
    } 
?>

</body>
</html>