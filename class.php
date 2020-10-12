<?php
// ----------------------------------------------1.class 物件

class Hero
{
    public $name;
    public $stats_hp;
    public $stats_mp;
    public $skill_1;
    public $skill_2;
    public $article;
}

$heroBox = new Hero();

$heroBox->name = "shelly";
$heroBox->stats_hp = "300";
$heroBox->stats_mp = "200";
$heroBox->skill_1 = "火球術";
$heroBox->skill_2 = "暴風雪";
$heroBox->article = "這角色很難練";

echo $heroBox->name;


