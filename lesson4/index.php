<?
//print_r(scandir("small"));
$images = scandir("small");
foreach($images as $key => $img){
if ($key > 1) {
echo '<a href="big/' . $img . '" target="_blank"><img src="small/' . $img . '" alt=""></a>';
if (($key - 1)%3 == 0) {
  echo "<br>";
}
}
}
?>


<br>
<form method="POST" action="server.php" enctype="multipart/form-data">
<br>
<p>Загрузить файл</p>
<input type="file" name="photo" accept="image/jpg,image/jpeg"><br><br>
<input type="submit" value="Сохранить">
</form>