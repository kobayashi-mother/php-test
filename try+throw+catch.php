<?php

// ----------------------------------------------1.new Exception()
// ----------------------------------------------2.throw 至少要被一個catch抓到

$a = 4;

function checkNum($number)
{
    if ($number > 1) {
        throw new Exception("hi");
    }
}

//沒有被catch抓到會跑出錯誤
// checkNum($a); 

try {
    checkNum($a);
} catch (Exception $e) {
    echo 'Message:' . $e->getMessage();
}


// ----------------------------------------------3.Exception

// class Exception
// {
//     protected $message = 'Unknown exception';   // 異常信息
//     protected $code = 0;                        // 用戶自定義異常代碼
//     protected $file;                            // 發生異常的文件名
//     protected $line;                            // 發生異常的代碼行號
//     function __construct($message = null, $code = 0);
//     final function getMessage();                // 返回異常信息
//     final function getCode();                   // 返回異常代碼
//     final function getFile();                   // 返回發生異常的文件名
//     final function getLine();                   // 返回發生異常的代碼行號
//     final function getTrace();                  // backtrace() 數組
//     final function getTraceAsString();          // 已格成化成字符串的 getTrace() 信息
//     /* 可重載的方法 */
//     function __toString();                       // 可輸出的字符串
// }

// ----------------------------------------------3.自訂Exception


// class myException extends Exception
// {
//     public function errorMessage()
//     {
//         $errM = 'line:' . $this->getLine() . 'in' . $this->getFile() . 'email:' . $this->getMessage();
//         return $errM;
//     }
// }

// $email = "someone@example...com";

// try {
//     if (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
//         throw new myException($email);
//     }
// } catch (myException $e) {
//     echo $e->errorMessage();
// }
