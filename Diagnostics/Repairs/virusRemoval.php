<!DOCTYPE html>
<!--
virusRemoval.php
Last Updated: 10/19/2017
Repair recommendation page for: Virus removal recommendation when user knows their computer is infected and just wants to see recommendations
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../../resources/style.css">
        <title></title>
    </head>
    <body>
        <div class="repairPage">
            Based on your responses, we recommend a virus removal / tune-up service.
            <br><br>Click <a href="https://www.howtogeek.com/126911/what-to-do-if-you-get-a-virus-on-your-computer/">here</a> for more information or watch the video below.
            <br><br>
            <div style="text-align: center">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/J66pjLEaMWk" frameborder="0" allowfullscreen></iframe>
            </div>            
            <?php
            require("../../dbConn/dbConn.php");
            include '../../resources/getServiceProviders.php';
            
           
            
            session_start();
            getServiceProviders($_SESSION['zip'], "VirusRemoval", $conn, 'RepairTable', 'RepairHeader', 'RepairTd');
           
            $conn = null;
            ?>
        </div>
    </body>
</html>
