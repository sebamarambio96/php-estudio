<?php
    if ($_POST) {
    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

    $suma=$valorA+$valorB;
    echo $suma;
    $resta=$valorA-$valorB;
    echo $resta;
    $multi=$valorA*$valorB;
    echo $multi;
    $divi=$valorA/$valorB;
    echo $divi;

    if ($valorA==$valorB) {
        echo "El valor de A es igual que el valor de B";
        if ($valorA==4) {
            echo "El valor es 4";
        }
    }
    if($valorA==5){
        echo "El valor es 5";
    }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ejercicio11.php" method="post">
        Valor A:
        <input type="text" name="valorA" id="">
        <br/>
        Valor B:
        <input type="text" name="valorB" id="">
        <br/>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>