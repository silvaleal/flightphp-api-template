<?php

namespace App\Models;

use Carbon\Carbon;
use Database\Database;
use PDO;

class Payment
{

    public PDO $connect;

    public function __construct()
    {
        $this->connect = Database::build();
    }

    public function create()
    {
        $query = "INSERT INTO payments (product, price) VALUES (:product, :price)";

        $stmt = $this->connect->prepare($query);
        $stmt->execute([
            'product' => 1,
            'price' => 10,
        ]);
        return $stmt->rowCount();
    }

}