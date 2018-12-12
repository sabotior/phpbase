<?
if (isset($_POST[calculate])){
  $num1 = (int)($_POST[num1]);
  $num2 = (int)($_POST[num2]);
  $sign = $_POST[sign];

  if ($sign == "+") {
    $result = $num1 + $num2;
  } elseif ($sign == "-") {
    $result = $num1 - $num2;
  } elseif ($sign == "*") {
    $result = $num1 * $num2;
  } elseif ($sign == "/") {
    if($num2 <> 0){
    $result = $num1 / $num2;
  } else {
    $result = "На ноль делить нельзя";
  }
  }
}

$number1 = (int)($_POST[number1]);
$number2 = (int)($_POST[number2]);

if (isset($_POST[plus])) {
  $signButton = $_POST[plus];
  $resultat = $number1 + $number2;
} elseif (isset($_POST[minus])) {
  $signButton = $_POST[minus];
  $resultat = $number1 - $number2;
} elseif (isset($_POST[multiply])) {
  $signButton = $_POST[multiply];
  $resultat = $number1 * $number2;
} elseif (isset($_POST[divide])) {
  $signButton = $_POST[divide];
  if($number2 == 0){
    $resultat = "На ноль делить нельзя";
  } else {    
    $resultat = $number1 / $number2;
  }  
}

?>