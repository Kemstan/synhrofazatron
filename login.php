<?
require("connect.php");
$push_key = explode(",",substr($_POST['push_key'],0,-1));
$delta_key = explode(",",substr($_POST['delta_key'],0,-1));
$result = mysql_query("SELECT * FROM `data`");
$array1=array();
$array2=array();
for($i=0;$i<mysql_num_rows($result);$i++)
{
	$k=0;
	$k1=0;
	$l=0;
	$l1=0;
	$row = mysql_fetch_assoc($result);
	$str1=explode(",",$row['delta']);
	$str2=explode(",",$row['push']);
	for($j=0;$j<count($str1);$j++)
	{
		if(($delta_key[$j]<($str1[$j]+40))and($delta_key[$j]>=($str1[$j]-40)))
		{
			$k++;
		}
		else
		{
			$l++;
		}
	}
	for($j=0;$j<count($str2);$j++)
	{
		if(($push_key[$j]<($str2[$j]+10))and($push_key[$j]>=($str2[$j]-10)))
		{
			$k1++;
		}
		else
		{
			$l1++;
		}
	}
	if($k1+$k>$l1+$l)
	{
	$temp=$k1+$k;
		array_push($array1, $row['fio']);
		array_push($array2, $temp);
	}
}
	

	?>
	<html>
<head>
<title>Кабінет</title>

  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="button.css">

</head>
<body>
<div class="logo">

</div> 
<div class="wrapper_body">
     <div class="cbm_wrap ">
     <h1>Вхід у<br/>"Pelicano 2.0"</h1>
     <img src="cat.jpg">
     <p class="intro">Ласкаво просимо!</p>
	 <p class="word"><b><?
	if(!empty($array1))
	{
		$max=$array2[0];
		$up=0;
		for($i=1;$i<count($array1);$i++)
		{
		if($array2[$i]>$array2[$i-1])
		{
		$max=$array2[$i];
		$up=$i;
		}
		}	
		echo $array1[$up];
		$game=1;
	?></b></p>
	 <input type="button" class="button6" onclick="location.href='index.html'" value="На головну"/><?
	}
	if(empty($array1))
	{
	echo "Вибачте, та ми не змогли вас ідентифікувати. Спробуйте ще раз, або зареєструйтесь";
	$game=0;
	?></b></p>
	<input type="button" class="button4" onclick="location.href='index.html'" value="Спробувати ще"/>
	<input type="button" class="button6" onclick="location.href='register.php'" value="Зареєструватись"/><?
	}?>
    </div>
</div>
<?if($game==1){?>
<div class="game">
<object width="400" height="300">
<param name="movie" value="game.swf">
<embed src="game.swf" width="400" height="300">
</embed>
</object>
</div>
<?}?>
   </body>
</html>
	