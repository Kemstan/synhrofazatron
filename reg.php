<?
require("connect.php");
$fio=$_POST['surname']." ".$_POST['name'];
$intoBD=$_POST['intobd'];
$intoBD1=$_POST['intobd1'];
$row=mysql_query("SELECT * FROM `data`");
$fio=$_POST['surname']." ".$_POST['name'];
$type=0;

while($result=mysql_fetch_assoc($row))
{
	if($fio==$result['fio'])
	{
	mysql_query("UPDATE `data` SET `delta`='$intoBD', `push`='$intoBD1' WHERE `fio`='$fio'");
	$type=1;
	}
}
if($type==0)
{
mysql_query("INSERT INTO `data` (fio,delta,push) VALUES ('$fio','$intoBD','$intoBD1')");
}
?><html>
<head>
<title>���������</title>

  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="button.css">

</head>
<body>
<div class="logo">

</div> 
<div class="wrapper_body">
     <div class="cbm_wrap ">
     <h1>������������<br/>"Pelicano 2.0"</h1>
     <img src="cat.jpg">
     <p class="intro">��������� ���������</p>
	 <p class="word"><b><?
	 if($type==1)
	 {
	 echo "���� ��� ��������! ����� �� ������ ����� � �������";
	 }
	 if($type==0)
	 {
	 echo "³����! ����� �� ������ ����� � �������";
	 }
	 ?></b></p>

<input type="button" onclick="location.href='index.html'" class="button4" value="�����">
     </div>
</div>

   </body>
</html>