<?php
if (isset($_POST['input'])) {
    parse_str($_POST['input'], $array);
    extract($array);
}

function factorial($num)
{
    $num = strip_tags($num);

    if ($num == "") {
        return "Ingresaste una cadena invalida o vacia!";
    } elseif ($num == 0) {
        return "<small><b>RESULTADO:</b></small> El factorial de $num es 1.";
    } else {
        if (preg_match('/\D/', $num) == 1) {
            return "Ingrese un numero entero positivo valido. Usted ingreso \"$num\"!";
        } else {
            $fact = 1;
            $factNum = $num;
            do {
                if ($fact == 1) {
                    $fact = $fact * $num;
                    $num--;
                } else {
                    echo $fact . " * " . $num . " = ";
                    $fact = $fact * $num;
                    $num--;
                    echo $fact;
                    echo "</br>";
                }
            } while ($num > 0);
            echo "</br><small><b>RESULTADO:</b></small> Factorial de $factNum! es: $fact";
        }
    }
}

echo factorial($input);