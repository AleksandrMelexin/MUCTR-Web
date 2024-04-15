<?php
$test = true;
var_dump($test);
echo '<br>';
$test2 = -321;
var_dump($test2);
echo '<br>';
$test3 = '-321;';
var_dump($test3);
echo '<br>';
echo '<pre>';
print_r($_GET);
print_r($_POST);
print_r($_REQUEST);
print_r($_COOKIE);
print_r($_SESSION);
print_r($_FILES);
//print_r($_SERVER);
echo '</pre>';
const TEST_CONSTANT = 2;
echo TEST_CONSTANT;
echo '<br>';

// арифметические операции
// + - / * %
// операции присваивания
// = += -= *= /= .=
$a = 2;
$a *= 3;
// строковые операции
// .
echo $a . ' test' . '<br>';
// операции сравнения
// > < <= >= != == === !==
// операции инкримента/декримента
// ++ --
$a = 10;
echo $a++ . '<br>';
echo $a . '<br>';
// логические операции
// ! && (and) || (or) xor
$c = 6;
if ($c > 4) {
    $result = 'yes';
} elseif ($c == 4) {
    $result = '4';
} else {
    $result = 'no';
}
echo $result . '<br>';
echo "<br>";
echo "<br>";
$e = $result == 'yes >' ? 4 : 2;
echo $e;
echo "<br>";
echo "<br>";
switch ($c) {
    case 4:
        echo $c . '<br>';
        break;
    case 5:
        echo $c + $c . '<br>';
        break;
    default:
        echo 'no' . '<br>';
}
$d = 1;
while ($d < 10) {
    echo $d . '<br>';
    $d++;
}

do {
    echo $d . '<br>';
} while (--$d < 9 xor $d > 0);

for ($i = 0; $i < 10; $i += 2) {
    echo $i . '<br>';
}

$arr = [1, 2, 3, 4];
foreach ($arr as $key => $val) {
    $arr[$key] = 1;
    echo $key . ' ' . $val . '<br>';
}

$arr = [
    'key1' => 'val1',
    'key2' => 'val2',
    'key3' => [
        'key21' => 'val21',
        'key22' => 'val22',
        'key23' => 'val23',
    ],
    'key4' => 'val4',
];
foreach ($arr as $key1 => $val1) {
    if (is_array($val1)) {
        foreach ($val1 as $key2 => $val2) {
            continue;
            echo "$val2 <br>";
        }
    } else {
        echo "$val1 <br>";
    }
}
$f = 0;
if (isset($f)) {
    $e = $f;
} else {
    $e = 'no f';
}
//$e = isset($f) ? $f : 'no f';
//$e = $f ?? 'no f'; // isset()
$e = $f ?: 'no f'; // empty()
echo "$e <br>";

