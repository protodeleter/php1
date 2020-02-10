<html>

<head>
<title> домашнее задание </title>
</head>
<body>

<?php

var_dump (3/1);
echo '<br/>';

var_dump ('20cats' + 40);
echo '<br/>';

var_dump (18%4);
echo '<br/>';

echo ($a = 2);
// переменной $a присвоенно значение 2

echo '<br/>';
echo '<br/>';
echo '<br/>';

$x = ($y = 12) - 8;
echo '$x = '.$x;
echo '<br/>';
echo 'переменной $x присвоенно значение ($y = 12) - 8 '."<br />".' в свою очередь переменной $y присвоенно значение '."<br />".' 12 в результате переменной $x присваивается значение 12-8';
echo '<br/>';
echo '<br/>';
echo '<br/>';

var_dump (1 == 1.0);
echo 'выражение true потому что 1.0 это 1';
echo '<br/>';


var_dump (1 === 1.0);
echo 'выражение false потому что 1.0 это другой тип данных ( float )';
echo '<br/>';

var_dump ('02' == 2 );
echo 'выражение true потому что Строки и ресурсы переводятся в числа и "02" становится числом.';
echo '<br/>';

var_dump ('02' === 2 );
echo 'false потому что "02" это тип данных string и так как идет === сравнение типов определяет это выражение как false.';
echo '<br/>';

var_dump ('02' == '2' );
echo 'выражение true потому что Строки и ресурсы переводятся в числа и "02" и "2" становятся числами.';
echo '<br/>';

$x = true xor true;
var_dump($x);
echo 'выражение true потому что оператор xor выдаст значение true если хотя бы один из вариантов будет true';


echo '<br/>';

if ( 'Main' == $var ) {

}
$d = 0;
switch ($d){
    case $d >= 1 && $d <= 5:
        echo 'от 1 до 5';
        break;
    case $d > 5 && $d <= 7:
        echo 'от 5 до 7';
        break;
    default:
        echo 'неизветно';
}

if( false == $d ) {
    echo 'false';
}

//var_dump( (bool)$d );

?>
</body>

</html>


