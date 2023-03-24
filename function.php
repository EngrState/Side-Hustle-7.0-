<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 include "config.php";
?>
<p>Welcome on board,<br> find below the result of multple number with a default value using  function</p>
    <?php
       function multiplier($num1, $num2, $num3=5){
        $result = $num1* $num2 * $num3;
        return $result;
        }
        echo multiplier(2,4);
    ?>
</body>
</html>
