
<?php

    class Database {

        protected $database;

        protected function __construct() {
            try {
                $this->database = new PDO("mysql:host=your-hostname;dbname=your-database;charset=utf8", "your-username", "your-password");
            } catch (PDOException $exception) {
                exit;
            }
        }
    };

?>
