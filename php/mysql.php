<?php
//��Ҫ���ܣ�����ͨ�����php����get���󣬽�����wendu��shidu�ϴ���mysql���ݿ���
$con = mysql_connect("bjl002.vhost007.cn","db08171","XoXkXiYX");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
echo 'link db ok';
mysql_select_db("db08171", $con);
echo 'select db ok';

$wendu=$_GET['wendu'];
$shidu=$_GET['shidu'];
mysql_query("INSERT INTO wsdb (wendu, shidu) 
VALUES ('".$wendu."','".$shidu."')");

mysql_close($con);
?>