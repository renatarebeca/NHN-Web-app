<?php
include_once('inc/head.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SPA</title>
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
                    align-content: flex-start;
                    vertical-align: top;
                    padding-top: 0.5em;

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
        <div><h3 style="margin-top: 70px; text-align:center; margin-bottom: 20px;">SPA</h3></div>



        <div style="background-color: #d5f3d3; padding: 0.5em;">
            <h3 style='color: #3b6035; font-style: italic bold;' class="crsname">-------------- SAUNA -------------------</h3>

            <div class="firstbox">
                <p style='color: #3b6035;' class="time">SECTION A<br>1ST FLOOR, ROOM 32</p></div>
            <div class="secondbox">
                <button id="bookbutton" style="color: white;" type="button" class="btn btn-md" data-toggle="modal" data-target="#myModal1">BOOK</button>

                <!-- Modal -->
                <div id="myModal1" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-sm" style="margin-top: 200px; margin-left: 40px; margin-right: 40px;">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 style='font-weight: bold;' class="modal-title">SAUNA</h4>
                            </div>
                            <div class="modal-body">
                                <p>Price: <b> 50 </b> kr per hour<br>Open: Mon - Sat 09:00 - 18:00</p>
                            </div>
                            <div class="modal-footer">
                                <button style="border: 1px solid #658163; color: #3b6035; background-color: #fff; " type="button" class="btn " data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn" style="color: white; background-color: #3b6035;" data-dismiss="modal">BOOK</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div style="background-color: white; padding: 0.5em;">
            <h3 style='color: #3b6035; font-style: italic bold;' class="crsname">------------ MASSAGE ---------------</h3>

            <div class="firstbox">
                <p style='color: #3b6035;' class="time">SECTION H<br>2ND FLOOR, ROOM 18</p></div>
            <div class="secondbox">

                <button id="bookbutton" style="color: white;" type="button" class="btn btn-md" data-toggle="modal" data-target="#myModal2">BOOK</button>

                <!-- Modal -->
                <div id="myModal2" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-sm" style="margin-top: 200px; margin-left: 40px; margin-right: 40px;">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 style='font-weight: bold;' class="modal-title">MASSAGE</h4>
                            </div>
                            <div class="modal-body">
                                <p>Price: <b>50</b> kr per hour<br>Duration: 30 min</p>
                            </div>
                            <div class="modal-footer">
                                <button style="border: 1px solid #658163; color: #3b6035; background-color: #fff; " type="button" class="btn " data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn" style="color: white; background-color: #3b6035;" data-dismiss="modal">BOOK</button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div style="background-color: #d5f3d3; padding: 0.5em;">
            <h3 style='color: #3b6035; font-style: italic bold;' class="crsname">---------- MUD THERAPY -------------</h3>

            <div class="firstbox">
                <p style='color: #3b6035;' class="time">SECTION D<br>GROUND FLOOR, ROOM 22</p></div>
            <div class="secondbox">

                <button id="bookbutton" style="color: white;" type="button" class="btn btn-md" data-toggle="modal" data-target="#myModal3">BOOK</button>

                <!-- Modal -->
                <div id="myModal3" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-sm" style="margin-top: 200px; margin-left: 40px; margin-right: 40px;">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 style='font-weight: bold;' class="modal-title">MUD THERAPY</h4>
                            </div>
                            <div class="modal-body">
                                <p>Price: <b> 50</b> kr per hour<br>Duration: 45 min</p>
                            </div>
                            <div class="modal-footer">
                               <button style="border: 1px solid #658163; color: #3b6035; background-color: #fff; " type="button" class="btn " data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn" style="color: white; background-color: #3b6035;" data-dismiss="modal">BOOK</button>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>

 

        <div class="divback"> <a href="facilities.php"><img class="back" src="images/back.png" alt="back button"></a> </div>

    </body>
</html>
