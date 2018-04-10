<?php
include('../../../config/conn.php');
session_start();
//接收数据
$username=$_POST['username'];
$password=$_POST['password'];
//验证数据有效性

//构造SQL语句，查询数据库中用户名是否存在
$sql="select * from login_user where user_name='$username' and password='$password'";
$rs=mysqli_query($conn, $sql);
//将查询结果返回给客户端
if( mysqli_num_rows($rs)>0 ){
	echo '0000';
    //登陆成功时，添加SESSION变量
    $row=mysqli_fetch_assoc($rs);
    $_SESSION['username']=$row['user_name'];
    $_SESSION['userid']=$row['id'];
}else{
	echo '0001';
}

mysqli_free_result($rs);
mysqli_close($conn);
