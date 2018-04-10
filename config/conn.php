<?php
	header('Content-Type:text/html; charset=utf-8');
	//连接数据库
	$conn = @mysqli_connect('localhost','root','root','supermarket');
    //$db = new MySQLi("localhost","root","root","supermarket");
    //判断是否连接成功
    mysqli_connect_error()?die("连接失败"):"";
