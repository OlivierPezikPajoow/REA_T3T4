<?php

function CalcAbbo ($cost, $deposit, $monthly)
{
    $abbo = 20;
//    Toestelprijs - eenmalige bijdragen
    $cost = $cost - $deposit;
//    Het maandbedrag wat overblijft voor het aflossen van je telefoon
    $monthly = $monthly - $abbo;

    $counter = 0;
    while  ($cost > 0 and $monthly > 0)
    {
        if ($cost/$monthly > 24)
        {
            echo "Helaas, u doet er langer over dan 24 maanden.";
            break;
        }
        $counter++;
        $cost = $cost-$monthly;
        if ($cost <0)
        {
            $cost = 0;
        }
        echo "Na ". $counter. " maand(en) moet ik nog ".$cost." afbetalen.<br>";
    }
}

CalcAbbo(1200, 150, 60);