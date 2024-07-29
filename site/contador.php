<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    for ($i = 1; $i <=10; $i++) {
            if ($i % 2 == 0) {
                echo $i . "<br>";
        }else{
            echo "impar <br>";
        }
    }

    echo "<hr>";

$a = 1;
    while($a<=10){
        echo $a . "<br>";
        $a = $a + 1;
    }
    ?>
</body>
</html>