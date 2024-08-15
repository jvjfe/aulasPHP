<?php
    $nome = $_GET["campoNome"];
    $peso = $_GET["campoPeso"];
    $altura = $_GET["campoAltura"];
    // CALCULAR O IMC
    $imc = $peso / ($altura * $altura);
    // Classificar o resultado do IMC
    if($imc < 18.5) {
        $resultado = "Abaixo do peso";
    } elseif ($imc >= 18.5 && $imc < 24.9){
        $resultado = "Peso Normal";
    } elseif ($imc >= 25 && $imc <= 29.9){
        $resultado = "Sobrepeso";
    } else {
        $resultado = "Obesidade";
    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC COM POO</title>
</head>
<body>
  <h1>&diams; Resultado do IMC &diams; </h1>
  <p>Nome: <?php echo htmlspecialchars($nome); ?> </p> 
  <p>Peso: <?php echo htmlspecialchars($peso) ?></p>
  <p>Altura: <?php echo htmlspecialchars($altura) ?></p>
  <p>IMC: <?php echo number_format($imc,2) ?></p>
  <p>Resultado: <?php echo $resultado ?></p>
</body>
</html>