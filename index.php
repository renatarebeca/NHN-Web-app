<?php
include_once('inc/head.php');
?>
<?php
if(isset($_GET['rejected'])){
    echo "<p style='color:red;'>Wrong name or password</p>";
}else{
}
?>

<head>
    <title>Log in</title>
    <style>
        body{
            background-color: #8FC989;
        }
    </style>
</head>
<div><img style="height:7%; width:auto; margin-top: 0; top: 15px;;overflow: hidden;position:fixed; " class="nhnlogo" src="./images/nhnlogo.png"></div>
<div style="margin-top:20%; border-top: 1px solid #658162;" class="container">

    <form style="text-align:left; margin-left:10%; margin-right:10%;" action="inc/login.php" method="post">
        <h3 style="color:#3b6035;" class="login">Please, log in!</h3>
        <br>
        <p style="color:#fff;">First name</p>
        <input class="name" type="text" name="first_name" required>
        <br><br>
        <p style="color:#fff;">Password</p>
        <input class="pw" type="password" name="pw" required>
        <span style="width:0%" id="password_show_button"><i aria-hidden="true"></i></span>
        <br><br>
        <input style="color:#fff; background:#369636; border: 1px solid #658162; border-radius: 5px; padding-top:6px; padding-bottom:6px; padding-left:6px;" type="submit" value="LOG IN">
    </form>
    <div>
        <br><br>
        <h3 style="color:#3b6035;"> Don't have an account yet? Register <a style="color:#fff; text-decoration:underline;" class="special" href="register_page.php">HERE</a></h3>
    </div>
</div>