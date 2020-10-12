<?php 
// ----------------------------------------------1.介面 必須執行介面interface裡的method，可以定義為對class物件的規範


interface action {
    public function run();
}

class animal implements action {
    function run(){
    }
}

// ----------------------------------------------2.

interface action2 {
    public function run();
    public function fast();
}

class animal2 implements action2 {
    function run() {
        $this->fast();
    }
    function fast() {
        
    }
}

class dog extends animal2 {
    function fast()
    {
        echo "hi\n";
    }
}

$dog = new dog;
$dog->run();
// ----------------------------------------------3. abstract虛擬類別

interface action3 
{
    public function run();
    public function fast();
}

abstract class animal3 implements action3 {
    function run() {
        $this->fast();
    }
}

class dog3 extends animal3{
    function fast(){
        echo "I'm so fast.";
    }
}

$dog3 = new dog3;
$dog3->run();