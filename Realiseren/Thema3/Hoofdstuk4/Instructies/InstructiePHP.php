<?php

function CompCheck($computerBrand)
{
    if ($computerBrand == "Lenovo")
    {
        echo "Schijt computer";
    }
    elseif ($computerBrand == "Asus")
    {
        echo "Beter dan Lenovo";
    }

    switch ($computerBrand)
    {
        case "HP";
            echo "Super goede laptop!";
            break;
        case "Asus";
            echo "Een prima laptop";
            break;
        default;
            echo "Lol loser";
    }

}

function CanDrive($age, $license)
{
    if ($age >= 18 and $license == true)
    {
        echo "Mag rijden";
    }
    else
    {
        echo "Mag niet rijden";
    }

}

CanDrive(18, true);