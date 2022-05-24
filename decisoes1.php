<?php   

$idade = 15;
$numerodepessoas = 2;

echo "Você só pode entrar se tiver mais que 18 anos!" . PHP_EOL; 
echo "a partir de 16 anos acompanhando" . PHP_EOL; 
if ($idade >= 18) { 
     echo  "Você tem $idade anos." . PHP_EOL; 
     echo 'Pode entrar sozinho';
} else if ($idade >= 16 && $numerodepessoas > 1) {
    echo "Você só tem $idade anos." . PHP_EOL;
    echo "e está acompanhado(a), então pode entrar.";
} else {
    echo " Você só tem $idade anos. Você não pode entrar";
    }

echo PHP_EOL;
echo "Adeus!";

