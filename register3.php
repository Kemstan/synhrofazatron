<html>
<head>
<title>Реєстрація</title>
<script src="register.js"></script>
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
	 <p class="word"><b>Крок 4/5</b></p>
     <p class="intro">Щоб зареєструватись, веедіть  слово </p>
	 <p class="word"><b>синхрофазатрон</b></p>
<form name="test" method="post" action="register4.php">
<input name="push_key1" class="hide" id="push_key1" type="hidden" size="18" value="<?echo $_POST['push_key1']?>"></input>
<input name="delta_key1" class="hide" id="delta_key1" type="hidden" size="18" value="<?echo $_POST['delta_key1']?>"></input>

<input name="push_key2" class="hide" id="push_key2" type="hidden" size="18" value="<?echo $_POST['push_key2']?>"></input>
<input name="delta_key2" class="hide" id="delta_key2" type="hidden" size="18" value="<?echo $_POST['delta_key2']?>"></input>

<input name="push_key3" class="hide" id="push_key3" type="hidden" size="18" value="<?echo $_POST['push_key3']?>"></input>
<input name="delta_key3" class="hide" id="delta_key3"  type="hidden" size="18" value="<?echo $_POST['delta_key3']?>"></input>

<input type="text" autocomplete="off" class="enter" name="word4" autocomplete="off" id="clickme4" onkeydown="processKeyDown4(event)" onkeyup="processKeyUp4(event)" value="" size="18" maxlength="14"></input>
<input name="push_key4" class="hide" id="push_key4"  type="hidden" size="18"></input>
<input name="delta_key4" class="hide" id="delta_key4" type="hidden"  size="18"/></input>
<input type="submit" class="button4" value="Далі">
<input type="button" class="button6" onclick="location.href='index.html'" value="На головну"/>
<p class="intro">Якщо Ви допустились помилки - <b>оновіть</b> сторінку </p>
   </form>
     </div>
</div>
<?require "info.html";?>
   </body>
</html>