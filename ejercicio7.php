<?php
    header("Content-type:application/json");
    $_DATA = (object) json_decode(file_get_contents("PHP://input"));
    $_DATA->server = (string) $_SERVER['HTTP_HOST'];
    $D = (integer) null;
    $_DATA->euclides  = (int) pow(2, ($_DATA->N-1)) * (pow(2, $_DATA->N) - 1);
    $_DATA->pitagoras  = (int) (pow(pow(2, $_DATA->N) - 1, 2) + (pow(2, $_DATA->N) - 1)) /2 ;
    $_DATA->respuesta = (string) null;
    for ($i=1; $i < $_DATA->N; $i++) { 
        if($_DATA->N % $i == 0){
            $D += $i;
            $_DATA->respuesta .= $i." + ";
        } else if(($i+1) == $_DATA->N){
            $_DATA->respuesta = (string) substr($_DATA->respuesta, 0, -2);
            $_DATA->respuesta .= " = ".$D;
            if($D == $_DATA->N){
                $_DATA->respuesta .= " Si es perfecto";
            }else{
                $_DATA->respuesta .= " No es perfecto";
            }
        }
    }
    print_r(json_encode($_DATA));
?>