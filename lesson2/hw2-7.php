<?
function timeNow(){  
 
  $hm = getdate();

   switch ("$hm[hours]" % 10) {
    case 1:
    $hName="час";
    break;
    case 2:
    $hName="часа";
    break;
    case 3:
    $hName="часа";
    break;
    case 4:
    $hName="часа";
    break;
    default:$hName="часов";
  }
 
  switch ("$hm[minutes]" % 10) {
    case 1:
    $mName="минута";
    break;
    case 2:
    $mName="минуты";
    break;
    case 3:
    $mName="минуты";
    break;
    case 4:
    $mName="минуты";
    break;
    default:$mName="минут";
  }

echo "$hm[hours] $hName $hm[minutes] $mName";

}
timeNow();
?>