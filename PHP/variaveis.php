<?php

$nome = "Érick Fernandes";
$idade = 21;
$idade++;
$idade += 2;
$altura = 1.65;
$peso = 70.5;
$lindo = true;
$imc = $peso / ($altura*$altura);

echo "Nome: $nome".
"\nIdade: ". $idade.
"\nAltura: ", $altura.
"\nPeso: ", $peso,
"\nIMC: ", $imc,
"\nLindo: ". $lindo,
"\nDois ao cubo: ", 2**3;

echo "\n";
echo "\nTipo do nome: ", gettype($nome);
echo "\nTipo da idade: ", gettype($idade);
echo "\nTipo da altura: ", gettype($altura);
echo "\nTipo da beleza: ", gettype($lindo);


