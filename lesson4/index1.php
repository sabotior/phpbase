<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
 
</head>
<body>
<?
  $images = array_slice(scandir("small"), 2);
  foreach($images as $key => $img){
  echo '<a class="photo" href="image.php?photo=' . $img . '" target="_blank"><img src="small/' . $img . '" alt=""></a>';
  if (($key + 1)%3 == 0) {
    echo "<br>";
  }
}
?><br>
<form method="POST" action="server.php" enctype="multipart/form-data">
<br>
<p>Загрузить файл</p>
<input type="file" name="photo" accept="image/jpg,image/jpeg"><br><br>
<input type="submit" value="Сохранить">
</form>
</body>
</html>