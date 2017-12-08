<?php
include_once('inc/head.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sport fields</title>
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
                    padding-top: 0.6em;

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
        <div><h3 style="color:#3b6035;margin-top: 70px; text-align:center; margin-bottom: 20px;">SPORT FIELDS</h3></div>



        <div style="background-color: #d5f3d3; padding: 0.5em;">
            <h3 style='color: #3b6035; font-style: italic bold;' class="crsname">----------- FOOTBALL --------------</h3>

            <div class="firstbox">
                <p style='color: #3b6035;' class="time">BOOK YOUR TIME</p></div>
            
            <div class="secondbox">
                <p style='color: #3b6035;' class="infotext">MORE INFO</p>
                <button id="bookbutton" style="color: white;" type="button" class="btn btn-md" data-toggle="modal" data-target="#myModal1">BOOK</button>

                <!-- Modal -->
                <div id="myModal1" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-sm" style="margin-top: 200px; margin-left: 40px; margin-right: 40px;">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 style='font-weight: bold;' class="modal-title">FOOTBALL</h4>
                            </div>
                            <div class="modal-body">
                                <p>You are about to book NHN's football field.<br>You need to gather minimum 8 people for this booking.</p>
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
            <h3 style='color: #3b6035; font-style: italic bold;' class="crsname">--------------- TENNIS ---------------</h3>

            <div class="firstbox">
                <p style='color: #3b6035;' class="time">BOOK YOUR TIME</p></div>
            <div class="secondbox">
                <p style='color: #3b6035;' class="infotext">MORE INFO</p>

                <button id="bookbutton" style="color: white;" type="button" class="btn btn-md" data-toggle="modal" data-target="#myModal2">BOOK</button>

                <!-- Modal -->
                <div id="myModal2" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-sm" style="margin-top: 200px; margin-left: 40px; margin-right: 40px;">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 style='font-weight: bold;' class="modal-title">TENNIS</h4>
                            </div>
                            <div class="modal-body">
                                <p>Due to the high demand, tennis courts can be reserved max. for one hour per day.</p>
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
            <h3 style='color: #3b6035; font-style: italic bold;' class="crsname">----------- BASKETBALL -----------</h3>

            <div class="firstbox">
                <p style='color: #3b6035;' class="time">BOOK YOUR TIME</p></div>
            <div class="secondbox">
                <p style='color: #3b6035;' class="infotext">MORE INFO</p>

                <button id="bookbutton" style="color: white;" type="button" class="btn btn-md" data-toggle="modal" data-target="#myModal3">BOOK</button>

                <!-- Modal -->
                <div id="myModal3" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-sm" style="margin-top: 200px; margin-left: 40px; margin-right: 40px;">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 style='font-weight: bold;' class="modal-title">BASKETBALL</h4>
                            </div>
                            <div class="modal-body">
                                <p>You are about to book NHN's basketball field.<br>You need to gather minimum 8 people for this booking.</p>
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
            <h3 style='color: #3b6035; font-style: italic bold;' class="crsname">----------- VOLLEYBALL -----------</h3>

            <div class="firstbox">
                <p style='color: #3b6035;' class="time">BOOK YOUR TIME</p></div>
            <div class="secondbox">
                <p style='color: #3b6035;' class="infotext">MORE INFO</p>

                <button id="bookbutton" style="color: white;" type="button" class="btn btn-md" data-toggle="modal" data-target="#myModal4">BOOK</button>

                <!-- Modal -->
                <div id="myModal4" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-sm" style="margin-top: 200px; margin-left: 40px; margin-right: 40px;">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 style='font-weight: bold;' class="modal-title">VOLLEYBALL</h4>
                            </div>
                            <div class="modal-body">
                                <p>You are about to book NHN's volleyball field.<br>You need to gather minimum 6 people for this booking.</p>
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


  

        <div class="divback"> <a href="facilities.php"><img class="back" src="images/back.png" alt="back button"></a> </div>

    </body>
</html>
