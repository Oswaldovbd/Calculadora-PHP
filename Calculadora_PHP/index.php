<?php
    $n1 = 0;
    $n2 = 0;
    $result = 0;
    $calc = '+';

    if(isset($_POST['calcular']))
    {
        $n1 = (int)$_POST['n1'];
        $n2 = (int)$_POST['n2'];
        $calc = $_POST['calcular'];

        $result = $n1 + $n2;
    }

        if($calc == '-')
        {
            $result = $n1 - $n2;
        }

        elseif($calc == '*')
        {
            $result = $n1 * $n2;
        }

        else
        {
            $result = $n1 / $n2;
        }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora-PHP</title>
</head>
<body>
    
    <form method="post">
        Primeiro numero <br>
        <input type="number" name="n1" value= <?= $n1 ?> required > <br>
        Segundo numero  <br>
        <input type="number" name="n2" value= <?= $n2 ?> required  > <br> <br>
        <input type="submit" name="calcular" value = "+">
        <input type="submit" name="calcular" value = "-">
        <input type="submit" name="calcular" value = "*">
        <input type="submit" name="calcular" value = "/">
        <br><br>
        
        <p>Resultado: <?= $result ?> </p>
    </form>

</body>
</html>