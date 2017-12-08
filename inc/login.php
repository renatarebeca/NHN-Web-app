<?php 
session_start();
if(isset($_POST['first_name'])){
    $name = $_POST['first_name'];
    $pw = $_POST['pw'];
    $incpw = sha1($pw);
    require_once('db.php');
    $sql = "select * from members where first_name = '$name' and pw = '$incpw'";
    $result = $db_connection->query($sql);
    $row = $result->fetchObject();
    if($row){
        $_SESSION['id'] = $row->id;
        $_SESSION['name'] = $row->first_name;
        $_SESSION['image'] = $row->image;
        $_SESSION['email'] = $row->email;
        $_SESSION['reg_date'] = $row->reg_date;
        if(isset($_COOKIE[$name])){
            //count up the cookie value
            setcookie($name, $_COOKIE[$name]+1, time()+60*60*24*7 , "/");
        }else{
            //set the cookie
            setcookie($name, 1, time()+60*60*24*7 , "/");
            
        }
        header('Location: ../admin.php');
    
    }else{
        header('Location: ../index.php?rejected');
    }
}else{
    header('Location: ../index.php');
}
?>