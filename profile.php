<?php
include_once('inc/head.php');
if(isset($_SESSION['id'])){
    $name = $_SESSION['name'];
    $image = $_SESSION['image'];
    $email = $_SESSION['email'];
}else{
    header('Location: index.php?rejected');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile</title>
    </head>

    <body>
        <div style="margin-left: 10px;"> 
            <h2 style="margin-top:80px;">Hi <?php echo $name."!"; ?> </h2>
            <h3>This is you're profile page. </h3>
            <img src="images/<?php echo $image; ?>" alt="profile image of <?php echo $name; ?>">
            <h3> Your registered email is: <p>  <?php echo $email; ?></p></h3>
        </div>

    </body>
</html>


