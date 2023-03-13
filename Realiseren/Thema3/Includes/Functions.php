<?php


function CheckTrafficLight($color, $ambulance)
{
if ($ambulance == false)
{
    if ($color == "Green")
    {
        echo "<p>Je mag rijden</p>";
    }
    else
    {
        echo "<p>Je moet stoppen</p>";
    }
}
elseif ($ambulance == true)
{
    echo "<p>Je moet stoppen</p>";
}
}

function ShowMenu($dag)
{
    switch ($dag)
    {
        case"Maandag";
            echo "<p>Lasagna</p>";
            break;
        case"Dinsdag";
            echo "<p>Spinazie</p>";
            break;
        case"Woensdag";
            echo "<p>Kaassouffle</p>";
            break;
        case"Donderdag";
            echo "<p>Andijvie stampot</p>";
            break;
        case"Vrijdag";
            echo "<p>Pizza</p>";
            break;
        case"Zaterdag";
            echo "<p>Hamburger</p>";
            break;
        case"Zondag";
            echo "<p>McDonalds</p>";
            break;
        default;
            echo "<p>Broodje ei</p>";
            break;
    }
}

function SecondCoounter()
{

}

