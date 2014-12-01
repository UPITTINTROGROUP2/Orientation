<?php
session_start();
/*
if($_GET['action'] == "logout"){
    unset($_SESSION['username']);
    echo '注销登录成功！点击此处 <a href="login.html">登录</a>';
    exit;
}
*/

if(!isset($_POST['submit'])){
    exit('Unauthorized Access!');
}
$email = htmlspecialchars($_POST['Email']);
$password = MD5($_POST['Password']);
include('conn.php');
$check_query = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email' AND password = '$password'");
$result = mysqli_fetch_array($check_query);

if ($result) {
    $_SESSION['username'] = $email;
    header("Location:index.php");
    exit();
} 