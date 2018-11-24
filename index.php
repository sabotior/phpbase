<?php
echo "Hello, World!";
?>
<br>
<?
$name = "GeekBrains user Alex";
echo "Hello, $name!";
?>
<br>
<?php
define('MY_CONST', 100);
echo MY_CONST;
?>
<br>
<?php
$int10 = 42;
$int2 = 0b101010;
$int8 = 052;
$int16 = 0x2A;
echo "Десятеричная система $int10 <br>";
echo "Двоичная система $int2 <br>";
echo "Восьмеричная система $int8 <br>";
echo "Шестнадцатеричная система $int16 <br>";
?>
<?php
$precise1 = 1.5;
$precise2 = 1.5e4;
$precise3 = 6E-8;
echo "$precise1 | $precise2 | $precise3";
?>
<br>
<?php
$a = 1;
echo "$a<br>";
echo '$a<br>';
?>
<?php
$a = 10;
$b = (boolean) $b;
echo "$a<br>";
var_dump($b);
?>




