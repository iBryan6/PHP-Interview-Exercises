<?php
// Esto le dice a PHP que usaremos cadenas UTF-8 hasta el final
mb_internal_encoding('UTF-8');

// Esto le dice a PHP que generaremos cadenas UTF-8
mb_http_output('UTF-8');

if (isset($_POST['input'])) {
    parse_str($_POST['input'], $array);
    extract($array);
}

function Palindromo($string)
{
    $string = preg_replace('/[^ña-zÑA-Z0-9 ]/s', '', strip_tags($string));
    $stringfinal = $string;
    $string = mb_strtolower(trim(str_replace(" ", "", $string)));
    $string2 = utf8_encode(implode(array_reverse(str_split(utf8_decode($string)))));
    if ($string == "") {
        return "Ingresaste una cadena invalida o vacia!";
    } else {
        if ($string2 == $string) {
            return "<small><b>RESULTADO:</b></small> $stringfinal es palindromo!";
        } else {
            return "<small><b>RESULTADO:</b></small> $stringfinal no es palindromo!";
        }
    }
}

echo Palindromo($input);