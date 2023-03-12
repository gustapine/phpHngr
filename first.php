/*Utilizando código PHP, escreva um algoritmo que 
calcule a média de notas de uma turma e no 
final apresente o resultado. (< 5 - Reprovado, < 7 - Exame, >= 7 - Aprovado)
*/

<?php

$notas = array(7, 8, 5, 6, 9, 10);

$media = array_sum($notas) / count($notas);

echo "A média da turma é: " . $media . "<br>";

foreach ($notas as $nota) {
    if ($nota < 5) {
        echo "Reprovado" . "<br>";
    } elseif ($nota < 7) {
        echo "Exame" . "<br>";
    } else {
        echo "Aprovado" . "<br>";
    }
}
