<?
$arrCity = [
"Московская область"=>["Москва","Зеленоград","Клин"],
"Ленинградская область"=>["Санкт-Петербург","Всеволожск","Павловск","Кронштадт"],
"Рязанская область"=>["Рязань","Пителино"]
];
foreach ($arrCity as $key => $region) {  
  $countCity = count ($region);
  echo $key.":<br>";
  
  foreach ($region as $key => $city) {
    if ($countCity != $key+1) {
      echo $city.", ";
    } else {
      echo $city."<br>";
    }    
  }  
}
?>