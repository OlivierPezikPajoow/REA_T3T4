<?php
//Functions toevoegen
include("../Includes/Functions.php");

//Page variabele aanmaken
$Page = $_GET['Page'];

//Logout function runnen
Logout($Page);
exit();