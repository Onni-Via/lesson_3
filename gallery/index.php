<?php

include __DIR__ . '/data.php'; 
include __DIR__ . '/image.php'; 
?>

<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Примитивная фотогалерея</title>
</head>
<body>
<?php foreach ($images as $key => $image) { ?>
<a href="http://localhost/sprint_f/lesson_3/gallery/image.php?id=<?php echo $key; ?>">
<img src="http://localhost/sprint_f/lesson_3/gallery/<?php echo $image; ?> " width="450" height="300"></a>	

<?php  } ?>

</body>
</html>
