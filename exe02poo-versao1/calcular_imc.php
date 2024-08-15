<?php
$nome = $_GET["campoNome"];
$peso = $_GET["campoPeso"];
$altura = $_GET["campoAltura"];

//Incluir o arquivo classImc.php - Importar a Classe
require("classeImc.php");

//criar uma nova instancia da classe Imc
$imcCalculado = new Imc();

$imcCalculado->setNome($nome);
$imcCalculado->setPeso($peso);
$imcCalculado->setAltura($altura);

//CALCULAR IMC
$imcCalculado->calcularImc();
//calcular o resultado
$imcCalculado->calcularResultado();

//Definir as variáveis $imc e $resultado
$imc = $imcCalculado->getImc();
$resultado = $imcCalculado->getResultado();


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
    <p>IMC: <?php echo $imc; ?></p>
    <p>Resultado: <?php echo $resultado; ?></p>
</body>

</html>