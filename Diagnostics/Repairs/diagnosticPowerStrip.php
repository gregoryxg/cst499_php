<!DOCTYPE html>
<!--
diagnosticPowerStrip.php
Last Updated: 10/19/2017
Repair recommendation page for: When computer won't turn on, and it was plugged into a power strip/bar
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../../resources/style.css">
        <title></title>
    </head>
    <body>
        <div class="repairPage">
            The power supply may have gone out, or motherboard may not be getting power
            <br>Recommend full diagnostic, and replacing the inoperable part.
            <br><br>Click <a href="http://www.fonerbooks.com/replace.htm">here</a> for more information or watch the video below.
            <br><br>
            <div style="text-align: center">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/EJJHYfVzo-4" frameborder="0" allowfullscreen></iframe>
            </div>            
            <?php
            require("../../dbConn/dbConn.php");
            include '../../resources/getServiceProviders.php';
            session_start();
            getServiceProviders($_SESSION['zip'], "Diagnostic", $conn, 'RepairTable', 'RepairHeader', 'RepairTd');
           
            $conn = null;
            ?>
        </div>
    </body>
</html>