<?php
//
$txtNombre = "";
$radio="";
if ($_POST) {
    $txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
    $radio = (isset($_POST['lenguaje'])) ? $_POST['lenguaje'] : "";
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
    <?php if ($_POST) { ?>
        </strong> Hola </strong>: <?php echo $txtNombre; echo $radio?>
    <?php } ?>

    <form action="ejercicio31.php" method="post">
        Nombre:<br />
        <input type="text" name="txtNombre" id="" value="<?php echo $txtNombre ?>">
        <br />
        Gusto:<br />
        <br /> php: <input type="radio" <?php echo ($radio=="php")? "checked":"" ?> checked name="lenguaje" value="php" id="">
        <br /> html: <input type="radio" <?php echo ($radio=="html")? "checked":"" ?> name="lenguaje" value="html" id="">
        <br /> css: <input type="radio" <?php echo ($radio=="css")? "checked":"" ?> name="lenguaje" value="css" id="">
        <br />
        <input type="submit" value="Enviar información">
    </form>
</body>

</html>