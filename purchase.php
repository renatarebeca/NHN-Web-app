<?php
include_once('inc/head.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Purchase Membership</title>
        <style>
            #bookbutton {
                position: absolute;
                top: 230px;
                margin-left: 65%;
                margin-right: 25%;
                background-color: #17a74a;
                padding: 0.8em;
                border-radius: 10px;


            }
            .back{
                margin-left: 10px;
                position: fixed;
                bottom: 10;
                width: 13%;
                height: auto;
            }
            select > option {
                color: white; 
            }
            select{
                background-color: #17a74a;
                color: white;
            }

        </style>
    </head>
    <body>
        <div><h3 style="color:#3b6035;margin-top:80px; text-align:center; margin-bottom:20;">AVAILABLE MEMBERSHIPS</h3></div>

        <div style="background-color: #d5f3d3; padding: 0.5em;">
            <h3 style='color: #3b6035; font-style: italic bold;' class="crsname">------- POOL ----------------------------</h3>
            <div style="margin-left: 30px;">
                <p style="color: #3b6135;"> PURCHASE FOR </p>
                <select id="myselect" style="margin-left: 20px;" class="months">
                    <option id="valueOne" value="500kr">1</option>
                    <option value="1000kr">2</option>
                    <option value="1500kr">3</option>
                    <option value="2000kr">4</option>
                    <option value="2500kr">5</option>
                    <option value="3000kr">6</option>
                </select>
                <p style="color: #3b6135; position: absolute; top: 220px; left: 26%;"> MONTHS</p>
                <p style="margin-top: 10px;font-size: 0.9em; margin-left: 40px;">FOR <b> 525 kr.</b><script> if </script></p>
                <button id="bookbutton" style="color: white;" type="button" class="btn btn-md" data-toggle="modal" data-target="#myModal1">BUY</button>
            </div>
        </div>



        <div> 
            <div class="divback"> <a href="membership.php"><img class="back" src="images/back.png" alt="back button"></a> </div>
        </div>


        <script> 
            $(document).ready(function(){
                $("#valueOne").click(function(){
                    $("500kr").show();
                })
            };)
        </script>
    </body>
</html>
