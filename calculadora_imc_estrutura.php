<?php
class calculadoraIMC {
    public $peso;
    public $altura;

    public function __construct($peso, $altura) {
        $this->peso = $peso;
        $this->altura = $altura;
    }
    public function calcularIMC() {
        $imc = $this->peso / ($this->altura * $this->altura);
        return $imc;
    }

    public function classificarIMC() {
        $imc = $this->calcularIMC();
        if ($imc < 18.5) {
            return "Abaixo do peso";
        } elseif ($imc >= 18.5 && $imc < 25) {
            return "Peso normal";
        } elseif ($imc >= 25 && $imc < 30) {
            return "Sobrepeso";
        } else {
            return "Obesidade";
        }
    }
}