<!--
index.php
10/19/17
CompUnite index page which displays home, diagnostic pages, and the registration page.
-->
<?php

session_start();
include ("resources/setBody.php");
require 'C:\xampp\htdocs\CompUnite\dbConn\dbConn.php';
    
    if (isset($_POST['diagnostic']))
    {
        //Gets diagnostic page and displays in the iframe
        $diagnostic = filter_input(INPUT_POST, 'diagnostic');
        header("location: diagnostics/".$diagnostic.".php");
    }
    else
    {
        //Checks if user is logged in and sets  up the body of the home page
        $loginBool = false;
        if (isset($_SESSION['id']))
            $loginBool = true;
        setBody($loginBool);   
        
    }            
?>