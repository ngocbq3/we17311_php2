<?php

namespace App;

class ClassB implements InterfaceModel
{
    public function show()
    {
        echo "<br>Nội dung bài viết ABC";
    }
    public function insert($name)
    {
        echo "<br />bạn vừa thêm bài viết $name";
    }
    public function create($color)
    {
        echo "<br />Bạn vừa tạo mới thuộc tính màu sắc cho bài được đánh giá tốt nhất là $color";
    }
}
