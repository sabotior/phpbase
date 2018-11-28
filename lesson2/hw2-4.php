<?
function mathOperation($arg1, $arg2, $operation) {
  switch ($operation) {
    case "sum":
    return sum($arg1, $arg2);
     break;
    case "subtraction":
    return subtraction($arg1, $arg2);
     break;
    case "multiplication":
    return multiplication($arg1, $arg2);
     break;
    case "division":
    return division($arg1, $arg2);
     break;
     default: die("err");    
    }
}

echo mathOperation(7, 5, "sum");





function sum($a=0,$b=0) {
  return $a+$b;
}

function subtraction($a=0,$b=0) {
  return $a-$b;
}

function multiplication($a=0,$b=0) {
  return $a*$b;
}

function division($a=0,$b=0) {
  return $a/$b;
}
?>