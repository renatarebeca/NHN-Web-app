<?php   
include_once("inc/db.php");

$title = "Register";

include_once("inc/head.php");
?>

<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <style>
            body{
                background-color: #8FC989;
            }
            .reg{
                color: #fff;
                margin-top: 5%;
                margin-bottom: 5%;
            }
            #formfield{
                border: 1px solid #658162;
            }
            form label{
                margin-bottom: 0px;
                font-weight: normal;
            }
        </style>
    </head>

    <body>
        <div><img style="height:7%; width:auto; margin-top: 0; top: 15px;;overflow: hidden;position:fixed; " class="nhnlogo" src="./images/nhnlogo.png"></div>
 
        <div style="margin-top:20%; border-top: 1px solid #658162;"> 
        <form  style="margin-left:10%; margin-right:10%;" action="inc/register.php" method="post" enctype="multipart/form-data">
            <h3 style=" color:#3b6035;" class="reg">Please, register!</h3>
            <div><label style="color:#fff; ">First Name:</label>
                <br>
                <input id="formfield" type="text" name="first_name" required>
            </div>
            <br>
            <div><label style="color:#fff;">Last name:</label>
                <br>
                <input id="formfield" type="text" name="last_name" required>
            </div>
            <br>
            <div ><label style="color:#fff;">Email:</label>
                <br>
                <input id="formfield" type="text" name="email" required>
            </div>
            <br>
            <div><label style="color:#fff;">Password:</label>
                <br>
                <input id="formfield" type="password" name="pw" required>
            </div>
            <br>
            <div ><label style="color:#fff;">Profile Image:</label>
                <br>
                <input type="file" name="myimage">
            </div>
            <br>

            <input style="color:#fff; background:#369636; border: 1px solid #658162; border-radius: 5px; padding-top:6px; padding-bottom:6px; padding-left:6px;" id="formfield2" type="submit" value="REGISTER">
        </form>
            <h3 style="margin-top:10px;padding-top:10px; font-size:20px; text-align:center;color:#3b6035; border-top: 1px solid #658162;"> Already have an account? <br> Log in <a style="color:#fff; text-decoration:underline;" class="special" href="index.php">HERE</a></h3>
            </div>

    </body>
</html>