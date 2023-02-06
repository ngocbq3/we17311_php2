<?php

namespace App\Models;

use PDO;
use PDOException;

class BaseModel
{
    protected $conn;
    protected $sqlBuilder;

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=localhost; dbname=we3014.01; charset=utf8", "root", "");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function all()
    {
        $model = new static;
        $model->sqlBuilder = "Select * From " . $model->tableName;
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }

    public function insert($arr = [])
    {
        $this->sqlBuilder = "INSERT INTO $this->tableName(";
        $cols = "";
        $values = "";
        foreach ($arr as $col => $value) {
            $cols .= "`" . $col . "`, ";
            $values .= ":{$col}, ";
        }

        $cols = rtrim($cols, ", ");
        $values = rtrim($values, ", ");

        $this->sqlBuilder .= $cols . ") VALUES(" . $values . ")";

        $stmt = $this->conn->prepare($this->sqlBuilder);
        $stmt->execute($arr);
    }
}
