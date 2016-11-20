<html>
<head>
  <title>Результат загрузки файла</title>
</head>
<body>
<?php
   if($_FILES["filename"]["size"] > 1024*100*1024)
   {
     echo ("Размер файла превышает 100 мегабайт");
     exit;
   }
   // Проверяем загружен ли файл
   if(is_uploaded_file($_FILES["filename"]["tmp_name"]))
   {
     // Если файл загружен успешно, перемещаем его
     // из временной директории в конечную
     move_uploaded_file($_FILES["filename"]["tmp_name"], "/var/www/html/bvhplayer/samples/".$_FILES["filename"]["name"]);
     // header("Location:upload.html");
     // echo ("/var/www/html/bvhplayer/samples".$_FILES["filename"]["name"]);
     $fname="/var/www/html/bvhplayer/samples/".$_FILES["filename"]["name"];
     exec("echo ".$fname." ".$_SESSION['login'].">>/var/www/html/bvhplayer/samples/fname");
     exit ("<body><div align='center'>
            <h3>Файл загружен: " . $_FILES["filename"]["name"] . " <br>".
            "<a href=\"bvhplayer/index.php?id=".$_FILES["filename"]["name"]."\">model</a>  ".
            "<a href=\"http://localhost:3000/dashboard/db/motionanalysis?var-FileName=".$_FILES["filename"]["name"]."\">analyze</a>");
   } else {
      echo("Ошибка загрузки файла");
   }
?>
</body>
</html>