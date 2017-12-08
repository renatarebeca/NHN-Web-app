<?php
include_once('inc/head.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Courses</title>
        <style>
            body{
                overflow-x: hidden;
            }
            .container img{
                width: 65%;
                height: auto;
            }
            .modal-footer {
                padding: 15px;
                text-align: center;
            }
            
            .modal-content{
                width: 100%;
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
                    .divback{
                        width: 100%;
                        background-color: #fff;
                        position: fixed;
                        bottom: 10;
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




                .firstbox {
                    display: inline-block;
                    padding-left: 3.5em;
                    width: 65%;
                    vertical-align: top;
                }

                .secondbox {
                    display: inline-block;
                    width: 30%;
                    text-align: center;
                    align-content: center;
                    vertical-align: top;
                    padding-top: 1.5em;

                }

                .time {
                    font-size: 1.1em;
                    margin-top: 0.5em;
                }

                .placeleft {
                    font-size: 1.3em;

                }
                .infotext {
                    font-size: 0.8em;
                }
                #bookbutton {
                    margin-left: 25%;
                    margin-right: 25%;
                    background-color: #3b6035;
                    padding: 0.8em;
                    border-radius: 10px;


                }


        </style>

    </head>

    <body>
        <div><h3 style="color:#3b6035;margin-top: 70px; text-align:center; margin-bottom: 20px;">COURSES</h3></div>



        <div style="background-color: #d5f3d3; padding: 0.5em;">
            <h3 style='color: #3b6035; font-style: italic bold;' class="crsname">-------- NUTRITION ----------</h3>

            <div class="firstbox">
                <p style='color: #3b6035;' class="time">CLASS FROM 17:30PM TO 19:00PM</p>
                <p style='color: #3b6035; font-style: bold;' class="placeleft">4 PLACES LEFT</p></div>
            <div class="secondbox">
                <p style='color: #3b6035;' class="infotext">MORE INFO ON OUR WEBSITE</p>
                <button id="bookbutton" style="color: white;" type="button" class="btn btn-md" data-toggle="modal" data-target="#myModal1">BOOK</button>

                <!-- Modal -->
                <div id="myModal1" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-sm" style="margin-top: 200px; margin-left: 40px; margin-right: 40px;">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 style='font-weight: bold;' class="modal-title">Are you sure you want to book a ticket to this course?</h4>
                            </div>
                            <div class="modal-body">
                                <p>This will cost you <b>0.00kr.</b></p>
                            </div>
                            <div class="modal-footer">
                                <button style="border: 1px solid #658163; color: #3b6035; background-color: #fff; " type="button" class="btn " data-dismiss="modal">Cancel</button>
                                <button style=" color: #fff; background-color: #3b6035;" type="button" class="btn " data-dismiss="modal">BOOK</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div style="background-color: white; padding: 0.5em;">
            <h3 style='color: #3b6035; font-style: italic bold;' class="crsname">--- HEALTHY POSTURE ---</h3>

            <div class="firstbox">
                <p style='color: #3b6035;' class="time">CLASS FROM 17:00PM TO 18:00PM</p>
                <p style='color: #3b6035; font-style: bold;' class="placeleft">3 PLACES LEFT</p></div>
            <div class="secondbox">
                <p style='color: #3b6035;' class="infotext">MORE INFO ON OUR WEBSITE</p>

                <button id="bookbutton" style="color: white;" type="button" class="btn btn-md" data-toggle="modal" data-target="#myModal2">BOOK</button>

                <!-- Modal -->
                <div id="myModal2" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-sm" style="margin-top: 200px; margin-left: 40px; margin-right: 40px;">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 style='font-weight: bold;' class="modal-title">Are you sure you want to book a ticket to this course?</h4>
                            </div>
                            <div class="modal-body">
                                <p>This will cost you <b>20.00kr.</b></p>
                            </div>
                            <div class="modal-footer">
                                <button style="border: 1px solid #658163; color: #3b6035; background-color: #fff; " type="button" class="btn " data-dismiss="modal">Cancel</button>
                                <button style=" color: #fff; background-color: #3b6035;" type="button" class="btn " data-dismiss="modal">BOOK</button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div style="background-color: #d5f3d3; padding: 0.5em;">
            <h3 style='color: #3b6035; font-style: italic bold;' class="crsname">---------- FIRST AID ----------</h3>

            <div class="firstbox">
                <p style='color: #3b6035;' class="time">CLASS FROM 18:00PM TO 20:00PM</p>
                <p style='color: #3b6035; font-style: bold;' class="placeleft">12 PLACES LEFT</p></div>
            <div class="secondbox">
                <p style='color: #3b6035;' class="infotext">MORE INFO ON OUR WEBSITE</p>

                <button id="bookbutton" style="color: white;" type="button" class="btn btn-md" data-toggle="modal" data-target="#myModal3">BOOK</button>

                <!-- Modal -->
                <div id="myModal3" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-sm" style="margin-top: 200px; margin-left: 40px; margin-right: 40px;">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 style='font-weight: bold;' class="modal-title">Are you sure you want to book a ticket to this course?</h4>
                            </div>
                            <div class="modal-body">
                                <p>This will cost you <b>0.00kr.</b></p>
                            </div>
                            <div class="modal-footer">
                                <button style="border: 1px solid #658163; color: #3b6035; background-color: #fff; " type="button" class="btn " data-dismiss="modal">Cancel</button>
                                <button style=" color: #fff; background-color: #3b6035;" type="button" class="btn " data-dismiss="modal">BOOK</button>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>

        <div style="background-color: white; padding: 0.5em;">
            <h3 style='color: #3b6035; font-style: italic bold;' class="crsname">---------- DIABETES ----------</h3>

            <div class="firstbox">
                <p style='color: #3b6035;' class="time">CLASS FROM 18:30PM TO 19:30PM</p>
                <p style='color: #3b6035; font-style: bold;' class="placeleft">2 PLACES LEFT</p></div>
            <div class="secondbox">
                <p style='color: #3b6035;' class="infotext">MORE INFO ON OUR WEBSITE</p>

                <button id="bookbutton" style="color: white;" type="button" class="btn btn-md" data-toggle="modal" data-target="#myModal4">BOOK</button>

                <!-- Modal -->
                <div id="myModal4" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-sm" style="margin-top: 200px; margin-left: 40px; margin-right: 40px;">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 style='font-weight: bold;' class="modal-title">Are you sure you want to book a ticket to this course?</h4>
                            </div>
                            <div class="modal-body">
                                <p>This will cost you <b>10.00kr.</b></p>
                            </div>
                            <div class="modal-footer">
                                <button style="border: 1px solid #658163; color: #3b6035; background-color: #fff; " type="button" class="btn " data-dismiss="modal">Cancel</button>
                                <button style=" color: #fff; background-color: #3b6035;" type="button" class="btn " data-dismiss="modal">BOOK</button>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>


        <div style="background-color: #d5f3d3; padding: 0.5em;">
            <h3 style='color: #3b6035; font-style: italic bold;' class="crsname">----- PERFECT VISION -----</h3>

            <div class="firstbox">
                <p style='color: #3b6035;' class="time">CLASS FROM 16:30PM TO 18:00PM</p>
                <p style='color: #3b6035; font-style: bold;' class="placeleft">8 PLACES LEFT</p></div>
            <div class="secondbox">
                <p style='color: #3b6035;' class="infotext">MORE INFO ON OUR WEBSITE</p>

                <button id="bookbutton" style="color: white;" type="button" class="btn btn-md" data-toggle="modal" data-target="#myModal5">BOOK</button>

                <!-- Modal -->
                <div id="myModal5" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-sm" style="margin-top: 200px; margin-left: 40px; margin-right: 40px;">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 style='font-weight: bold;' class="modal-title">Are you sure you want to book a ticket to this course?</h4>
                            </div>
                            <div class="modal-body">
                                <p>This will cost you <b>20.00kr.</b></p>
                            </div>
                            <div class="modal-footer">
                                <button style="border: 1px solid #658163; color: #3b6035; background-color: #fff; " type="button" class="btn " data-dismiss="modal">Cancel</button>
                               <button style=" color: #fff; background-color: #3b6035;" type="button" class="btn " data-dismiss="modal">BOOK</button>
                            </div>
                        </div>

                    </div>
                </div>



            </div>
        </div>



        <div><p style='color: #3b6035; text-align: center; padding-top: 1em; font-size: 1.2em;'>NO MORE COURSES<br> FOR THE DAY,<br> SORRY :( </p>
        </div>

        <div class="divback"> <a href="facilities.php"><img class="back" src="images/back.png" alt="back button"></a> </div>

    </body>
</html>
