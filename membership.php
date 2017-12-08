<?php
include_once('inc/head.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Memberships</title>
        <style>
            .show{
                display: block;
            }
            .back{
                        margin-left: 10px;
                        position: fixed;
                        bottom: 10;
                        width: 13%;
                        height: auto;
                    }
        </style>
    </head>

    <body>
        <div><h3 style="color:#3b6035;margin-top:80px; text-align:center; margin-bottom:0;">MEMBERSHIPS</h3></div>

        <div style="margin-top: 30px; padding-bottom: 30px; background-color: #d5f3d3;">
            <h3 style='padding-top: 5px; padding-bottom:5px;text-align:center;color: #3b6035; font-style: italic bold;'>NHN GYM <a id="myA" class="special" href="#renew"> <img style="height: 5%; width: auto;" src="images/pen.png" alt="pen icon"></a></h3>

            <div> <a href="renew.php"> <img id="Renew" style="display: none; left: 160px;top: 170px;position: absolute; height: 15%; width: auto;" src="images/renew.png" alt="renew button"> </a></div>

            <div>
                <img style="height: 45%; width: auto; display: block; margin-left: auto; margin-right: auto;" src="images/code.png" alt="QR CODE"> 
            </div>

        </div>




        <div> 
        <div class="divback"> <a href="admin.php"><img class="back" src="images/back.png" alt="back button"></a> </div>
        <div> <a href="purchase.php"> <img style="margin-left: 100px; position: fixed; bottom: 10; width:auto; height: 6%;" src="images/purchase.png" alt="purchase button"> </a> </div>
        </div>
        <script> 

            document.getElementById("myA").onclick = function(){myFunction()} ;

            function myFunction(){
                document.getElementById("Renew").classList.toggle("show");
            }
        </script>
    </body>
</html>
