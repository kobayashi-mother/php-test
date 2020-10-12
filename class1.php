<?php 

// ----------------------------------------------1.使用物件中的方法(method)
class test {
    function hello(){
        echo "hello world";
    }
}

$test = new test; //宣告轉物件

// $test->hello(); //使用物件中的method

// ----------------------------------------------2.宣告可定義值也可不定義
class car{
    public $color;
    public $engine;
    public $transmission;
    public $door;
}

class cars{
    public $color = 'blue';
    public $engine = '3000cc';
    public $transmission = '6speed';
    public $door = 4;
}

$cars = new cars; 

// echo $cars->color;

// ----------------------------------------------3.使用宣告中的屬性
class carr {
    public $hello = "hello world carr"; //此為屬性非變數
    function hello() {
        echo $this->hello; //在物件中取屬性$this->hello代表該物件的hell屬性
    }

    function weNeedHello() {
        $this->hello(); //使用同物件的其他方法
    }
    
    function name() {
        echo $this->name = "sam"; //自訂屬性
    }
}
$carr = new carr;

// $carr->hello();

// $carr->weNeedHello();

// $carr->name();

// ----------------------------------------------4.屬性沒有定義===null
class Father
{   
    public $a;
}

// $father= new Father;
// if ($father->a === null){
//     echo 'yes';
// }else{
//     echo 'no';
// };
