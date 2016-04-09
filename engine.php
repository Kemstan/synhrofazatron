<?
require("connect.php");
if(($_POST['word1']=$_POST['word2']=$_POST['word3']=$_POST['word4']=$_POST['word5']))
{
$delta_key=$_POST['delta_key1'].$_POST['delta_key2'].$_POST['delta_key3'].$_POST['delta_key4'].$_POST['delta_key5'];
$push_key=$_POST['push_key1'].$_POST['push_key2'].$_POST['push_key3'].$_POST['push_key4'].$_POST['push_key5'];
/*$delta_key_array = explode(",", $delta_key);
$summa=0;
$count=count($items);
for($i=0;$i<$count;$i++)
{
	$summa=$summa+$items[$i];
}
$result=$summa/count($items);*/
//echo $result;//середнє значення затримки між вводом

//-----------------------------------------------------------------------

//--------------------------------------------------------------------------------------------------------
$a1=substr($_POST["delta_key1"],0,-1);
$a2=substr($_POST["delta_key2"],0,-1);
$a3=substr($_POST["delta_key3"],0,-1);
$a4=substr($_POST["delta_key4"],0,-1);
$a5=substr($_POST["delta_key5"],0,-1);
$array1=explode(",",$a1);
$array2=explode(",",$a2);
$array3=explode(",",$a3);
$array4=explode(",",$a4);
$array5=explode(",",$a5);
$finish="";
for($i=0;$i<count($array1);$i++)
{
	$finish=$finish.(($array1[$i]+$array2[$i]+$array3[$i]+$array4[$i]+$array5[$i])/5).",";
}
$intoBD=substr($finish,0,-1);

///////////////////////////////////////////////////////////2222
$b1=substr($_POST["push_key1"],0,-1);
$b2=substr($_POST["push_key2"],0,-1);
$b3=substr($_POST["push_key3"],0,-1);
$b4=substr($_POST["push_key4"],0,-1);
$b5=substr($_POST["push_key5"],0,-1);
$push_key1=explode(",",$b1);
for($i=0;$i<count($push_key1);$i++) 
{
	if($push_key1[$i]>10000)
	{
		$push_key1[$i]=$push_key1[1];
	}
}
$push_key2=explode(",",$b2);
for($i=0;$i<count($push_key2);$i++) 
{
	if($push_key2[$i]>10000)
	{
		$push_key2[$i]=$push_key2[1];
	}
}
$push_key3=explode(",",$b3);
for($i=0;$i<count($push_key3);$i++) 
{
	if($push_key3[$i]>10000)
	{
		$push_key3[$i]=$push_key3[1];
	}
}
$push_key4=explode(",",$b4);
for($i=0;$i<count($push_key4);$i++) 
{
	if($push_key4[$i]>10000)
	{
		$push_key4[$i]=$push_key4[1];
	}
}
$push_key5=explode(",",$b5);
for($i=0;$i<count($push_key5);$i++) 
{
	if($push_key5[$i]>10000)
	{
		$push_key5[$i]=$push_key5[1];
	}
}
$finish="";
for($i=0;$i<count($push_key1);$i++)
{
	$finish1=$finish1.(($push_key1[$i]+$push_key2[$i]+$push_key3[$i]+$push_key4[$i]+$push_key5[$i])/5).",";
}
$intoBD1=substr($finish1,0,-1);
?>
<html>
<head>
<title>Реєстрація</title>

  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="button.css">

</head>
<body>
<div class="logo">

</div> 
<div class="wrapper_body">
     <div class="cbm_wrap ">
     <h1>Реєстрація в системі<br/>"Pelicano 2.0"</h1>
     <img src="cat.jpg">
     <p class="intro">Продовжуйте реєстрацію</p>
	 <p class="word"><b>Введіть ПІБ(англ)</b></p>
<form method=post action="reg.php">
<p class="intro">Прізвище</p>
 <input class="enter" size="18"name="surname" type=text/><br/>
 <p class="intro">Ім'я</p>
 <input class="enter" size="18" name="name" type=text/><br/>
<input type=hidden value="<?echo $intoBD?>"name="intobd"/>
<input type=hidden value="<?echo $intoBD1?>"name="intobd1"/>
<input type="submit" class="button4" value="Зареєструватись">
<input type="reset" class="button5" value="Очистити">
   </form>
     </div>
</div>

   </body>
</html>
<?
}
else
{
echo "Ви допустились помилки!<br/>";
require("register.html");
}

//mysql_query("INSERT INTO `data` (fio,array) VALUES ('qwertty','$intoBD')")
?>