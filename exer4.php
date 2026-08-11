<?php
    $email = $_GET['email'];

    if(isset($_GET['noticias']) && isset($_GET['promocoes'])){
        echo 'Você receberá as notícias e promoções no email: ' . $email;
    }

    else if(isset($_GET['noticias'])){
        echo 'Você receberá as notícias no email: ' . $email;
    }

    
    else if(isset($_GET['promocoes'])){
        echo 'Você receberá as promoções no email: ' . $email;
    }

    else {
        echo 'Assinatura recusada :(';
    }
?>