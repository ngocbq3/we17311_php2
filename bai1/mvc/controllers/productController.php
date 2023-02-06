<?php

function productAll()
{
    $sql = "SELECT * FROM hang_hoa";
    $products = getData($sql);
    include_once "views/product.php";
}
