<?php
include('../../../config/conn.php');
//接收数据
//$username=$_POST['username'];
//$password=$_POST['password'];
//构造SQL语句，查询数据库中用户名是否存在
$sql="select *  from login_user";
$rs=mysqli_query($conn, $sql);
//将查询结果返回给客户端
$data=[];
while($row=mysqli_fetch_assoc($rs)){
    //将遍历的值加入到数组中，生成二维数组
    array_push($data,$row);
};
//将所有的数据以json的格式输出
echo json_encode($data);
mysqli_free_result($rs);
mysqli_close($conn);