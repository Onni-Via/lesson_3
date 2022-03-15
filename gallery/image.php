<?php

include __DIR__ . '/data.php'; 

?>

<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Картинка</title>
</head>
<body>
<img src="http://localhost/sprint_f/lesson_3/gallery/<?php echo $images[$_GET['id']]; ?> ">
</body>
</html>