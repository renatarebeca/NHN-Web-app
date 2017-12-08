<?php
session_start();
if(isset($_POST['first_name'])){
    
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $pw=$_POST['pw'];
    $incpw=sha1($pw);
    require_once('db.php');
    if($_FILES['myimage']['name']!=""){
        $image=$_FILES['myimage']['name'];
        $tmp_name=$_FILES['myimage']['tmp_name'];
        move_uploaded_file($tmp_name, "../images/".$image);
    }else{
    $image="clown.jpg";
}

    $sql="INSERT INTO members (first_name, last_name, email, pw, image, reg_date) VALUES ('$first_name', '$last_name', '$email', '$incpw', '$image', NOW() ) ";
    $result=$db_connection->query($sql);
    
    header('Location: ../login_page.php');

    /*if($row = $result->fetchObject()){
        $_SESSION['id'] = $row->id;
        $_SESSION['name'] = $row->first_name;
        $_SESSION['email'] = $row->email;
        $_SESSION['reg_date'] = $row->reg_date;
        
        header('Location: ../admin.php');
    }else {
        header ('Location: ../login_page.php?rejected');
    }
    */
}
?>