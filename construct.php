<?php

// ----------------------------------------------1.讀取資料 可看 memory_limit
// phpinfo();

// ----------------------------------------------2.construct
// 當物件生成的同時，強制預先去實作執行物件本身的功能

// 1.建構式僅用來做為設置預設屬性值的存在。
class car
{
    function __construct($name)
    {
        echo $this->name = $name;
    }
}

// $car = new car('sam');

// 2.建構式僅用來做為預載函式功能執行的存在：

class carss
{
    function __construct()
    {
        $this->color();
    }
    function color()
    {
        echo "this is black";
    }
}
// $car = new carss;


// ----------------------------------------------3.construct+parent::

class Father
{   
    public $a;
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Child extends Father
{
    public $age;
    public $male;

    function __construct($age, $male)
    {
        parent::__construct("shelly");
        $this->age = $age;
        $this->male = $male;
    }

    function printName()
    {
        print($this->name . " is " . $this->age . ",and she is a " . $this->male);
    }
}

$child = new Child("21", "girl");
$child->printName();


