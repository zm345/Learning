<?php
//获取请求参数
$username = isset($_POST['username']) ? $_POST['username'] : "";
$password = isset($_POST['password']) ? $_POST['password'] : "";

if (!empty($username) && !empty($password)) { //判断用户名或密码是否为空
	include_once('conn.php');
    $sql_select = "SELECT username,password FROM user WHERE username = '$username' AND password = '$password'"; //执行SQL语句
    $ret = mysqli_query($conn, $sql_select);
    $row = mysqli_fetch_array($ret); //判断用户名或密码是否正确
    if ($username == $row['username'] && $password == $row['password']) 
    { 
        header("Location:ex01a.php"); 
        mysqli_close($conn);
    }
    else 
    { 
        //用户名或密码错误，赋值err为1
        header("Location:login.php?err=1");
    }
} else { //用户名或密码为空，赋值err为2
    header("Location:login.php?err=2");
}
 ?>

