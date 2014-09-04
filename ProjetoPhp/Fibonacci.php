<?php
$n = 5;
$a = 0;
$b = 1;
$fib = 0;
for($i = 1; $i<=$n; $i++){
    $fibonacci = $a + $b;
    $aux = $b;
    $b = $fib;
    $a = $aux;
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        echo $fibonacci;
        ?>
    </body>
</html>