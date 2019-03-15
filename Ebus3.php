<!DOCTYPE html>
<html>
    <head>
        <title>eBusiness 3</title>
        <style>
            body {
                text-align: center;
                font-size: 18px;
            }
        </style>
    </head>
    <body style="background-image:url(https://backgroundcheckall.com/wp-content/uploads/2017/12/professional-background-images-for-websites-3.jpg);">
        <h1>Receipt</h1>    
    <!-- //Starting the session to get the session variable from last page-->
    <br />
            <?php

            session_start () ;
            $totalValue2 = $_POST ['txtTotal'];
            $totalNumber = $_POST ['txtNum'];
            $fullNameValue = $_POST ['txtName'];
            echo "Name: ".$fullNameValue;
            echo "<br></br>";
            echo "Phone Number: ".$totalNumber;
            echo "<br></br>";
            echo "Total Price: "."€".$totalValue2;
            ?>
    <br />
    <br />
    <form method="get" action="ConsultingServicesHome.html"><button style="background-color: #4d9c2c; padding: 7px; color: white; cursor: pointer; margin: 8px 0; border-radius: 4px; width: 150px;" type="submit" class="button button">Consulting Services</button></form>
    </body>
</html>

