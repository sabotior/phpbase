<?
include "/db/config.php";
$idThisPhoto = $_GET['id'];



$sql = "select * from photo_gallery where id = ". $idThisPhoto;
$result = mysqli_query($connect,$sql);
$data = mysqli_fetch_assoc($result);

$click=$data[click]+1;
$sqlupdate = "UPDATE photo_gallery SET click=$click WHERE id=$idThisPhoto";
mysqli_query($connect,$sqlupdate);


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
  <a href="index.php">Назад</a>
  <div>
  <img src="big/<?=$data[name] ?>">
  </div>
  <p><?=$click?></p>
</body>
</html>