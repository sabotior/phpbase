<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
  <script type="text/javascript" src="/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
  <script type="text/javascript" src="/fancybox/jquery.easing-1.3.pack.js"></script>
  <script type="text/javascript" src="/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
  <link rel="stylesheet" href="/lesson4/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
  <script>
  $(document).ready(function() {

/* This is basic - uses default settings */

$("a.photo").fancybox();

});
</script>
</head>
<body>
<?
  $images = array_slice(scandir("small"), 2);
  foreach($images as $key => $img){
  echo '<a class="photo" href="big/' . $img . '" target="_blank"><img src="small/' . $img . '" alt=""></a>';
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