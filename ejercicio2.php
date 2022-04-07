<?php
    header("Content-type:application/json");
    $_DATA = (object) json_decode(file_get_contents("PHP://input"));
    $_DATA->server = (string) $_SERVER['HTTP_HOST'];
    $_DATA->respuesta = (string) null;
    $cont = (int) null;
    for ($i=0; $i < strlen($_DATA->cadena); $i++) { 
        if(is_numeric($_DATA->cadena[$i])){
            $_DATA->respuesta .= $_DATA->cadena[$i].", ";
            $cont++;
        }
    }
    $_DATA->respuesta = (string) "La cantidad de numeros encontrados son ".$cont." Lista de numeros : '".$_DATA->respuesta."'";
    print_r(json_encode($_DATA));
?>