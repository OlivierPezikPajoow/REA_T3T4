<?php
session_start();

$_SESSION["Username"] = "Olivier"; //kan op andere pagina's gevonden worden

echo $_SESSION["Username"];