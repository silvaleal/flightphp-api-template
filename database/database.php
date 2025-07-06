<?php

namespace Database;

use PDO;

class Database {
    public static function build()
    {
        return new PDO("mysql:host=localhost;dbname=arenabau", 'root', '');
    }
}