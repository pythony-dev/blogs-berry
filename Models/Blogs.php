
<?php

    require_once("Models/Database.php");
    require_once("Models/Searches.php");
    require_once("Models/Boosts.php");

    class Blogs extends Database {

        public function __construct() {
            parent::__construct();
        }

        public function search($language, $search, $position) {
            if(!$this->isLanguage($language) || strlen(htmlspecialchars($search)) <= 0 || strlen(htmlspecialchars($search)) > 64 || (int)$position < 0) return false;

            $blogs = array();
            $bonus = array();
            $value = str_word_count(htmlspecialchars($search), 0);

            $boosts = new Boosts();

            foreach(str_word_count(htmlspecialchars($search), 1) as $word) {
                $query = $this->database->prepare("
                    SELECT
                        ID,
                        UserID,
                        DATEDIFF(NOW(), Published) AS Days,
                        (SELECT COUNT(ID) FROM BlogsBerry__Articles WHERE BlogID = BlogsBerry__Blogs.ID AND Deleted IS NULL) AS Articles
                    FROM BlogsBerry__Blogs
                    WHERE Language = :language AND Title LIKE :title AND Deleted IS NULL
                ");
                $query->bindValue("language", htmlspecialchars($language), PDO::PARAM_STR);
                $query->bindValue("title", "%" . htmlspecialchars($word) . "%", PDO::PARAM_STR);
                $query->execute();

                foreach($query->fetchAll() as $data) {
                    $blogs[(int)$data["ID"]] += $value * 2;

                    if(!array_key_exists((int)$data["ID"], $bonus)) $bonus[(int)$data["ID"]] = min(pow((int)$data["Articles"], 2), (int)$data["Days"] + 1) / ((int)$data["Days"] + 1) * ($boosts->isBoost((int)$data["UserID"]) ? 2 : 1);
                }

                $query = $this->database->prepare("
                    SELECT
                        ID,
                        UserID,
                        DATEDIFF(NOW(), Published) AS Days,
                        (SELECT COUNT(ID) FROM BlogsBerry__Articles WHERE BlogID = BlogsBerry__Blogs.ID AND Deleted IS NULL) AS Articles
                    FROM BlogsBerry__Blogs
                    WHERE Language = :language AND Content LIKE :content AND Deleted IS NULL
                ");
                $query->bindValue("language", htmlspecialchars($language), PDO::PARAM_STR);
                $query->bindValue("content", "%" . htmlspecialchars($word) . "%", PDO::PARAM_STR);
                $query->execute();

                foreach($query->fetchAll() as $data) {
                    $blogs[(int)$data["ID"]] += $value;

                    if(!array_key_exists((int)$data["ID"], $bonus)) $bonus[(int)$data["ID"]] = min(pow((int)$data["Articles"], 2), (int)$data["Days"] + 1) / ((int)$data["Days"] + 1) * ($boosts->isBoost((int)$data["UserID"]) ? 2 : 1);
                }

                $value --;
            }

            foreach($blogs as $key => $value) $blogs[$key] *= $bonus[$key];

            arsort($blogs);

            $result = array();
            $position *= 10;

            $searches = new Searches();

            foreach(array_slice($blogs, (int)$position, 10, true) as $key => $value) {
                $query = $this->database->prepare("
                    SELECT
                        BlogsBerry__Blogs.ID AS ID,
                        BlogsBerry__Blogs.Title AS Title,
                        BlogsBerry__Blogs.Content AS Content,
                        BlogsBerry__Blogs.Link AS Link,
                        BlogsBerry__Blogs.Image AS Image,
                        BlogsBerry__Users.Username AS Username,
                        (SELECT COUNT(ID) FROM BlogsBerry__Articles WHERE BlogID = :id AND Deleted IS NULL) AS Articles,
                        (SELECT ID FROM BlogsBerry__Bookmarks WHERE UserID = :userID AND BlogID = :id AND Deleted IS NULL) AS Bookmark
                    FROM BlogsBerry__Blogs
                    LEFT JOIN BlogsBerry__Users ON BlogsBerry__Blogs.UserID = BlogsBerry__Users.ID
                    WHERE BlogsBerry__Blogs.ID = :id AND BlogsBerry__Blogs.Deleted IS NULL
                ");
                $query->bindValue("id", (int)$key, PDO::PARAM_INT);
                $query->bindValue("userID", (int)$_SESSION["UserID"], PDO::PARAM_INT);
                $query->execute();

                $blog = $query->fetch();

                if((int)$blog["ID"] > 0 && $searches->create((int)$blog["ID"], NULL, htmlspecialchars($search), (int)$position + 1)) {
                    array_push($result, $blog);
                    $position ++;
                }
            }

            return $result;
        }

        public function create($language, $title, $content, $link, $image, $rss) {
            $userID = (int)$_SESSION["UserID"];

            if((int)$userID <= 0 || !$this->isLanguage($language) || strlen(htmlspecialchars($title)) <= 0 || strlen(htmlspecialchars($title)) > 256 || strlen(htmlspecialchars($content)) <= 0 || strlen(htmlspecialchars($content)) > 1024 || strlen(htmlspecialchars($link)) <= 0 || strlen(htmlspecialchars($link)) > 256 || (int)$image <= 0) return false;

            $query = $this->database->prepare("INSERT INTO BlogsBerry__Blogs (Published, Deleted, UserID, Language, Title, Content, Link, Image, RSS) VALUES (NOW(), NULL, :userID, :language, :title, :content, :link, :image, :rss)");
            $query->bindValue("userID", (int)$userID, PDO::PARAM_INT);
            $query->bindValue("language", htmlspecialchars($language), PDO::PARAM_STR);
            $query->bindValue("title", htmlspecialchars($title), PDO::PARAM_STR);
            $query->bindValue("content", htmlspecialchars($content), PDO::PARAM_STR);
            $query->bindValue("link", htmlspecialchars($link), PDO::PARAM_STR);
            $query->bindValue("image", (int)$image, PDO::PARAM_INT);
            $query->bindValue("rss", htmlspecialchars($rss), PDO::PARAM_STR);

            return $query->execute();
        }

        public function update($blogID, $language, $title, $content, $link, $image, $rss) {
            $userID = (int)$_SESSION["UserID"];

            if((int)$userID <= 0 || (int)$blogID <= 0 || !$this->isLanguage($language) || strlen(htmlspecialchars($title)) <= 0 || strlen(htmlspecialchars($title)) > 256 || strlen(htmlspecialchars($content)) <= 0 || strlen(htmlspecialchars($content)) > 1024 || strlen(htmlspecialchars($link)) <= 0 || strlen(htmlspecialchars($link)) > 256 || (int)$image <= 0) return false;

            $query = $this->database->prepare("UPDATE BlogsBerry__Blogs SET Language = :language, Title = :title, Content = :content, Link = :link, Image = :image, RSS = :rss WHERE ID = :id AND UserID = :userID AND Deleted IS NULL");
            $query->bindValue("language", htmlspecialchars($language), PDO::PARAM_STR);
            $query->bindValue("title", htmlspecialchars($title), PDO::PARAM_STR);
            $query->bindValue("content", htmlspecialchars($content), PDO::PARAM_STR);
            $query->bindValue("link", htmlspecialchars($link), PDO::PARAM_STR);
            $query->bindValue("image", (int)$image, PDO::PARAM_INT);
            $query->bindValue("rss", htmlspecialchars($rss), PDO::PARAM_STR);
            $query->bindValue("id", (int)$blogID, PDO::PARAM_INT);
            $query->bindValue("userID", (int)$userID, PDO::PARAM_INT);

            return $query->execute();
        }

        public function delete($blogID) {
            $userID = (int)$_SESSION["UserID"];

            if((int)$userID <= 0 || (int)$blogID <= 0) return false;

            $query = $this->database->prepare("UPDATE BlogsBerry__Blogs SET Deleted = NOW() WHERE ID = :id AND UserID = :userID AND Deleted IS NULL");
            $query->bindValue("id", (int)$blogID, PDO::PARAM_INT);
            $query->bindValue("userID", (int)$userID, PDO::PARAM_INT);

            return $query->execute();
        }

        public function getBlogs() {
            $userID = (int)$_SESSION["UserID"];

            if((int)$userID <= 0) return false;

            $query = $this->database->prepare("SELECT ID, Title, Image FROM BlogsBerry__Blogs WHERE UserID = :userID AND Deleted IS NULL");
            $query->bindValue("userID", (int)$userID, PDO::PARAM_INT);
            $query->execute();

            return $query->fetchAll();
        }

        public function getBlog($blogID) {
            if((int)$blogID <= 0) return false;

            $query = $this->database->prepare("SELECT ID, Language, Title, Content, Link, Image, RSS FROM BlogsBerry__Blogs WHERE ID = :id AND Deleted IS NULL");
            $query->bindValue("id", (int)$blogID, PDO::PARAM_INT);
            $query->execute();

            return $query->fetch();
        }

        public function count() {
            echo "Check";

            $query = $this->database->query("SELECT MAX(ID) AS ID FROM BlogsBerry__Blogs WHERE Deleted IS NULL");

            return $query->fetch()["ID"];
        }

        private function isLanguage($language) {
            return $language == "English" || $language == "German" || $language == "French" || $language == "Italian" || $language == "Spanish";
        }
    };

?>
