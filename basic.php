<?php
// -------------------------------------------------------------
// $a = [
//     'a' => '1',
//     'b' => '2',
//     'c' => '3',
//     'd' => '4'
// ];
// $b= [];

// foreach($a as $k=>$v){
//     $b[] = $k;
// }
// print_r($b);

// -------------------------------------------------------------如果沒有定義變數，變數不存在，不會等於空字串
// $type = 'aa';

// switch ($type) {
//     case 'point':
//       $sqlSelect  = 'invoice_point_record';
//       break;
//     case 'account':
//       $sqlSelect  = 'invoice_account_record';
//       break;
//     case 'transaction':
//       break;  
//     case 'collect':
//       break;
//     case 'theme':
//       $sqlSelect = 'getThemePaymentRecord';
//       break;
//     default:
//       $sqlSelect  = '';
//       break;
//   }

//   if ($sqlSelect == ''){
//       echo 'yes';
//   }
// -------------------------------------------------------------.=字串連接
// $a = "SDSD";

// $a .="sas";

// echo $a;
// -------------------------------------------------------------+=數字相加
// $a = 1;
// $b = 2;
// $a += 5;
// echo $a;

// -------------------------------------------------------------array可以不用宣告/變數可以不用宣告
// $a = [1, 2, 3, 4];

// foreach ($a as $k => $v) {
//     $b[] = $k;
//     $point += 1;
// }
// print_r($b);
// echo $point;

$a = [1, 2, 3, 4];
$i = 0;
while($i<count($a))
{
  $q_data[$pointtypearr[$a[1]]]+=$a[0];
  $alterpoint += $a[0];
  $i++;  
}

echo $alterpoint;