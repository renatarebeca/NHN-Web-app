<?php
include_once('inc/head.php');
echo "<link rel='stylesheet' type='text/css' href='./css/admin.css'>";
if(isset($_SESSION['id'])){
    $name = $_SESSION['name'];
    $image = $_SESSION['image'];
    $email = $_SESSION['email'];

?>
<?php 
}else{
    header('Location: index.php?rejected');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <div class="section">
        <img class="hosp" src="images/hosp.png" alt="hospital logo">
        <a href="facilities.php"> <img class="facilities" src="images/facilities.png" alt="facilities button"></a>
        <a href="membership.php"> <img class="membership" src="images/membership.png" alt="membership button"></a>
        <a href="info.php"> <img class="info" src="images/info.png" alt="info button"></a>
        <a href="tickets.php"> <img class="tickets" src="images/tickets.png" alt="tickets button"></a>
    
    </div>
    
    
    
</body>
</html>
