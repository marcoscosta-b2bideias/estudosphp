<?php   

/* PRIMEIRA OPÇÃO

$idade = 18;

echo "Você só pode entrar se tiver mais que 18 anos!" . PHP_EOL; 

if ($idade >= 18) { 
    echo  "Você tem $idade anos." . PHP_EOL; 
    echo 'Pode entrar'; 
}*/

/* SEGUNDA OPÇÃO 

$idade = 18;
$nome = 'Marcos'
echo "Você só pode entrar se tiver mais que 18 anos!" . PHP_EOL; 

if ($idade >= 18 and $nome == 'Marcos') { 
    echo  "Você tem $idade anos." . PHP_EOL; 
    echo 'Pode entrar';
}*/

$idade = 18;
$numerodepessoas = 1;

echo "Você só pode entrar se tiver mais que 18 anos!" . PHP_EOL; 
echo "a partir de 16 anos acompanhando" . PHP_EOL; 
if ($idade >= 18) { 
     echo  "Você tem $idade anos." . PHP_EOL; 
     echo 'Pode entrar';
} else { "Você só tem $idade anos. Você não pode entrar";
     echo "Você só tem $idade anos." . PHP_EOL;
     echo " Você não pode entrar";
}

echo PHP_EOL;
echo "Adeus!";

