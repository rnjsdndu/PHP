<?php

//dirname(__DIR__)//해당 파일이 존재하는 폴더
//echo __DIR__; //현재 폴더
//echo __FILE__; //현재 파일
//echo __LINE__; //현재 코드가 출력되는 라인 (ex:5

date_default_timezone_set("Asia/Seoul");

session_start(); 

define("__ROOT" , dirname(__DIR__)); //c:\xmapp\htdocs



require_once( __ROOT . "/autoloader.php");
require_once( __ROOT . "/web.php");

$a = new SDH\Student("여권우" , ["프로그래밍" , "게임"] , 10);




// echo $_SERVER["REQUEST_URI"];




// echo "<pre>";
// var_dump($a);
// "</pre>";

// require_once("Human.php");
// $h1 = new Human("여권우" , ["프로그래밍" , "게임"]);

// $h2 = new Human("서울디지텍" , ["첫번째 취미" , "두번째 취미"]);

// $h3 = clone $h2;

// $h3-> setName("변형된 서울 디지텍");



// echo "<pre>";
// var_dump($h1);
// var_dump($h2);
// var_dump($h3);
// "</pre>";