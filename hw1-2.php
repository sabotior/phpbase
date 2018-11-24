<a href="index.php">Home</a>
<h2>Home work 1-2</h2>

<?
echo "Hello, World!";
?>
<br>
<?
$name = "GeekBrains user Alex";
echo "Hello, $name!";
?>
<br>
<?
define('MY_CONST', 100);
echo MY_CONST;
?>
<br>
<?
$int10 = 42;
$int2 = 0b101010;
$int8 = 052;
$int16 = 0x2A;
echo "Десятеричная система $int10 <br>";
echo "Двоичная система $int2 <br>";
echo "Восьмеричная система $int8 <br>";
echo "Шестнадцатеричная система $int16 <br>";
?>
<?
$precise1 = 1.5;
$precise2 = 1.5e4;
$precise3 = 6E-8;
echo "$precise1 | $precise2 | $precise3";
?>
<br>
<?
$a = 1;
echo "$a<br>";
echo '$a<br>';
?>
<?
$a = 10;
$b = (boolean) $b;
echo "$a<br>";
var_dump($a);
var_dump($b);
?>
<br>
<?
$a = 'Hello,';
$b = 'world';
$c = $a ." ". $b;
echo $c;
?>
<br>
<?
$a = 4;
$b = 5;
echo "$a + $b = " . ($a + $b) . ' сложение<br>';    // сложение
echo "$a * $b = " . ($a * $b) . ' умножение<br>';    // умножение
echo "$a - $b = " . ($a - $b) . ' вычитание<br>';    // вычитание
echo "$a / $b = " . ($a / $b) . ' деление<br>';  // деление
echo "$a % $b = " . ($a % $b) . ' остаток от деления<br>'; // остаток от деления
echo "$a ** $b = " . ($a ** $b) . ' возведение в степень<br>'; // возведение в степень
?>
<br>
<?
$a = 4;
$b = 5;
$a += $b;
echo 'a = ' . $a;
?>
<br><br>
<?
$a = 0;
echo '$a = ' . $a . '<br>';
echo ++$a . '   // ++$a Преинкремент<br><br>';    // Преинкремент: 0+1=1, потом вывод 1

echo '$a = ' . $a . '<br>'; //1
echo $a++ . '   // $a++ Постинкремент<br><br>';    // Постинкремент: вывод 1, потом 1+1=2

echo '$a = ' . $a . '<br>';//2
echo $a-- . '   // $a-- Постдекремент<br><br>';     // Постдекремент: вывод 2, потом 2-1=1

echo '$a = ' . $a . '<br>';//1
echo --$a . '   // --$a Предекремент<br>';   // Предекремент: 1-1=0, потом вывод 0
echo '$a = ' . $a . '<br>';
?>
<br><br>
<?php
echo '$a = ' . ($a = 4) . '<br>';
echo '$b = ' . ($b = 5) . '<br>';
echo '$a == $b // ';
var_dump($a == $b);  // Сравнение по значению
echo '<br>';
echo '$a === $b // ';
var_dump($a === $b); // Сравнение по значению и типу
echo '<br>';
echo '$a > $b // ';
var_dump($a > $b);    // Больше
echo '<br>';
echo '$a < $b // ';
var_dump($a < $b);    // Меньше
echo '<br>';
echo '$a <> $b // ';
var_dump($a <> $b);  // Не равно
echo '<br>';
echo '$a != $b // ';
var_dump($a != $b);   // Не равно
echo '<br>';
echo '$a !== $b // ';
var_dump($a !== $b); // Не равно без приведения типов
echo '<br>';
echo '$a <= $b // ';
var_dump($a <= $b);  // Меньше или равно
echo '<br>';
echo '$a >= $b // ';
var_dump($a >= $b);  // Больше или равно
?>







