<?php

 $transporte = trim(mb_strtolower($_GET['meio']));

 if($transporte == "carro"){
    echo '<img src="https://pixabay.com/pt/images/download/futuremoon-cars-8891625_1920.jpg" alt="carro">';
 }
 elseif($transporte == "ônibus" || $transporte == "onibus"){
    echo '<img src="https://x.com/uniaodefasmem/status/1798891408528703999/photo/1" alt="onibus">';
 }
 elseif($transporte == "patins"){
    echo '<img src="https://www.traxart.com.br/cdn/shop/files/Patins-Inline-Freestyle-Traxart-Revolt-Verde-e-Preto-PERFIL_1800x1800.jpg?v=1772288255" alt="patins">';
 }
 elseif($transporte == "pe" || $transporte == "pé"){
    echo '<img src="https://doctorshoes.com.br/blog/wp-content/uploads/2017/08/5-dicas-e-cuidados-com-os-pes-que-voce-precisa-passar-a-ter27147_l8zhk.jpg" alt="pé">';
 }
 elseif($transporte == "bicicleta"){
    echo '<img src="https://images.tcdn.com.br/img/img_prod/739156/6a087f4c547d1_bannersecundario2.png" alt="bicicleta">';
 }  
 else {
    echo 'Invalido!';
 }

?>