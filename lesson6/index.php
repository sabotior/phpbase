<?
include "calc.php";
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

<form method="post" action="">

<p>Число1
   <input name="num1" type="text">
  </p>
<select name="sign">
  <option name="plus">+</option>
  <option name="minus">-</option>
  <option name="multiply">*</option>
  <option name="divide">/</option>
</select>
<p>Число2
   <input name="num2" type="text">
  </p>
  <input name="calculate" type="submit" value="Отправить">

</form>

<br>
<h2><?=$num1." ".$sign." ".$num2." = ".$result?></h2>
<br>


<form method="post" action="">
<p>Число1
   <input name="number1" type="text">
</p>

<p>Число2
   <input name="number2" type="text">
</p>

<input name="plus" type="submit" value="+">
<input name="minus" type="submit" value="-">
<input name="multiply" type="submit" value="*">
<input name="divide" type="submit" value="/">

</form>
<br>

<h2><?=$number1." ".$signButton." ".$number2." = ".$resultat?></h2>

</body>
</html>