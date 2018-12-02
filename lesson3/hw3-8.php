 	
<?
$arrCity = [
"Московская область"=>["Москва","Зеленоград","Клин"],
"Ленинградская область"=>["Санкт-Петербург","Всеволожск","Павловск","Кронштадт"],
"Рязанская область"=>["Рязань","Пителино"]
];
foreach ($arrCity as $key => $region) {  
  $countCity = count ($region);
  echo "<br>".$key.":<br>";
  
  foreach ($region as $key => $city) {    
    if (mb_substr($city,0,1,"UTF-8") == "К") {
      echo $city;
    if ($countCity != $key+1) {
      echo " ";
    } else {
      echo "<br>";
    }
    }  
  }  
}
?>
