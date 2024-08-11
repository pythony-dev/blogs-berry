
<?php

    require_once("Models/Database.php");

    class Random extends Database {

        public function __construct() {
            parent::__construct();
        }

        public function create() {
            $randomID = (int)$_COOKIE["RandomID"];

            if((int)$randomID <= 0) return false;

            $query = $this->database->prepare("INSERT INTO BlogsBerry__Random (Created, RandomID, IPAddress, UserAgent) VALUES (NOW(), :randomID, :ipAddress, :userAgent)");
            $query->bindValue("randomID", (int)$randomID, PDO::PARAM_INT);
            $query->bindValue("ipAddress", htmlspecialchars($_SERVER["REMOTE_ADDR"] . "/" . $_SERVER["HTTP_X_FORWARDED_FOR"]), PDO::PARAM_STR);
            $query->bindValue("userAgent", htmlspecialchars($_SERVER["HTTP_USER_AGENT"]), PDO::PARAM_STR);

            return $query->execute();
        }
    };

?>
