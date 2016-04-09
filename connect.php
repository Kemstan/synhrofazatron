<?
//бд//
$db_host  = "localhost"; //Имя хоста
  $db_user  = "fh3809i5_bd";      //Пользователь БД
  $db_pass  = "";          //Пароль для пользователя БД
  $db_name  = "fh3809i5_bd";

$connect_db = mysql_connect($db_host,$db_user,$db_pass) or die("Ошибка подключения к серверу:".mysql_error());
mysql_select_db("fh3809i5_bd",$connect_db)  or die("Ошибка подключения к  базе данных:".mysql_error());
?>