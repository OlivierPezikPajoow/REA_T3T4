<?php
session_start();

// Check if user is already logged in

function login()
{
    if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {

    }
    else
    {
        header("Location: LogInPage.php");
    }
// Check if login form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
// Perform login validation
        $username = $_POST['User'];
        $password = $_POST['Pass'];

// Check if username and password match
        if ($username == 'vrijwilliger' && $password == 'I3d3rd13rt3lt') {
// Login successful, store login status in session
            $_SESSION['logged'] = true;
            $_SESSION['Username'] = $username;
            echo "Penis";
        } else {
            Header("Location: LogInPage.php");
            exit();
        }
    }
}

function logout()
{
    $_SESSION['logged'] = null;
    $_SESSION['Username'] = null;
}
?>
