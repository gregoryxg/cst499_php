<!DOCTYPE html>
<!--
diagnosticShutDown.php
Last Updated: 10/19/2017
Repair recommendation page for: Recommendation when computer keeps shutting down and there aren't any error messages
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../../resources/style.css">
        <title></title>
    </head>
    <body>
        <div class="repairPage">
            The issue could be hardware or software related. 
            <br>We recommend a full diagnostic. Repairs could range from a simple software fix, 
            <br>to virus removal, to operating system re-installation or hardware replacement.
            <br><br>Click <a href="http://www.fonerbooks.com/replace.htm">here</a> for more information or watch the video below.
            <br><br>
            <div style="text-align: center">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/tWIxoi3HMtU" frameborder="0" allowfullscreen></iframe>
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