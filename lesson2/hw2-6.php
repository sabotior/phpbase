<?
function power($val, $pow){  
  if ($pow > 1) {
    $val *= power($val, $pow-1);
  }
  return $val;
}
echo power(2, 8);
?>