<?php
    $connect = mysqli_connect("localhost", "root", "", "showtlink");
    if($connect){
        echo "Function Multiplier";
    }
    else{
        echo "database not available";
    }
?>
