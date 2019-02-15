<?php

if (isset($_POST['input'])) {
    parse_str($_POST['input'], $array);
    extract($array);
}

function dateFormat($date)
{
    if ($date == "") {
        return "Ingresaste una fecha vacia!";
    } else { $newDate = strftime("%d/%m/%Y", strtotime($date));
        return "<small><b>RESULTADO:</b></small> $newDate";
    }
}
echo dateFormat($input);