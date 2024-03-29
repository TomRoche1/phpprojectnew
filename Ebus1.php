<!--Creating a session variable and assigning it to txtTotal -->
<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>
<!DOCTYPE html>
<html lang="en" xmins="https.//www.w3.org/1999/xhtml"
    <head>
          <meta charset="utf-8" />
          <title>eBusiness 1</title>
          <link rel="stylesheet" href="style.css" type="text/css" />
          <style>
                body {
                    font-family: Arial;
                }
                input[type=text], select {
                    width: 100%;
                    padding: 6px 6px;
                    margin: 8px 0;
                    display: inline-block;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    box-sizing: border-box;
                }
          </style>
    </head>
   
    <body style="background-image:url(https://backgroundcheckall.com/wp-content/uploads/2017/12/professional-background-images-for-websites-3.jpg);">
   
        <div class="form">
            <form name="intCalc" method="post" action="Ebus2.php">
                <center>
                  <h1>Shop Calculator</h1>
                  <h2><b>Select a Consulting Service</b></h2>

                    <table cellspacing="5">
                         <tr>
                            <td><input type="radio" id="Blockchain" name="rdoGroup" value="1000" /></td>
                            <td>Blockchain @ €1000</td>
                        </tr>
                        <tr>
                            <td><input type="radio" id="Autonomous" name="rdoGroup" value="2000" /></td>
                            <td>Autonomous Things (Robots) @ €2000</td>
                        </tr>
                        <tr>
                            <td><input type="radio" id="Immersive" name="rdoGroup" value="3000" /></td>
                            <td>Immersive Experience @ €3000</td>
                        </tr>
                    </table>
                </center>
                <br />
               
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td>Sub Total</td>
                            <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Discount @ 10%</td>
                            <td><input type="text" id="txtDisc" name="txtDisc" readonly /></td>
                        </tr>
                        <tr>
                            <td>( − Discount)</td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td>+ VAT @ 20%</td>
                            <td><input type="text" id="txtVat" name="txtVat" readonly /></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly /></td>
                        </tr>
                        <tr>
                            <td>( − Discount, + VAT)</td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                    </table>
                </center>
                <center>
                    <input style="background-color: #e0c828; padding: 7px; cursor: pointer; margin: 8px 0; border-radius: 4px;" type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate Amount" />
                    <input style="background-color: transparent; border-color: black; cursor: pointer; padding: 7px; margin: 8px 0; border-radius: 4px;" type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear Choice" />
                    <input style="background-color: #4d9c2c; padding: 7px; color: white; cursor: pointer; margin: 8px 0; border-radius: 4px;" type="submit" name="btnAdd" id="btnAdd" onclick="" value="Add to Shopping Cart" />
                </center>
            </form>
        </div>
       
        <script type="text/javascript">
            function calcSub() {
                //Assigning variables to the values
                var subAmount = parseFloat(document.getElementById('txtSubTot').value);
                var Blockchain = parseFloat(document.getElementById('Blockchain').value);
                var Autonomous = parseFloat(document.getElementById('Autonomous').value);
                var Immersive = parseFloat(document.getElementById('Immersive').value);
               
                //If radio buttons are clicked, values are assigned
                if (document.getElementById('Blockchain').checked) {
                    document.intCalc.txtSubTot.value = Blockchain;
                    subAmount = Blockchain;
                    calculation(subAmount);
                }
                else if (document.getElementById('Autonomous').checked) {
                    document.intCalc.txtSubTot.value = Autonomous;
                    subAmount = Autonomous;
                    calculation(subAmount);
            }
            else if (document.getElementById('Immersive').checked) {
                    document.intCalc.txtSubTot.value = Immersive;
                    subAmount = Immersive;
                    calculation(subAmount);
                }
            }
           
            //Function for calculating  the values
            function calculation(parmSTotal) {
                var subTotal = parseFloat(parmSTotal);
                var discCalc = parseFloat(subTotal * .10);
                var vatCalc = parseFloat(subTotal * .20);
                var total = parseFloat(subTotal - discCalc + vatCalc);
               
                //Inserting them into the correct fields
                document.intCalc.txtDisc.value = discCalc;
                document.intCalc.txtVat.value = vatCalc;
                document.intCalc.txtTotal.value = total;
            }
           
            function AmountClear() {
                document.getElementById('txtSubTot').value ="";
                document.getElementById('txtDisc').value ="";
                document.getElementById('txtVat').value ="";
                document.getElementById('txtTotal').value ="";
            }
        </script>
        <br />
        <center><form method="get" action="ConsultingServicesHome.html"><button style=" background-color:#d43333; cursor: pointer; font-size: 17px; padding: 6px; border-radius: 4px;" type="submit" class="button button">Back to Consulting Services</button></form></center>
    </body>
</html>
