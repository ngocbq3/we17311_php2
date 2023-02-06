<?php

use Student as GlobalStudent;

class Student
{
    public $name;
    public $mark;

    public function __construct($name, $mark)
    {
        $this->name = $name;
        if ($mark > 100 || $mark < 0) {
            $this->mark = 0;
        } else {
            $this->mark = $mark;
        }
    }

    public function checkMark()
    {
        if ($this->mark >= 45) {
            echo "Sinh viên $this->name đã PASS môn<br>";
        } else {
            echo "Sinh viên $this->name đã Fail môn<br>";
        }
    }
}

$nam = new Student("Nam", 67);
$anh = new Student("Anh", 44);
$be = new Student("Bé", 1000);

$nam->checkMark();
$anh->checkMark();
$be->checkMark();
