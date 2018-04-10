<?php
header('Content-Type:text/html; charset=utf-8');
session_start();
//清除SESSION，清除登陆标识
$_SESSION=[];
echo json_encode($_SESSION);