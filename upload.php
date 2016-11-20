<html>
<head>
  <title>Результат загрузки файла</title>
</head>
<body>
<?php
   // Проверяем загружен ли файл
   if(is_uploaded_file($_FILES["filename"]["tmp_name"]))
   {
     // Если файл загружен успешно, перемещаем его
     // из временной директории в конечную
     move_uploaded_file($_FILES["filename"]["tmp_name"], "/var/www/html/bvhplayer/samples/".$_FILES["filename"]["name"]);
     $fname="/var/www/html/bvhplayer/samples/".$_FILES["filename"]["name"];
     exec("/root/HR2016-motion-analyzer/build/install/motion_analyzer/bin/motion_analyzer ".$fname." ".$_SESSION['login']." ".$_SESSION['password']." "."http://localhost:8086"." >> /var/www/html/bvhplayer/samples/fname");
     // exec("echo ".$fname." ".$_SESSION['login'].">>/var/www/html/bvhplayer/samples/fname");
     exit ("<body><div align='center'>
            <h3>Файл загружен: " . $_FILES["filename"]["name"] . " <br>".
            "<a href=\"bvhplayer/index.php?id=".$_FILES["filename"]["name"]."\">model</a>  ".
            "<a href=\"http://localhost:3000/dashboard/db/motionanalysis?var-FileName=".$_FILES["filename"]["name"]."\">analyze</a>");
   } else {
   	 switch ($_FILES['uploadfile']['error'])
	 {
	 case 1: echo 'Размер файла превышает допустимое значение UPLOAD_MAX_FILE_SIZE'; break;
	 case 2: echo 'Размер файла превышает допустимое значение MAX_FILE_SIZE'; break;
	 case 3: echo 'Не удалось загрузить часть файла'; break;
	 case 4: echo 'Файл не был загружен'; break;
	 case 6: echo 'Отсутствует временная папка.'; break;
	 case 7: echo 'Не удалось записать файл на диск.'; break;
	 case 8: echo 'PHP-расширение остановило загрузку файла.'; break;
	 }
      echo("Ошибка загрузки файла");
   }
?>
</body>
</html>