
<?php

    require_once("Models/Database.php");

    class Requests extends Database {

        public function __construct() {
            parent::__construct();
        }

        public function create() {
            $randomID = (int)$_COOKIE["RandomID"];
            $request = htmlspecialchars($_SERVER["REQUEST_URI"]);

            if((int)$randomID <= 0 || strlen(htmlspecialchars($request)) <= 0) return false;

            $query = $this->database->prepare("INSERT INTO BlogsBerry__Requests (Requested, RandomID, Request) VALUES (NOW(), :randomID, :request)");
            $query->bindValue("randomID", (int)$randomID, PDO::PARAM_INT);
            $query->bindValue("request", htmlspecialchars($request), PDO::PARAM_STR);

            return $query->execute();
        }
    };

?>
