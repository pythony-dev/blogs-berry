
<?php

    require_once("Models/Database.php");

    class Clicks extends Database {

        public function __construct() {
            parent::__construct();
        }

        public function create($blogID, $articleID, $search) {
            $randomID = (int)$_COOKIE["RandomID"];

            if((int)$randomID <= 0 || ((int)$blogID <= 0) == ((int)$articleID <= 0) || strlen(htmlspecialchars($search)) > 64) return false;

            $query = $this->database->prepare("INSERT INTO BlogsBerry__Clicks (Clicked, RandomID, BlogID, ArticleID, Search) VALUES (NOW(), :randomID, :blogID, :articleID, :search)");
            $query->bindValue("randomID", (int)$randomID, PDO::PARAM_INT);
            $query->bindValue("blogID", (int)$blogID > 0 ? (int)$blogID : NULL, PDO::PARAM_INT);
            $query->bindValue("articleID", (int)$articleID > 0 ? (int)$articleID : NULL, PDO::PARAM_INT);
            $query->bindValue("search", htmlspecialchars($search), PDO::PARAM_STR);

            return $query->execute();
        }
    };

?>
