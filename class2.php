<?php

// 而使用範圍由大到小
// static(靜態變數) > public(公有變數) > protected > private(私有變數)

//static(靜態變數)：使用時不需要特別建立物件，就可以直接使用;
// public(開放成員)：不論在物件本體，或是外部程式，都可以使接使用。
// private(私有成員)：僅在該物件本體可以使用，外部程式或繼承於本物件之子類別無法使用。
// protected(保護成員)：僅外部程式無法叫用，但物件本體及繼承的子類別均可使用。

// ----------------------------------------------4.public
class car
{
    public $color = 'red';
}

$car = new car;
// echo $car->color;
// $car->$color = 'yellow';
// echo $car->color;

// ----------------------------------------------5.private
class cars
{
    private $_color = 'red';
}

$cars = new cars;
//以下都會跑錯誤
// echo $cars->_color;
// $cars->color = 'yellow';  
// echo $cars->color;

// ----------------------------------------------6.private要加底線_
class bus
{
    private $_color = "pink";
    function color()
    {
        return $this->_color;
    }
}

$bus = new bus;
// echo $bus->color();
// ----------------------------------------------7.
class airplane
{
    function look()
    {
        $this->_color();
    }
    private function _color()
    {
        echo $this->name = 'sam';
    }
}

$airplane = new airplane;
// $airplane ->look();

// ----------------------------------------------8.static

class Father
{
    static $name = "Jason";
}

// echo Father::$name;


// ----------------------------------------------9.ReflectionClass反射類別，讀取指定類別的資料
class myClass {
    const NONE = 0;
    const REQUEST = 100;
    const AUTH = 101;
    // others...
    static function getConstants() {
        $oClass = new ReflectionClass(__CLASS__);
        return $oClass->getConstants();
    }
}


// print_r(myClass::getConstants());





