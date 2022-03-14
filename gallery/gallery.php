<?php

include __DIR__ . '/image.php'; 

?>

<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Примитивная фотогалерея</title>
</head>
<body>
	<?php foreach ($images as $key => $image){ ?>
	<a href="<?php echo 'http://localhost/sprint_f/lesson_3/' . $image; ?><?php echo '?id=' . $key ?>" >
	<img  src="<?php echo 'http://localhost/sprint_f/lesson_3/' . $image;  ?>"></a><?php  } ?>
</form>
</body>
</html>
