<!--
15.php
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
            Describe the issue:
            <form action="../index.php" method="post">
                <input type="radio" name="diagnostic" value="16" required>Pop-ups when browsing the Internet<br>  
                <input type="radio" name="diagnostic" value="repairs/virusRemoval" required>Pop-ups randomly when using the computer (not just when using Internet)<br>
                <input type="radio" name="diagnostic" value="repairs/diagnosticOther" required>Some programs won’t open and/or have degraded performance<br><br>
                <input type="submit" name="submit"> 
            </form>
        </div>
    </body>
</html>