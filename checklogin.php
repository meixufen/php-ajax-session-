<?php
session_start () ;                   //��ʼsession
$_SESSION["shili"]=null;
$shili_name=$_POST['username'] ;    //��ȡ����
$password=$_POST['password'] ;
//��֤����Ա���ƺ������Ƿ���ȷ,�������ֱ����֤,û���������ݿ�
if ($shili_name=="mxf" and $password=="passwd")
{
$_SESSION["shili"]=true;
echo "<font color=red>success!</font>" ;
header ("Location:test.html") ;    //��¼�ɹ��ض��򵽹���ҳ��
}
else
{
echo "<table width='100%' align=center><tr><td align=center>" ;
echo "admin or passwd error<br>" ;
echo "<font color=red>failed</font><br><a href='logintest.html'>re enter</a>";
echo "</td></tr></table>" ;
}
?>