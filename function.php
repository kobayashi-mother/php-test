<?php
// ----------------------------------------------1. function放置在哪裡都能執行

// hi();
function hi()
{
  echo "say hello";
}
// ----------------------------------------------1-2讀取資料 可看 memory_limit

// phpinfo();

// ----------------------------------------------2. php內建function

// ----------------------------------------------assert()65656566565656565656６５６５６５６５６５
// print "Stage 1\n";
// assert(1 == 1);
// print "Stage 2\n";
// assert(1 == 2);
// print "Stage 3\n";

// ----------------------------------------------filter_has_var()
// if(!filter_has_var(INPUT_GET, "name"))
//  {
//  echo("Input type does not exist");
//  }
// else
//  {
//  echo("Input type exists");
//  }
// ----------------------------------------------htmlspecialchars () --轉換 HTML 特殊符號><'"為僅能顯示用的編碼
// echo htmlspecialchars("One line.<Another line.") ;

// ----------------------------------------------nl2br() --\n換行符號轉為html的<br/>
// echo nl2br("One line.\nAnother line.") ;

// ----------------------------------------------serialize() 

// $sites = 'rutentest606';
// $serialized_data = serialize($sites);
// echo  $serialized_data;

// ----------------------------------------------file_get_contents() 取得文件的內容

// echo file_get_contents('word.html');


// ----------------------------------------------strval() int 轉字串

// var_dump(strval(123));


// ----------------------------------------------microtime 取得毫秒函式 專換成 unix時間戳
// TRUE 的意思指的是返回[浮點數字的毫秒]
// 如果是預設顯示 [秒]+[小數點毫秒]
// echo $startTime = microtime(TRUE);
// // 暫停2秒
// sleep(2);
// //結束時間
// $endTime = microtime(TRUE);
// //顯示時間
// echo $endTime - $startTime.'秒';
// ----------------------------------------------%.8f 小數點後第8位四捨五入
// echo $m_serial = microtime(true) . '秒';
// echo $m_serial33 = (microtime(true)/100000) . '秒';
// echo $m_serial2 = sprintf('%.8f',microtime(true)/100000). '秒\n';
// echo $m_serial3 = substr(sprintf('%.8f',microtime(true)/100000),6,8);

// ----------------------------------------------file_exists("word.html") 可檢查 檔案 與 目錄 是否存在
$path = 'C:\xampp\htdocs\test-php';
$path2 = 'C:\xampp\htdocs\test-php\word.html';

if (file_exists($path) && file_exists($path2)) {
  // echo "path and path2 are yes";
}

// ----------------------------------------------is_file() 只可檢查 檔案 是否存在
if (is_file($path2)) {
  // echo "only path2 yes";
}

// ----------------------------------------------is_dir() 只可檢查 目錄 是否存在
if (is_dir($path)) {
  // echo "only path yes";
}

// ----------------------------------------------glob() 可列出有.html的檔案，頁簽有更詳細的用法

foreach (glob("*.html") as $fileName) {
  // echo $fileName."\n";
}

// print_r(glob("*.html"));
// print_r(glob("sign*"));


// -----------------basename()--去掉路徑顯示檔名
// $path = "good/sad/arry.php";
// echo basename($path)."\n";
// echo basename($path,".php");


// ----------------------------------------------fopen 用php寫文件
$file = fopen("test.txt", "w");
// echo fwrite($file,"Hello World. Testing!"); 
// fclose($file); 


// ----------------------------------------------error_log()
$str = 'this is error log\r\n';
// error_log($str,3,'errors.log');

// ----------------------------------------------Passing by Reference &array

// function changeString( &$sTest1, $sTest2, $sTest3 ) {
//   $sTest1 = 'changed';
//   $sTest2 = 'changed';
//   $sTest3 = 'changed';
// }
// $sOuterTest1 = 'original';
// $sOuterTest2 = 'original';
// $sOuterTest3 = 'original';
// changeString( $sOuterTest1, $sOuterTest2, &$sOuterTest3 );
// echo( "sOuterTest1 is $sOuterTest1\r\n" ); //changed
// echo( "sOuterTest2 is $sOuterTest2\r\n" ); //original
// echo( "sOuterTest3 is $sOuterTest3\r\n" ); //changed

// ----------------------------------------------base64_decode 亂碼大小寫英26+26數字0-9 = 64
$creditCardNumber = '122224455';
// echo $shelly = base64_encode($creditCardNumber) . "\n\r";
// echo base64_decode($shelly);

// ----------------------------------------------strtotime 時間轉成時間搓
$NowTime = date("Y-m-d H:i:s");
// echo $NowTime;
// echo strtotime("$NowTime,now"), "<br>";
// echo strtotime("now"), "<br>";
// echo strtotime("10 September 2014"), "<br>";
// echo strtotime("+1 day"), "<br>";
// echo strtotime("+1 week"), "<br>";
// echo strtotime("+2 week 3 days 2 hours 5 seconds"), "<br>";
// echo strtotime("next Thursday"), "<br>";
// echo strtotime("last Monday"), "<br>";

// ----------------------------------------------date_create()字串轉date /date_format 日期轉格式
$date = date_create("2016-09-25");
// echo date_format($date,"Y/m/d H:i:s");

// ----------------------------------------------date() 日期
$day = date('yy-m-d h:i:s');
// echo $day;

// ----------------------------------------------str_pad 字串填補
$str = "Hello World";
// echo date("Ym").str_pad($str,30,".",STR_PAD_LEFT);

// ----------------------------------------------extract 陣列變數化
$a = "Original";
// $my_array = array("a" => "Cat","b" => "Dog", "c" => "Horse");
// extract($my_array);
// echo "a = $a; b = $b; c = $c";

// ----------------------------------------------ob 可以把内容保留在伺服器的緩衝區中
ob_start();
echo("Hello there!"); //would normally get printed to the screen/output to browser
$output = ob_get_contents();
ob_end_clean();

// echo $output;

ob_start();
echo("Hello mom!");
$outoutput = ob_get_clean();
// echo $outoutput;

// ----------------------------------------------mkdir建立資料夾
$file_path = "C:/xampp/htdocs/test-php/albertlog";

// if(!file_exists($file_path)){
//  mkdir($file_path);
//  echo "“建立資料夾成功”";
// }else{
//  echo "“資料夾已存在”";
// }

// ----------------------------------------------class_exists('class', false) 確認class有沒有在，如不使用 __autoload 第二個參數設定 false
class myClass{
  
}
if (class_exists('myClass', false)) {
  echo 'hi';
}

