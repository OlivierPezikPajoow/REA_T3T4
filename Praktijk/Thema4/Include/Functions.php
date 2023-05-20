<?php
if (isset($_POST["User"]) == true and isset($_POST["Pass"]) == true)
{
    $triedUser = $_POST["User"];
    $triedPass = $_POST["Pass"];
}

else
{
    $triedUser = false;
    $triedPass = false;
}


$username = "Administrator";
$password = "1234Test";
$loggedIn = false;

?>