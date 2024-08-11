
<?php

    include_once("Models/Database.php");

    class Bookmarks extends Database {

        public function __construct() {
            parent::__construct();
        }

        public function create($blogID, $articleID) {
            $userID = (int)$_SESSION["UserID"];

            if($userID <= 0 || ((int)$blogID <= 0) == ((int)$articleID <= 0)) return false;

            $query = $this->database->prepare("INSERT INTO BlogsBerry__Bookmarks (Created, Deleted, UserID, BlogID, ArticleID) VALUES (NOW(), NULL, :userID, :blogID, :articleID)");
            $query->bindValue("userID", (int)$userID, PDO::PARAM_INT);
            $query->bindValue("blogID", (int)$blogID > 0 ? (int)$blogID : NULL, PDO::PARAM_INT);
            $query->bindValue("articleID", (int)$articleID > 0 ? (int)$articleID : NULL, PDO::PARAM_INT);

            return $query->execute();
        }

        public function delete($blogID, $articleID) {
            $userID = (int)$_SESSION["UserID"];

            if($userID <= 0 || ((int)$blogID <= 0) == ((int)$articleID <= 0)) return false;

            $query = $this->database->prepare("UPDATE BlogsBerry__Bookmarks SET Deleted = NOW() WHERE UserID = :userID AND (BlogID = :blogID OR (BlogID IS NULL AND :blogID <= 0)) AND (ArticleID = :articleID OR (ArticleID IS NULL AND :articleID <= 0)) AND Deleted IS NULL");
            $query->bindValue("userID", (int)$userID, PDO::PARAM_INT);
            $query->bindValue("blogID", (int)$blogID, PDO::PARAM_INT);
            $query->bindValue("articleID", (int)$articleID , PDO::PARAM_INT);

            return $query->execute();
        }

        public function getBlogs() {
            $userID = (int)$_SESSION["UserID"];

            if($userID <= 0) return false;

            $query = $this->database->prepare("SELECT DISTINCT BlogID FROM BlogsBerry__Bookmarks WHERE UserID = :userID AND BlogID IS NOT NULL AND Deleted IS NULL ORDER BY Created DESC");
            $query->bindValue("userID", (int)$userID, PDO::PARAM_INT);
            $query->execute();

            return $query->fetchAll();
        }

        public function getArticles() {
            $userID = (int)$_SESSION["UserID"];

            if($userID <= 0) return false;

            $query = $this->database->prepare("SELECT DISTINCT ArticleID FROM BlogsBerry__Bookmarks WHERE UserID = :userID AND ArticleID IS NOT NULL AND Deleted IS NULL ORDER BY Created DESC");
            $query->bindValue("userID", (int)$userID, PDO::PARAM_INT);
            $query->execute();

            return $query->fetchAll();
        }
    };

?>
