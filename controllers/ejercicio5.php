<?php

if (isset($_POST['input'])) {
    parse_str($_POST['input'], $array);
    extract($array);
}
function daysBetween($date1, $date2)
{
    if ($date1 == "" or $date2 == "") {
        return "Ingresaste fechas vacias";
    } else {
        $days1 = date('z', strtotime($date1));
        $year1 = date('Y', strtotime($date1));

        $days2 = date('z', strtotime($date2));
        $year2 = date('Y', strtotime($date2));

        if ($year1 > $year2) {
            $yeardiff = ($year1 - $year2) * 365;
            if ($days1 > $days2) {
                $daysdiff = $days1 - $days2;
                $totaldiff = $yeardiff + $daysdiff;
                return "<small><b>RESULTADO:</b></small> Hay $totaldiff dias de differencia!";
            } elseif ($days1 < $days2) {
                $daysdiff = $days1 - $days2;
                $totaldiff = $yeardiff - abs($daysdiff);
                return "<small><b>RESULTADO:</b></small> Hay $totaldiff dias de differencia!";

            } else {
                return "<small><b>RESULTADO:</b></small> Hay $yeardiff dias de differencia!";
            }

        } elseif ($year1 < $year2) {
            $yeardiff = ($year2 - $year1) * 365;
            if ($days1 > $days2) {
                $daysdiff = $days1 - $days2;
                $totaldiff = $yeardiff + $daysdiff;
                return "<small><b>RESULTADO:</b></small> Hay $totaldiff dias de differencia!";
            } elseif ($days1 < $days2) {
                $daysdiff = $days1 - $days2;
                $totaldiff = $yeardiff - abs($daysdiff);
                return "<small><b>RESULTADO:</b></small> Hay $totaldiff dias de differencia!";

            } else {
                return "<small><b>RESULTADO:</b></small> Hay $yeardiff dias de differencia!";
            }

        } else {
            if ($days1 > $days2) {
                $daysdiff = $days1 - $days2;
                return "<small><b>RESULTADO:</b></small> Hay $daysdiff dias de differencia!";
            } elseif ($days1 < $days2) {
                $daysdiff = $days1 - $days2;
                $daysdiff = abs($daysdiff);
                return "<small><b>RESULTADO:</b></small> Hay $daysdiff dias de differencia!";

            } else {
                return "<small><b>RESULTADO:</b></small> Las fechas son iguales!";
            }
        }
    }
}

echo daysBetween($date1, $date2);