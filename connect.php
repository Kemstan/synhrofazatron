<?
//��//
$db_host  = "localhost"; //��� �����
  $db_user  = "fh3809i5_bd";      //������������ ��
  $db_pass  = "";          //������ ��� ������������ ��
  $db_name  = "fh3809i5_bd";

$connect_db = mysql_connect($db_host,$db_user,$db_pass) or die("������ ����������� � �������:".mysql_error());
mysql_select_db("fh3809i5_bd",$connect_db)  or die("������ ����������� �  ���� ������:".mysql_error());
?>