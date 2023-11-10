<!DOCTYPE html>
<html>

<head>

    <title>Resultado da Soma</title>
</head>
<link rel="stylesheet" href="../styles/style.css">

<body>

    <?php
        if (isset($_POST['peso']) && isset($_POST['altura'])) {
        $valor1 = $_POST['peso'];
        $valor2 = $_POST['altura'];
        $conta = $valor1 / ($valor2*$valor2);
        
            } if ($conta < 18.5) {
    $categoria = "Abaixo do Peso";
} elseif ($conta >= 18.5 && $conta < 24.9) {
    $categoria = "Peso Normal";
} elseif ($conta >= 25 && $conta < 29.9) {
    $categoria = "Sobrepeso";
} else {
    $categoria = "Obeso";
}
echo "Seu IMC é: " . number_format($conta, 2) . "<br>";
echo "Categoria de peso: " . $categoria;


?>
</body>

</html>