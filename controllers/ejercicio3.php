<?php
if (isset($_POST['input'])) {
    parse_str($_POST['input'], $array);
    extract($array);
}

function checkCaps($string)
{
    $string = strip_tags($string);

    $string = preg_replace('/[^ña-zÑA-Z ]/s', '', $string);
    if ($string == "") {
        return "Ingresaste una cadena invalida o vacia!";
    } else {
        if ($string === strtolower($string)) {
            return chunk_split("<small><b>RESULTADO:</b></small> \"$string\" esta todo en Minusculas.", 90);
        } elseif ($string === strtoupper($string)) {
            return chunk_split("<small><b>RESULTADO:</b></small> \"$string\" esta todo en Mayusculas.", 90);
        } else {
            return chunk_split("<small><b>RESULTADO:</b></small> \"$string\" contiene letras Minusculas y Mayusculas.", 90);
        }

    }

}
echo checkCaps($input);