<a href="index.php">Home</a>
<h2>Home work 1-3</h2>

<?
    $a = 5;
    $b = '05';
    echo '$a = ' . $a . '<br>';
    echo '$b = "' . $b . '"<br>';
    echo '$a == $b // ';
    var_dump($a == $b);         // Почему true?
    echo ' // php автоматически переводит строку $b в число, сравнивает значения<br>';
?>
<br>
<?
    echo '012345 <br>';
    var_dump((int)'012345');     // Почему 12345?
    echo ' // функция int преобразует строку 012345 в число 12345<br>';
?>
<br>
<?
    echo '(float)123.0 === (int)123.0)<br>';
    var_dump((float)123.0 === (int)123.0); // Почему false?
    echo ' // слева - тип данных float, справа - функция int преобразует в целое число 123.
     И сравнивает не только значение, но и типы данных<br>';
?>
<br>
<?
    echo '(int)0 === (int)"hello, world"<br>';
    var_dump((int)0 === (int)'hello, world'); // Почему true?
    echo ' // функция int преобразует строку "hello, world" в число 0<br>';
?>