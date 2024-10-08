<?php

class Imc
{
    private $nome;

    private $peso;

    private $altura;

    private $imc;

    private $resultado;

    // Atribuir um valor -> Set
    function setNome($valor)
    {
        $this->nome = $valor;
    }

    function setPeso($valor)
    {
        $this->peso = ($valor);
    }

    function setAltura($valor)
    {
        $this->altura = $valor;
    }

    function setImc($valor)
    {
        $this->imc = $valor;
    }

    function setResultado($valor)
    {
        $this->resultado = $valor;
    }


    function getNome()
    {
        return $this->nome;
    }

    function getPeso()
    {
        return $this->nome;
    }

    function getAltura()
    {
        return $this->nome;
    }

    function getImc()
    {
        return $this->nome;
    }

    function getResultado()
    {
        return $this->nome;
    }
    // MÉTODO PARA CALCULAR IMC
    public function calcularImc()
    {
        if ($this->altura > 0) {
            $this->imc = ($this->peso / ($this->altura * $this->altura));
        } else {
            $this->imc = 0;
        }
    }

    public function calcularResultado()
    {
        if ($this->imc < 18.5) {
            $this->resultado = "Abaixo do peso";
        } elseif ($this->imc >= 18.5 && $this->imc < 24.9) {
            $this->resultado = "Peso Normal";
        } elseif ($this->imc >= 25 && $this->imc <= 29.9) {
            $this->resultado = "Sobrepeso";
        } else {
            $this->resultado = "Obesidade";
        }
    }
}
?>