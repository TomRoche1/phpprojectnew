<?php
session_start();
$fullNameValue = "" ;
$totalValue2="" ;
$totalNumber="" ;
/*
 * Create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtNum'] = $totalNumber;
$_SESSION['txtTotal']= $totalValue2 ;
/**
 * Allocate the mobile number session variable to a text
 */
?>
<!DOCTYPE html>
<html>
    <head>
    <title>eBusiness 2</title>
    <style>
            input[type=text], select {
          width: 100%;
          padding: 10px 10px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
        }
    </style>
    </head>
    <body style="background-image:url(https://backgroundcheckall.com/wp-content/uploads/2017/12/professional-background-images-for-websites-3.jpg);">
        <div class ="form">
            <form name ="Details" method ="post" action= "Ebus3.php">
                <center>
                    <h1>Payment Details</h1>
                    <table cellspacing ="10">
                        <tr>
                            <td></td>
                            <td><b>Enter in your details below</b></td>
                            <td></td>
                        </tr>
                        <tr>
                             <td>Name:</td>
                             <td><input type="text" id="txtName" name="txtName" placeholder="Your Full Name.."/> </td>
                        </tr>
                         <tr>
                             <td>Phone Number:</td>
                             <td><input type="text" id="txtNum" name="txtNum" placeholder="Your Phone Number.."/> </td>
                        </tr>
                        <tr>
                             <td>Password:</td>
                             <td><input type="text" id="txtPassword" name="txtPassword" placeholder="Your Password.."/> </td>
                        </tr>
                        <tr>
                             <td><input type="Hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"/> </td>
                        </tr>
                    </table>
             </center>
                <center>  
                <input style="background-color: #4d9c2c; padding: 7px; color: white; cursor: pointer; margin: 8px 0; border-radius: 4px; width: 70px;" type="submit" name ="btnContinue" id="btnContinue" onclick="" value="Continue"/>
                </center>
            </div>
            </form>
    </body>
</html>
