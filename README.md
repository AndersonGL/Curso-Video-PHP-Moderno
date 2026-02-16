# Curso-Video-PHP-Moderno
## Estudos com  o Professor Gustavo Guanabara


### Desafio 06 - A anotomia de uma divisão 

<?php
$dividendo = 37;
$divisor   = 5;

if ($divisor == 0) {
  echo "Divisor não pode ser 0.";
  exit;
}

$q = intdiv($dividendo, $divisor);
$r = $dividendo % $divisor;

echo "Dividendo: $dividendo\n";
echo "Divisor:   $divisor\n";
echo "Quociente: $q\n";
echo "Resto:     $r\n";
echo "Prova:     $divisor * $q + $r = " . ($divisor * $q + $r) . "\n";





### Desafio 07 - Salario minimo com PHP
### Desafio 08- Exercicios Raizes
### Desafio 09- Endendendo as Médias
### Desafio 10- Maquina do tempo
### Desafio 11- Reajustar Preços
### Desafio 12- Calculadora de Tempo
### Desafio 13- Simulando um Caixa Eletronico
