<?php
 include 'autoload.php';
 function operarDispositivo(ControlarInterface $dispositivo){
    if ($dispositivo::getStatus()){
        $dispositivo->desligar();
        return;
    }
    $dispositivo->ligar();
 }
 $tv1 = new Televisao();
 $tv2 = new Televisao();

 operarDispositivo($tv1);
 operarDispositivo($tv2);