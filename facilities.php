<?php
include_once('inc/head.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Facilities</title>
        <style>





            .container img{
                width: 65%;
                height: auto;
            }

            @media all and (max-width: 857px){
                .container{
                    margin-top: 50px;
                }

                .back{
                    margin-left: 10px;
                    position: fixed;
                    bottom: 10;
                    width: 13%;
                    height: auto;
                }
                .col-md-5{
                    padding-left: 0;
                    padding-right: 0;
                }
            }

            @media all and (min-width: 857px){
                .container{
                    left: 5%;
                    right: 5%;
                }
            }

        </style>
    </head>

    <body>
        <div><h3 style="color:#3b6035;margin-top:80px; text-align:center; margin-bottom:0;">FACILITIES</h3></div>
        <div style="margin-top:30px;" class="container col-md-12">
            <div class="col-xs-6 col-sm-5 col-md-5 col-lg-5 ">
                <a href="courses.php"><img style="margin-bottom:25px;" src="images/courses.png" alt="courses"></a>
                <a id="bookbutton" type="button" class="btn" data-toggle="modal" data-target="#myModal2" style="border-left-width: 0px;padding-right: 0px;padding-left: 0px;padding-top: 0px;padding-bottom: 0px;"><img style="margin-bottom:25px;" src="images/pool.png" alt="pool"></a>
                <a href="sport.php"><img src="images/sportfields.png" alt="sport"></a>
            </div>
            <div class="col-xs-6 col-sm-5 col-md-5 col-lg-5 ">
                <a id="bookbutton" type="button" class="btn" data-toggle="modal" data-target="#myModal1" style="border-left-width: 0px;padding-right: 0px;padding-left: 0px;padding-top: 0px;padding-bottom: 0px;"><img style="margin-bottom:25px;" src="images/gym.png" alt="gym"></a>
                <a href="spa.php"><img style="margin-bottom:25px;" src="images/spa.png" alt="spa"></a>
                <a href="events.php"><img src="images/events.png" alt="events"></a>

            </div>
        </div>
        <div> <a href="admin.php"><img class="back" src="images/back.png" alt="back button"></a> </div>
        
        
    <div id="myModal1" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-sm" style="margin-top: 200px; margin-left: 40px; margin-right: 40px;">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 style='font-weight: bold;' class="modal-title">NHN GYM</h4>
                            </div>
                            <div style=" display: grid;" class="modal-footer">
                                 <button style=" color: #fff; background-color: #3b6035;" type="button" class="btn " data-dismiss="modal">BUY ONE TIME TICKET</button> <br>
                                <button style=" color: #fff; background-color: #3b6035;" type="button" class="btn " data-dismiss="modal">BUY MEMBERSHIP</button><br>
                                <button style="border: 1px solid #658163; color: #3b6035; background-color: #fff; " type="button" class="btn " data-dismiss="modal">CANCEL</button>
                            </div>
                        </div>

                    </div>
                </div>
        <div id="myModal2" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-sm" style="margin-top: 200px; margin-left: 40px; margin-right: 40px;">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 style='font-weight: bold;' class="modal-title">SWIMMING POOL</h4>
                            </div>
                            <div style=" display: grid;" class="modal-footer">
                                 <button style=" color: #fff; background-color: #3b6035;" type="button" class="btn " data-dismiss="modal">BUY ONE TIME TICKET</button> <br>
                                <button style=" color: #fff; background-color: #3b6035;" type="button" class="btn " data-dismiss="modal">BUY MEMBERSHIP</button><br>
                                <button style="border: 1px solid #658163; color: #3b6035; background-color: #fff; " type="button" class="btn " data-dismiss="modal">CANCEL</button>
                            </div>
                        </div>

                    </div>
                </div>
        
    </body>
</html>
