<html>
<head>
<title>���������</title>
<script src="register.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="button.css">

</head>
<body>
<div class="logo">

</div> 
<div class="wrapper_body">
     <div class="cbm_wrap ">
     <h1>��������� � ������<br/>"Pelicano 2.0"</h1>
     <img src="cat.jpg">
	 <p class="word"><b>���� 5/5</b></p>
     <p class="intro">��� ��������������, ����� </p>
	 <p class="word"><b>��������������</b></p>
<form name="test" method="post" action="engine.php">
<input name="push_key1" class="hide" id="push_key1" type="hidden" size="18" value="<?echo $_POST['push_key1']?>"></input>
<input name="delta_key1" class="hide" id="delta_key1" type="hidden" size="18" value="<?echo $_POST['delta_key1']?>"></input>

<input name="push_key2" class="hide" id="push_key2" type="hidden" size="18" value="<?echo $_POST['push_key2']?>"></input>
<input name="delta_key2" class="hide" id="delta_key2" type="hidden" size="18" value="<?echo $_POST['delta_key2']?>"></input>

<input name="push_key3" class="hide" id="push_key3" type="hidden" size="18" value="<?echo $_POST['push_key3']?>"></input>
<input name="delta_key3" class="hide" id="delta_key3"  type="hidden" size="18" value="<?echo $_POST['delta_key3']?>"></input>

<input name="push_key4" class="hide" id="push_key4"  type="hidden" size="18" value="<?echo $_POST['push_key4']?>"></input>
<input name="delta_key4" class="hide" id="delta_key4" type="hidden"  size="18" value="<?echo $_POST['delta_key4']?>"></input>

<input type="text" autocomplete="off" class="enter" name="word5" autocomplete="off" id="clickme5" onkeydown="processKeyDown5(event)" onkeyup="processKeyUp5(event)" value="" size="18" maxlength="14"></input>
<input name="push_key5" class="hide" id="push_key5"  type="hidden" size="18"></input>
<input name="delta_key5" class="hide" id="delta_key5"  type="hidden" size="18"/></input>
<input type="submit" class="button4" value="��������������">
<input type="button" class="button6" onclick="location.href='index.html'" value="�� �������"/>
<p class="intro">���� �� ����������� ������� - <b>������</b> ������� </p>
   </form>
     </div>
</div>
<?require "info.html";?>
   </body>
</html>