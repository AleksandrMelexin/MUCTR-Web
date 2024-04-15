<?php

//include include_once require require_once

//include($_SERVER['DOCUMENT_ROOT'] . '/test.php');
echo $_SERVER['DOCUMENT_ROOT'], '<br>';
/**
 * @param float $a
 * @param float $b
 * @return float
 */
function sum(float $a, float $b = 0): float {
    $c = $a + $b;
    echo $a, $b, $c, '<br>';
    return $c;
}
function sum1(): float {
    global $a, $b, $c;
    $c = $a + $b;
    echo $a, $b, $c, '<br>';
    return $c;
}
$a = 1;
$b = 5;
$c = 4;
echo sum1(), '<br>';
echo $a, $b, $c, '<br>';

class TestClass{
    const CONSTANT_TEST = 1;
    private $param1 = 'val1';
    protected $param2;
    public $param3;
    public function func1 (){
        $this->param2 = 'val2';
        return 'this is func1';
    }
    function __construct($a, $b){
        $this->param3 = $a + $b + self::CONSTANT_TEST;
    }
}

class TestClassExtended extends TestClass {
    public function func2(){
        return 'this is func2';
    }
}
$TestClass = new TestClass(4, 2);
echo $TestClass -> func1(), '<br>';
echo $TestClass -> param2, '<br>';
echo $TestClass -> param3, '<br>';
$TestClassExtended = new TestClassExtended(2, 2);
echo $TestClassExtended -> param3, '<br>';