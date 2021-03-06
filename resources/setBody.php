<!--
setBody.php
10/19/17
Function that determines which page to display depending if the user is logged in or not.

-->
<?php

function setBody ($loginBool)
{
    //Sets up logo and motto in the top header
    echo " 
        <html>
            <head>
                <meta charset=\"UTF-8\">
                <title>CompUnite</title>
                <link rel=\"stylesheet\" type=\"text/css\" href=\"resources/style.css\">
            </head>
            <body>                
                <div class=\"wrapper\">
                        <div class=\"header\">
                            <div class=\"logo\">
                                <img src=\"img/compuniteLOGO.jpg\" height=\"100%\"/>
                            </div>
                            <div class=\"title\">
                                <h1>\"In the know about your computer woes\"</h1>
                            </div>                                    
                        </div>";
                //If not logged in show inputs for username and password
                if (!$loginBool)
                {
                    echo "
                            <div class=\"login\">
                            <form action=\"resources/dblogin.php\" method=\"POST\">
                                <input type=\"text\" name=\"user\" placeholder=\"Email/Username\">
                                <input type=\"password\" name=\"password\" placeholder=\"password\">
                                <button type=\"submit\" name=\"signin\" >Sign In</button>
                            </form></div>  ";
                }   
                
                    echo "    
                        <div class=\"menu\">
                            <a href=\"index.php\"target=\"_parent\">
                                <button class=\"menuButtons\" >Home</button>
                            </a>
                            <a href=\"diagnostics/1.php\"target=\"mainframe\">
                                <button class=\"menuButtons\" >Start Diagnostic</button>
                            </a>";
                //If not logged in show registration button    
                if (!$loginBool)
                {
                    echo "                     
                             
                            <a href=\"register.php\"target=\"mainframe\">
                                <button class=\"menuButtons\" >Register</button>
                            </a>                           
                    ";
                }
                else
                {
                    echo "                            
                            <a href=\"resources/logout.php\">
                                <button class=\"menuButtons\" >Logout</button>
                            </a>                           
                    ";
                }
                            
                echo "</div> ";
                
                //Error handling for registration
                if(isset($_GET['register']))
                {
                    echo "Registration Successful!";
                }
                else if(isset($_GET['userExist']))
                {
                    echo 'Username is taken';
                }
                else if(isset($_GET['invalidEmail']))
                {
                    echo "Invalid email! Please try to register again.";
                }
                else if (isset($_GET['dbFail']))
                {
                    echo 'Unable to process request';
                }
                echo "    
                      
                        <br><iframe src=\"home.php\" class=\"mainframe\" name=\"mainframe\"></iframe>                        
                    </div>
                </body>
            </html>";
    }            
?>