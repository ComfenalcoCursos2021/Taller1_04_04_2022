<?php
    header("Content-type:application/json");
    $_DATA = (object) json_decode(file_get_contents("PHP://input"));
    $_DATA->server = (string) $_SERVER['HTTP_HOST'];
    $_DATA->respuesta = (string) "La suma de los numeros es : ".($_DATA->num1 + $_DATA->num2);
    print_r(json_encode($_DATA));
?>