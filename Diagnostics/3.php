<!--
3.php
Last updated: 10/19/2017
Diagnostic page for: Computer won't turn on diagnostic
--><html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../resources/style.css"/>
        <title>CompUnite</title>
    </head>
    <body>
        <div class="diagnosticForm">
            Have you tried unplugging it and verifying the power socket works (tried plugging in another device)?            
            <form action="../index.php" method="post">
                <input type="radio" name="diagnostic" value="problemSolved" required>That solved my problem<br>  
                <input type="radio" name="diagnostic" value="4" required>I'm still having issues<br><br>
                <input type="submit" name="submit"> 
            </form>
        </div>
    </body>
</html>