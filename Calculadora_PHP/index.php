<?php
    $n1 = 0;
    $n2 = 0;
    $result = 0;
    $calc = 'calculo';

    if(isset($_POST['somar']))
    {
        $n1 = (int)$_POST['n1'];
        $n2 = (int)$_POST['n2'];
        $calc = $_POST['somar'];

        $result = $n1 + $n2;
    }

    elseif(isset($_POST['subtrair']))
    {
        $n1 = (int)$_POST['n1'];
        $n2 = (int)$_POST['n2'];
        $calc = $_POST['subtrair'];

        $result = $n1 - $n2;
    }

    elseif(isset($_POST['multiplicar']))
    {
        $n1 = (int)$_POST['n1'];
        $n2 = (int)$_POST['n2'];
        $calc = $_POST['multiplicar'];

        $result = $n1 * $n2;
    }

    elseif(isset($_POST['dividir']))
    {
        $n1 = (int)$_POST['n1'];
        $n2 = (int)$_POST['n2'];
        $calc = $_POST['dividir'];

        $result = $n1 / $n2;
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <form method="post">
        Primeiro numero <br>
        <input type="number" name="n1" value= <?= $n1 ?> required > <br>
        Segundo numero  <br>
        <input type="number" name="n2" value= <?= $n2 ?> required  > <br> <br>
        <input type="submit" name="somar" value = "+">
        <input type="submit" name="subtrair" value = "-">
        <input type="submit" name="multiplicar" value = "*">
        <input type="submit" name="dividir" value = "/">
        <br><br>
        
        <p>Resultado da soma: <?= $result ?> </p>
    </form>

</body>
</html>