<?php

// ----------------------------------------------露天function

function getTableIdbyUserNick($userNick){
    $sum = 0;
    for ($i=0;$i<strlen($userNick);$i++) {
      $chr = substr($userNick, $i, 1);
      $sum += ord($chr);
    }
    $sum = $sum%50;
    return $sum;
  }

 echo getTableIdbyUserNick("testuser_pa4_demo_2@ebay");
