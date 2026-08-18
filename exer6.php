<?php
$genero = $_GET['genero'];
$tamanho = $_GET['tamanho'];
$qtd = $_GET['qtd'];

$valor;

if($genero == 'masc' && $tamanho == 'p'){
    $valor = ((30 - 5) * $qtd);
    echo 'O valor total é de: R$' . $valor;
}

else if($genero == 'masc' && $tamanho == 'm'){
    $valor = ((30 + 1) * $qtd);
    echo 'O valor total é de: R$' . $valor;
}

else if($genero == 'masc' && $tamanho == 'g'){

    $valor = ((30 + 10) * $qtd);
    echo 'O valor total é de: R$' . $valor;
}
else if($genero == 'fem' && $tamanho == 'p'){

    $valor = ((25 - 5) * $qtd);
    echo 'O valor total é de: R$' . $valor;
}

else if($genero == 'fem' && $tamanho == 'm'){

    $valor = ((25 + 1) * $qtd);
    echo 'O valor total é de: ' . $valor;
}
else if($genero == 'fem' && $tamanho == 'g'){

    $valor = ((25 + 10) * $qtd);
    echo 'O valor total é de: R$' . $valor;
}


else {
    echo 'Selecione um parametro correto!';
}
?>