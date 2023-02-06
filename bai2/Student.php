<?php

class Student
{
    public $name = 'Minh';
    public $age = 22;
    public $address = "Hà Nội";

    public function hello()
    {
        echo "Xin chào {$this->name}<br />";
    }

    public function infoStudent()
    {
        echo "Thông tin sinh viên: $this->name có tuổi $this->age Ở $this->address <br />";
    }
}

$student = new Student;
$student->name = "Lâm";
// var_dump($student);

$student->hello();
$student->infoStudent();
$student2 = new Student;
$student2->hello();
$student2->infoStudent();
