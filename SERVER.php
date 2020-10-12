<?php

// PHP常用 $_SERVER 伺服器變數(環境變數)
 
// PHP伺服器變數(環境變數)可以看到很多和伺服器本身相關的訊息
// 包含伺服器本身的環境、使用者資訊(IP、瀏覽器...等)
// 下面列出幾個是開發時常用的伺服器變數
 
//目前網頁所使用的URL
//例如：使用127.0.0.1/index.php，則出現127.0.0.1；使用localhost/index.php，則出現localhost
echo $_SERVER['HTTP_HOST'];
 
//網站所在的IP位址
echo $_SERVER['SERVER_ADDR'];
 
//目前連上這個網頁的使用者IP位置
echo $_SERVER['REMOTE_ADDR'];
 
//網站目前的根目錄
echo $_SERVER['DOCUMENT_ROOT'];
 
//目前PHP檔案路徑
echo $_SERVER['PHP_SELF'];
 
//目前PHP檔案路徑
echo $_SERVER['SCRIPT_NAME'];
 
//目前PHP檔案完整路徑(含根目錄路徑)
echo $_SERVER['SCRIPT_FILENAME'];
 
//使用者使用的瀏覽器類型
echo $_SERVER['HTTP_USER_AGENT'];

print_r($_SERVER);
 
// $_SERVER 本身是用陣列的方式存取資料
// 因此除了上述變數之外
// 另外也可以使用 print_r($_SERVER)的方式
// 來查詢有哪些可以使用的資訊
 
// 但有些內容得小心使用，例如：$_SERVER['path']這類的變數內容
// 因為一不小心就會被有心人士拿來做文章...
 