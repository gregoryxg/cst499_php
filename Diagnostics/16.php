<!--
16.php
Last updated: 10/19/2017
Diagnostic page for: Computer turns on but can't use it diagnostic
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../resources/style.css"/>
        <title>CompUnite</title>
    </head>
    <body>
        <div class="diagnosticForm">
            Is this the first time this has happened?         
            <form action="../index.php" method="post">
                <input type="radio" name="diagnostic" value="repairs/virusRemovalClosePopup" required>Yes<br>  
                <input type="radio" name="diagnostic" value="17" required>No<br><br>
                <input type="submit" name="submit"> 
            </form>
        </div>
    </body>
</html>