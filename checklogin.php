<?php
session_start () ;                   //初始session
$_SESSION["shili"]=null;
$shili_name=$_POST['username'] ;    //获取参数
$password=$_POST['password'] ;
//验证管理员名称和密码是否正确,这里采用直接验证,没有连接数据库
if ($shili_name=="mxf" and $password=="passwd")
{
$_SESSION["shili"]=true;
echo "<font color=red>success!</font>" ;
header ("Location:test.html") ;    //登录成功重定向到管理页面
}
else
{
echo "<table width='100%' align=center><tr><td align=center>" ;
echo "admin or passwd error<br>" ;
echo "<font color=red>failed</font><br><a href='logintest.html'>re enter</a>";
echo "</td></tr></table>" ;
}
?>