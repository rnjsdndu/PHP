<?php
namespace SDH;

require_once("Human.php");

class Student extends Human
{
    public $code;

    public function __construct(string $name, array $hobbies, int $code)
    {
        parent::__construct($name, $hobbies);
        $this->code = $code;
    }

    public function setCode(int $code)
    {
        $this->code = $code;
    }
}