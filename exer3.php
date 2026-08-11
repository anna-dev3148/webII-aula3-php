<?php
$genero = $_GET['genero'];
$tamanho = $_GET['tamanho'];
$valor;

if($genero == 'masc' && $tamanho == 'p'){
    $valor = 30 - 5;
    echo 'O valor total é de: R$' . $valor;
}

else if($genero == 'masc' && $tamanho == 'm'){
    $valor = 30 + 1;
    echo 'O valor total é de: R$' . $valor;
}

else if($genero == 'masc' && $tamanho == 'g'){

    $valor = 30 + 10;
    echo 'O valor total é de: R$' . $valor;
}
else if($genero == 'fem' && $tamanho == 'p'){

    $valor = 25 - 5;
    echo 'O valor total é de: R$' . $valor;
}

else if($genero == 'fem' && $tamanho == 'm'){

    $valor = 25 + 1;
    echo 'O valor total é de: ' . $valor;
}
else if($genero == 'fem' && $tamanho == 'g'){

    $valor = 25 + 10;
    echo 'O valor total é de: R$' . $valor;
}

else {
    echo 'Selecione um parametro correto!';
}


