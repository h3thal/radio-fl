<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>track update</title>
</head>
<body>


<?php
$artist = "artist->".$_GET['artist'];
$album = "album->".$_GET['album'];
$title = "title->".$_GET['title'];

$fp = fopen("rds.txt", "a"); // Открываем файл в режиме записи
$mytext = "Это строку необходимо нам записать\r\n"; // Исходная строка
$test = fwrite($fp, $mytext); // Запись в файл
$test = fwrite($fp, $artist); // Запись в файл
$test = fwrite($fp, $album); // Запись в файл
$test = fwrite($fp, $title); // Запись в файл

if ($test) echo 'Данные в файл успешно занесены.';
else echo 'Ошибка при записи в файл.';
fclose($fp); //Закрытие файла
?>


</body>
</html>
