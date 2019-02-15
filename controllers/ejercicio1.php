<?php

if (isset($_POST['input'])) {
    parse_str($_POST['input'], $array);
    extract($array);
}

function numPrimos($num)
{
    $num = trim($num);
    $num = strip_tags($num);
    $num = preg_replace('/[^0-9]/s', '', $num);

    if ($num == "") {
        return "Ingresaste una cadena invalida o vacia!";
    } else {
        if (preg_match('/\D/', $num) == 1) {
            return "<small><b>RESULTADO:</b></small> Solo numeros enteros positivos pueden ser primos o compuestos. Usted ingreso \"$num\", ingrese un numero entero positivo valido!";
        }
        if ($num == 0 or $num == 1) {
            $num += 0;
            return "<small><b>RESULTADO:</b></small> $num es un <b>numero Especial</b>, no es Primo ni Compuesto.";
        } else {
            for ($i = 2; $i < $num; $i++) {
                if ($num % $i == 0) {
                    return "<small><b>RESULTADO:</b></small> <b>$num</b> pueder ser divido por <b>$i</b> lo cual es un numero Compuesto.";
                }
            }
            return "<small><b>RESULTADO:</b></small> $num es un numero <b>Primo</b>!!";
        }
    }
}
echo numPrimos($input);