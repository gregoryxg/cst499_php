<!--
9.php
Last updated: 10/19/2017
Diagnostic page for: Computer turns on but keeps shutting down diagnostic
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../resources/style.css"/>
        <title>CompUnite</title>
    </head>
    <body>
        <div class="diagnosticForm">
            Does the message say what’s wrong or why the computer is shutting down?            
            <form action="../index.php" method="post">
                <input type="radio" name="diagnostic" value="10" required>Yes<br>  
                <input type="radio" name="diagnostic" value="11" required>No<br><br>
                <input type="submit" name="submit"> 
            </form>
        </div>
    </body>
</html>