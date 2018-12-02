<?
echo notSpace ('Привет, Как дела?');
function notSpace ($text) { 
  
$text_ = implode("_",explode(" ",$text));
return $text_;
}
?>