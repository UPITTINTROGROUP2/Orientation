<?php
    if(!isset($_POST['submit'])){
        exit('Unauthorized Access!');
    }
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $tele = $_POST['phone'];
    
    include 'conn.php';
    $check = mysqli_query($conn, "select email from user where email='$email' limit 1");
    if(mysqli_fetch_array($check)){
        echo "<script> alert(\"Email already exists, please use another email or sign in\");window.location.href='register.php';  </script>";
        exit;
    }
    
    $password = MD5($password);
    $sql = "INSERT INTO `user`(`email`, `password`, `firstname`, `lastname`, `telephone`) VALUES ('$email','$password','$fname','$lname',$tele)";
    if(mysqli_query($conn, $sql)){
        $sql2 = "INSERT INTO `todolistprocess`(`email`, `TD1`, `TD2`, `TD3`, `TD4`, `TD5`, `TD6`, `TD7`, `TD8`, `TD9`, `TD10`, `TD11`, `TD12`, `TD13`, `TD14`, `TD15`, `TD16`, `TD17`, `TD18`, `TD19`, `TD20`, `TD21`)"
                . " VALUES ('$email',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0)";
        mysqli_query($conn, $sql2);
        exit("<script> alert(\"Success, please use your email and password to log in.\");window.location.href='index.php';  </script>");
    } else {
        exit("<script> alert(\"Registration failed, please try again.\");window.location.href='register.php';  </script>");
    } 
?>