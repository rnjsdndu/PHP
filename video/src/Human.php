<?php

namespace SDH;
//SDH\Human

class Human
{
    public $name;
    public $hobbies = [];
    //멤버변수를 선언할 떄는 접근제어자와 변수이름만을 사용하면 된다.

    public function __construct(string $name , array $hobbies){
        $this->name = $name;
        $this->hobbies = $hobbies;

    }

    //메서드
    public function hasHobby(string $name){
        in_array($name , $this->hobbies);
    }
    
    public function insertHobby(string $hobby){
        $this->hobbies[] = $hobby;
    }
    
    public function setName(string $name){
        $this->name = $name;
    }
}
