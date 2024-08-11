
<?php

    require_once("Models/Database.php");

    class Boosts extends Database {

        public function __construct() {
            parent::__construct();
        }

        public function isBoost($userID) {
            if((int)$userID <= 0) return false;

            $query = $this->database->prepare("SELECT ID FROM BlogsBerry__Boosts WHERE UserID = :userID AND Start <= NOW() AND End >= NOW()");
            $query->bindValue("userID", (int)$userID, PDO::PARAM_INT);
            $query->execute();

            return (bool)$query->fetch();
        }
    };

?>
