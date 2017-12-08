<?php 
session_start();
echo "<link rel='stylesheet' type='text/css' href='./css/style.css'>";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    </head>

    <body>
        <nav class="navbar-fixed-top">

            <?php
            if(isset($_SESSION['id'])){
                echo  '<div><label for="cb" style="color: #fff;float: left;margin: 10px; width: 0%;">&#x2630</label> <img class="nhnlogo" src="./images/nhnlogo.png"> <img class="notif" src="./images/notif.png"></div>';
                echo '<input type="checkbox" id="cb">';
                echo '<div style="height: 0px;"><br><br></div>';
                
                echo '<a class="home special" href="admin.php">Home</a>';
                echo '<a class="special" href="facilities.php">Facilities</a>';
                echo '<a class="special" href="membership.php">Memberships</a>';
                echo '<a class="special" href="tickets.php">Tickets</a>';
                echo '<a class="special" href="profile.php">Profile</a>';
                echo '<a class="special" href="inc/logout.php">Log out</a>';
            }else{
                echo  '<div><a><img class="nhnlogo" src="./images/nhnlogo.png"></a></div>';
            }
            ?>

        </nav>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>