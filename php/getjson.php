<?php
//��Ҫ���ܣ�ͨ�������php����json��ʽ��ӡ��mysql���ݿ��е��¶�ʪ�ȱ�
$con = mysql_connect("bjl002.vhost007.cn","db08171","XoXkXiYX");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  //echo 'link db ok';
mysql_select_db("db08171", $con);
//echo 'select db ok';


$resultset = mysql_query("select id, time, wendu, shidu  from wsdb", $con);
//echo "select ok";
////////////////////////////////////////////////׼�����ݽ���װ��
$data = array();
////////////////////////////////////////////////ʵ����
class User{
    public $id;
    public $time;
    public $wendu;
    public $shidu;
}
//$user->id='1';
////////////////////////////////////////////////����
while($row = mysql_fetch_array($resultset, MYSQL_ASSOC)) {
    $user = new User();
    $user->id = $row['id'];
    $user->time = $row['time'];
    $user->wendu = $row['wendu'];
    $user->shidu = $row['shidu'];
    $data[] = $user;
}
echo json_encode($data);
mysql_close($con);
?>