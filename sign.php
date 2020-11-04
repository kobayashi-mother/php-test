<?php

//:: 雙冒號 const /static /self
//static(靜態變數)：使用時不需要特別建立物件，就可以直接使用;
// ----------------------------------------------1.const

class MyClass
{
    const hi = 'hi MyClass';
}

$classname = 'MyClass';
// echo $classname::hi;
// echo MyClass::hi;


// ----------------------------------------------2.static

class Dog
{
    static $count = 0;
    protected static function bark()
    {
        echo 'i am a dog';
    }
}
// echo Dog::$count;
// echo Dog::bark();

class Cat extends Dog
{
}

// echo Cat::$count;
// echo Cat::bark();

// ----------------------------------------------3.self

class A
{
    static $count = 2;
    function haha()
    {
        echo "haha";
    }
    function diaoyoug()
    {
        echo self::$count;
        self::haha();
    }
}

// $A = new A;
// $A->diaoyoug();


