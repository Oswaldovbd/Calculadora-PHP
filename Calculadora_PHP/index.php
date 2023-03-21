<?php
$n1 = 0;
$n2 = 0;
$result = 0;
$calc = '+';

if (isset($_POST['calcular'])) {
    $n1 = (float) $_POST['n1'];
    $n2 = (float) $_POST['n2'];
    $calc = $_POST['calcular'];

    $result = $n1 + $n2;
}

if ($calc == '-') {
    $result = $n1 - $n2;
} elseif ($calc == '*') {
    $result = $n1 * $n2;
} elseif ($calc == '/') {
    $result = $n1 / $n2;
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Calculadora-PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="border border-primary position-absolute top-50 start-50 translate-middle p-4">
        <form method="post">
            Primeiro numero <br>
            <input type="number" class="border border-primary" name="n1" value=<?= $n1 ?> required> <br>
            Segundo numero <br>
            <input type="number" class="border border-primary" name="n2" value=<?= $n2 ?> required> <br> <br>
            <div class="row row-cols-2 w-50">
                <input type="submit" name="calcular" value="+" class="btn btn-danger position-relative start-50">
                <input type="submit" name="calcular" value="-" class="btn btn-primary position-relative start-50">
                <input type="submit" name="calcular" value="*" class="btn btn-success position-relative start-50">
                <input type="submit" name="calcular" value="/" class="btn btn-warning position-relative start-50">
            </div>
            <br><br>

            <p>Resultado: <?= $result ?> </p>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>