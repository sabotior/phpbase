<?
include "/db/config.php";
$sql = "select * from photo_gallery order by click desc";
$result = mysqli_query($connect,$sql);
?>
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
$i=0;
while ($data = mysqli_fetch_assoc($result)) {
  echo '<a class="photo" href="image.php?id=' . $data[id] . '"><img src="small/' . $data[name] . '" alt=""></a>';
  $i++;
  if ($i%3 == 0) {
    echo "<br>";
  }
 }
?>
</body>
</html>