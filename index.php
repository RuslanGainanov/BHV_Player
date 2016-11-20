<?php
    //Стартуем сессии
 session_start();
 header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Авторизация</title>
<meta http-equiv="Content-Style-Type" content="text/css">
<meta name="keywords" content="Ключевые слова для поисковиков">
<meta name="description" content="Описание сайта">
</head>
<body>
 <!--Если пусты, то выводим форму входа.--> 
 <div style="border: 0px solid blue;" align='center'>
<form action="proverca.php" method="post">
    <label>логин:</label><br/>
  <input name="login" type="text" size="15" maxlength="15"><br/>
    <label>пароль:</label><br/>
  <input name="password" type="password" size="15" maxlength="15"><br/><br/>
  <input type="submit" value="войти"><br/><br/>
</form>
</div>
</body>
</html>