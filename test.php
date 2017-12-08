<?php 
$title = "home";
include_once('inc/head.php');
$dbinfo = "mysql:host=localhost;dbname=nhn";
$dbuser = "root";
$password = "";
$db_connection = new PDO ($dbinfo, $dbuser, $password);
$sql = "select * from members";
$result = $db_connection -> query($sql);
?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>

<body>
    <h1> Main content goes here.. </h1>
    
    <?php
    while($row = $result->fetchObject()){
        echo "<h3>$row->first_name $row->last_name</h3>";
    }
    ?>
    
    
<?php 
include_once('inc/footer.php');
?>
</body>
</html>

        

    
