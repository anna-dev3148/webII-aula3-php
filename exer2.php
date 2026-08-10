<?php
$email = $_GET['email'];
$senha = $_GET['senha'];

if($email == "fulano@email.com" && $senha == "1234Thanos"){
    echo 'Seja bem-vindo!';
} else {
    echo 'Email ou senha incorretos!';
}
?>