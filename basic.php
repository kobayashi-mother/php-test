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

// -------------------------------------------------------------喵喵
// $order_no_arr =[];
// $retrieve_order_no ='a';
// $retrieve_order_b ='b';

// $order_no_arr[$retrieve_order_no] =  $retrieve_order_no;
// $order_no_arr[$retrieve_order_b] =  $retrieve_order_b;
// print_r($order_no_arr);

// ------------------------------------------------------------- DOMDocument 是php內建的，可以輸出xml檔案
// $dom = new DOMDocument('1.0', 'utf-8');
// $doc->formatOutput = true;
// $element = $dom->createElement('test', 'This is the root element!');
// $dom->appendChild($element);

// $element = $dom->createElement('test', 'This is the root element!');
// $dom->appendChild($element);

// $domTN = $dom->createTextNode('GeeksforGeeks'); 
// $dom->appendChild($domTN); 




// echo $dom->saveXML();
// ------------------------------------------------------------- DOMDocument 是php內建的，可以輸出xml檔案2
// $doc = new DOMDocument('1.0','UTF-8');
// $doc->formatOutput = true;
// $Element = $doc->createElement('test');
// $Element->setAttribute("stat", "ok");
// $doc->appendChild($Element);
// $content = $doc->createTextNode('1234');
// $doc->appendChild($content);

// echo $doc->saveXML();
// ------------------------------------------------------------- DOMDocument 是php內建的，可以輸出xml檔案3
// $doc = new DOMDocument('1.0','UTF-8');
// $root = $doc->createElement('rsp');
// $root->setAttribute("stat", "fail");
// $root = $doc->appendChild($root);
// $errNode = $doc->createElement('err');
// $errNode->setAttribute("code", '123');
// $errNode->setAttribute("msg", 'msgg');
// $errNode = $root->appendChild($errNode);
// echo $doc->saveXML();

