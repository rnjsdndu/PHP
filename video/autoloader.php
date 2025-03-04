<?php

// function myLoader(string $name)
// {
//     $prefix = "SDH\\";
//     $base_dir = __ROOT . "/src/";
//     $prefixLen = strlen($prefix);
//     //strlen은 문자열의 길이를 재는 함수다. 4가 나온다.

//     //strncmp는 처음시작하는 n개의 문자만 비교하는 함수다. $name이 SDH\로 시작하는지를 검사사
//     if(strncmp($prefix, $name, $prefixLen) === 0){
//         $realName = substr($name, $prefixLen); //앞에서 prefix만큼 잘라낸다.
//         $realName = str_replace("\\" , "/" , $realName);
//         $file = "{$base_dir}{$realName}.php";
//         if(file_exists($file))
//         {
//             require_once ($file);
//         }
//     }

// }

//기능대회 ver
//각 폴더의 namespace를 src로 바꾼다

function myLoader(string $name)
{
    require_once __ROOT . "/" . str_replace('\\' , '/' , $name) . "php";
}

spl_autoload_register("myLoader");