<?php
// ----------------------------------------------1.繼承 所有屬性和方法 property and method,可更改method
class animal
{
    public $color = "black";
    function shout()
    {
        return "吼~~~";
    }
}

class cat extends animal
{
    function shout()
    {
        return "喵~~~";
    }
}

$cat = new cat;
echo $cat->color."\n";
echo $cat->shout()."\n";

// ----------------------------------------------2.method可同時繼承並更改parent::eat()
class animal2
{
    function eat()
    {
        echo "我要吃:";
    }
}

class lion extends animal2 {
    function eat(){
        parent::eat();
        echo '肉';
    }
}

$lion = new lion;
$lion->eat();

