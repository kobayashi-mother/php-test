<?php


// -----------------foreach 

// $foreach_array = [77 , 56 , 94 , 84 ,35 , 60];

// $arrRs = [];
// foreach ($foreach_array as $keys => $row) {
//             $arrRs[$keys]['Platform'] = (string) $row;
//             $arrRs[$keys]['SourceClass'] = (string) $row;
//             $arrRs[$keys]['Ban'] = (string) $row;
//             $arrRs[$keys]['BanComment'] = (string) $row;
// }

// print_r($arrRs["Platform"]);

// -----------------count($a) --計算array數量
// $a = ['a','b'];

// echo count($a);

// ----------------- +/+= --array相加(key一樣，前蓋後，包含數字)

// $a = ['a' => 1, 'b' => 2];
// $b = ['c' => 3, 'b' => 4];
// $c = $a + $b;
// $a += $b;


// $a = [1, 2];
// $b = [3, 4];
// $c = $a + $b;

// print_r($c);
// print_r($a);
// -----------------array_merge($arr_a, $arr_b) --key一樣，後蓋前，不包含數字

// $a = ['a' => 1, 'b' => 2];
// $b = ['c' => 3, 'b' => 4];
// $c = array_merge($a, $b);

// $a = [1, 2];
// $b = [3, 4];
// $c = array_merge($a, $b);

// print_r($c);

// $arr_a = array('a'=>1, 'b'=>2, '1'=>3);
// $arr_b = array('b'=>1, 4, 5);
// var_dump(array_merge($arr_a, $arr_b));

// -----------------preg_match_all("/./u", $NewString, $arr) --字串拆解成array

// $NewString = 'aaa你好';
// preg_match_all("/./u", $NewString, $arr);
// print_r($arr[0]);

// -----------------explode(" ", $addString) --字串拆解成array

// $addString = 'aaa   你 好';
// $b = explode(" ", $addString);
// print_r($b);

// ----------------------------------------------------------------------------------------------------------------------
// ----------------------------------------------------------------------------------------------------------------------


// $a = [];
// // $i = "車";
// foreach ($arr[0] as $key => $row) {
//     // $a[] = sprintf('tag_name LIKE %s', $row);
//     $a[$key] = 'tag_name LIKE ' . "'%$row%'";
//     // $a[$key] = $row;
// }

// print_r($a);

// $c = [];
// foreach ($b as $key => $row) {
//     $c[$key] = ' AND tag_name LIKE ' . "'%$row%'";
// }
// print_r($c);


// ----------------------------------------------------------------------------------------------------------------------
// ----------------------------------------------------------------------------------------------------------------------
$a = ['a' => '1', 'b' => '1'];
$b = ['aaaaa' => 'c', 'abb' => 'f'];
$c = ['a', 'b', 'c'];
$b = ['a', 'b', 'c'];

// -----------------array_splice($a,2,0,$b)

// array_splice($c,0,1);

// print_r($c);
// print_r($b);

// -----------------unset($a['a'],$a['b'])

// unset($a['a'],$a['b']);
// unset($c[0]);
// array_values($c);
// print_r($c);

// -----------------in_array("dd", $Arr)--找陣列中相同的元素，字一定要相同

// $Arr = array("aaa", "bbb", "ccc");
// if (in_array(basename("565/545/aaa"), $Arr)) {
//     echo "in arr";
// }

// -----------------array_search("Dog",$a)

// $a=array("vvvDog","Cat","Horse");
// echo array_search("Dog",$a);

// -----------------正則表達示
// $pattern = "/(^886\-)\d{2,3}\-\d{7,8}$/";
// $string = "886-09-12334567";
// preg_match($pattern, $string, $matches);
// echo $matches[0]; // 886-09-12334567
// var_dump(preg_match($pattern, $string));


// $pattern = "/\.//";
// $string = "\/mnt\/s3\/daigou_cs\/ebay\/2018\/05\/EB180521000006_83_1.jpg";
// $result2 = str_replace("\/","/",$string);
// echo $result2;

// -----------------array_fill() 製造陣列
$row = array_fill(0, 10, "-");

// print_r($row);

