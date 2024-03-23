<?php 
 interface ControladorInterface {
     public function ligar();
     public function desligar();
     public static function getStatus();
     public static function setStatus($status);
     
 }