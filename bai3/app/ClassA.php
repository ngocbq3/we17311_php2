<?php

namespace App;

class ClassA implements InterfaceModel
{
    public function show()
    {
        echo "Hiển thị sản phẩm";
    }
    public function insert($name)
    {
        echo "<br />Insert sản phẩm $name thành công";
    }
    public function create($color)
    {
        echo "<br />Create Property $color thành công";
    }
}
