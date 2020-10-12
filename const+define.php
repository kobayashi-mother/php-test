<?php
//<常數>
//定義時 前面不用$/大寫
//定義後 不能更改內容/無法刪除
//const  可使用於class  |不可使用於條件示 |使用::取得值
//define 不能使用於class|可使用於條件示   |全域性可用

// constant() 來獲取常量的值。
// get_defined_constants() 可以獲得所有已定義的常量列表。

// ----------------------------------------------1.const

const A_A = "hi a";

// echo A_A;

//error不可使用於條件示/////////////
// if (true){
//     const B_B = "hi b";
// }

class Dog {
    const DOG_A ="dog-a";

    function cat() {
        echo self::DOG_A;
    }
}

// echo Dog::DOG_A;

// $className = "Dog";
// echo $className::DOG_A;

// $foo = new Dog();
// $foo->cat();

// ----------------------------------------------2.define

define('CONST_A', 'a');

if (true) {
    define('CONST_B', 'b');
}

//Warning://///////////
if (false) {
    define('CONST_C', 'C');
}


// echo CONST_A;
// echo CONST_B;
// echo CONST_C;

// ----------------------------------------------3.constant()

define('CONSTANT_A', 'a');

// echo constant('CONSTANT_A');

class Bm{
    const test = 'b';
}

interface Cm{
    const test = 'c';
}

$const = 'test';

// echo constant('Bm::'.$const);
// echo constant('Cm::'.$const);

