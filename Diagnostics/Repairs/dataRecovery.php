<!DOCTYPE html>
<!--
dataRecovery.php
Last Updated: 10/19/2017
Repair recommendation page for: When user wants to see recommendations for data recovery without going through the CompUnite diagnostic process
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../../resources/style.css">
        <title></title>
    </head>
    <body>
        <div class="repairPage">
            Based on your responses, we recommend a professional recover/backup your data (pictures, music, documents, etc.).
            <br><br>Click <a href="https://support.microsoft.com/en-us/help/17127/windows-back-up-restore">here</a> for more information or watch the video below.
            <br><br>
            <div style="text-align: center">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/rtPrM3-k0jQ" frameborder="0" allowfullscreen></iframe>
            </div>
            <?php
            require("../../dbConn/dbConn.php");
            include '../../resources/getServiceProviders.php';
            session_start();
            getServiceProviders($_SESSION['zip'], "DataRecovery", $conn, 'RepairTable', 'RepairHeader', 'RepairTd');
           
            $conn = null;
            ?>
        </div>
    </body>
</html>
