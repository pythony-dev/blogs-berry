
<?php

    require_once("Models/Database.php");
    require_once("Models/Searches.php");
    require_once("Models/Boosts.php");
    require_once("Models/Blogs.php");

    class Articles extends Database {

        protected $authorization;

        public function __construct() {
            parent::__construct();

            $this->authorization = false;
        }

        public function search($language, $search, $position) {
            if(!$this->isLanguage($language) || strlen(htmlspecialchars($search)) <= 0 || strlen(htmlspecialchars($search)) > 64 || (int)$position < 0) return false;

            $articles = array();
            $bonus = array();
            $value = str_word_count(htmlspecialchars($search), 0);

            $boosts = new Boosts();

            foreach(str_word_count(htmlspecialchars($search), 1) as $word) {
                $query = $this->database->prepare("
                    SELECT
                        BlogsBerry__Articles.ID,
                        BlogsBerry__Articles.BlogID AS CurrentBlogID,
                        BlogsBerry__Blogs.UserID,
                        DATEDIFF(NOW(), BlogsBerry__Blogs.Published) AS Days,
                        (SELECT COUNT(ID) FROM BlogsBerry__Articles WHERE BlogID = CurrentBlogID AND Deleted IS NULL) AS Articles
                    FROM BlogsBerry__Articles
                    LEFT JOIN BlogsBerry__Blogs ON BlogsBerry__Articles.BlogID = BlogsBerry__Blogs.ID
                    WHERE BlogsBerry__Blogs.Language = :language AND BlogsBerry__Articles.Title LIKE :title AND BlogsBerry__Blogs.Deleted IS NULL AND BlogsBerry__Articles.Deleted IS NULL
                ");
                $query->bindValue("language", htmlspecialchars($language), PDO::PARAM_STR);
                $query->bindValue("title", "%" . htmlspecialchars($word) . "%", PDO::PARAM_STR);
                $query->execute();

                foreach($query->fetchAll() as $data) {
                    $articles[(int)$data["ID"]] += $value * 2;

                    if(!array_key_exists((int)$data["ID"], $bonus)) $bonus[(int)$data["ID"]] = min(pow((int)$data["Articles"], 2), (int)$data["Days"] + 1) / ((int)$data["Days"] + 1) * ($boosts->isBoost((int)$data["UserID"]) ? 2 : 1);
                }

                $query = $this->database->prepare("
                    SELECT
                        Articles.ID,
                        Articles.BlogID AS CurrentBlogID,
                        Blogs.UserID,
                        DATEDIFF(NOW(), Blogs.Published) AS Days,
                        (SELECT COUNT(ID) FROM Articles WHERE BlogID = CurrentBlogID AND Deleted IS NULL) AS Articles
                    FROM BlogsBerry__Articles
                    LEFT JOIN BlogsBerry__Blogs ON Articles.BlogID = Blogs.ID
                    WHERE Blogs.Language = :language AND Articles.Content LIKE :content AND Blogs.Deleted IS NULL AND Articles.Deleted IS NULL
                ");
                $query->bindValue("language", htmlspecialchars($language), PDO::PARAM_STR);
                $query->bindValue("content", "%" . htmlspecialchars($word) . "%", PDO::PARAM_STR);
                $query->execute();

                foreach($query->fetchAll() as $data) {
                    $articles[(int)$data["ID"]] += $value;

                    if(!array_key_exists((int)$data["ID"], $bonus)) $bonus[(int)$data["ID"]] = min(pow((int)$data["Articles"], 2), (int)$data["Days"] + 1) / ((int)$data["Days"] + 1) * ($boosts->isBoost((int)$data["UserID"]) ? 2 : 1);
                }

                $value --;
            }

            foreach($articles as $key => $value) $articles[$key] *= $bonus[$key];

            arsort($articles);

            $result = array();
            $position *= 10;

            $searches = new Searches();

            foreach(array_slice($articles, (int)$position, 10, true) as $key => $value) {
                $query = $this->database->prepare("
                    SELECT
                        BlogsBerry__Articles.ID AS ID,
                        BlogsBerry__Articles.Published AS Published,
                        BlogsBerry__Articles.Title AS Title,
                        BlogsBerry__Articles.Content AS Content,
                        BlogsBerry__Articles.Link AS Link,
                        BlogsBerry__Articles.Image AS Image,
                        BlogsBerry__Users.Username AS Username,
                        (SELECT ID FROM BlogsBerry__Bookmarks WHERE UserID = :userID AND ArticleID = :id AND Deleted IS NULL) AS Bookmark
                    FROM BlogsBerry__Articles
                    LEFT JOIN BlogsBerry__Blogs ON BlogsBerry__Articles.BlogID = BlogsBerry__Blogs.ID
                    LEFT JOIN BlogsBerry__Users ON BlogsBerry__Blogs.UserID = BlogsBerry__Users.ID
                    WHERE BlogsBerry__Articles.ID = :id AND BlogsBerry__Articles.Deleted IS NULL
                ");
                $query->bindValue("id", (int)$key, PDO::PARAM_INT);
                $query->bindValue("userID", (int)$_SESSION["UserID"], PDO::PARAM_INT);
                $query->execute();

                $article = $query->fetch();

                if((int)$article["ID"] > 0 && $searches->create(NULL, (int)$article["ID"], htmlspecialchars($search), (int)$position + 1)) {
                    array_push($result, $article);
                    $position ++;
                }
            }

            return $result;
        }

        public function home($position = 0) {
            $userID = (int)$_SESSION["UserID"];

            if((int)$userID <= 0 || (int)$position < 0) return false;

            $query = $this->database->prepare("
                SELECT
                    BlogsBerry__Articles.ID AS ID,
                    BlogsBerry__Articles.Published AS Published,
                    BlogsBerry__Articles.Title AS Title,
                    BlogsBerry__Articles.Content AS Content,
                    BlogsBerry__Articles.Link AS Link,
                    BlogsBerry__Articles.Image AS Image,
                    BlogsBerry__Users.Username AS Username
                    FROM BlogsBerry__Articles
                    LEFT JOIN BlogsBerry__Blogs ON BlogsBerry__Articles.BlogID = BlogsBerry__Blogs.ID
                    LEFT JOIN BlogsBerry__Users ON BlogsBerry__Blogs.UserID = BlogsBerry__Users.ID
                    WHERE (SELECT COUNT(ID) FROM BlogsBerry__Bookmarks WHERE UserID = :userID AND (BlogID = BlogsBerry__Articles.BlogID OR ArticleID = BlogsBerry__Articles.ID) AND BlogsBerry__Bookmarks.Deleted IS NULL) > 0 AND BlogsBerry__Blogs.Deleted IS NULL AND BlogsBerry__Articles.Deleted IS NULL
                    ORDER BY BlogsBerry__Articles.Published DESC
                    LIMIT :position, 10
            ");
            $query->bindValue("userID", (int)$userID, PDO::PARAM_INT);
            $query->bindValue("position", (int)$position * 10, PDO::PARAM_INT);
            $query->execute();

            return $query->fetchAll();
        }

        public function create($blogID, $title, $content, $link, $image) {
            $userID = (int)$_SESSION["UserID"];

            if((!$this->isBlog((int)$userID, (int)$blogID) && !$this->authorization) || strlen(htmlspecialchars($title)) <= 0 || strlen(htmlspecialchars($title)) > 256 || strlen(htmlspecialchars($content)) <= 0 || strlen(htmlspecialchars($content)) > 1024 || strlen(htmlspecialchars($link)) <= 0 || strlen(htmlspecialchars($link)) > 256 || (int)$image <= 0) return false;

            $query = $this->database->prepare("INSERT INTO BlogsBerry__Articles (Published, Deleted, BlogID, Title, Content, Link, Image) VALUES (NOW(), NULL, :blogID, :title, :content, :link, :image)");
            $query->bindValue("blogID", (int)$blogID, PDO::PARAM_INT);
            $query->bindValue("title", htmlspecialchars($title), PDO::PARAM_STR);
            $query->bindValue("content", htmlspecialchars($content), PDO::PARAM_STR);
            $query->bindValue("link", htmlspecialchars($link), PDO::PARAM_STR);
            $query->bindValue("image", (int)$image, PDO::PARAM_INT);

            return $query->execute();
        }

        public function update($articleID, $title, $content, $link, $image) {
            $userID = (int)$_SESSION["UserID"];

            if(!$this->isArticle((int)$userID, (int)$articleID) || strlen(htmlspecialchars($title)) <= 0 || strlen(htmlspecialchars($title)) > 256 || strlen(htmlspecialchars($content)) <= 0 || strlen(htmlspecialchars($content)) > 1024 || strlen(htmlspecialchars($link)) <= 0 || strlen(htmlspecialchars($link)) > 256 || (int)$image <= 0) return false;

            $query = $this->database->prepare("UPDATE BlogsBerry__Articles SET Title = :title, Content = :content, Link = :link, Image = :image WHERE ID = :id AND Deleted IS NULL");
            $query->bindValue("title", htmlspecialchars($title), PDO::PARAM_STR);
            $query->bindValue("content", htmlspecialchars($content), PDO::PARAM_STR);
            $query->bindValue("link", htmlspecialchars($link), PDO::PARAM_STR);
            $query->bindValue("image", (int)$image, PDO::PARAM_INT);
            $query->bindValue("id", (int)$articleID, PDO::PARAM_INT);

            return $query->execute();
        }

        public function delete($articleID) {
            $userID = (int)$_SESSION["UserID"];

            if(!$this->isArticle((int)$userID, (int)$articleID)) return false;

            $query = $this->database->prepare("UPDATE BlogsBerry__Articles SET Deleted = NOW() WHERE ID = :id AND Deleted IS NULL");
            $query->bindValue("id", (int)$articleID, PDO::PARAM_INT);

            return $query->execute();
        }

        public function getArticles($blogID) {
            $userID = (int)$_SESSION["UserID"];

            if(!$this->isBlog((int)$userID, (int)$blogID)) return false;

            $query = $this->database->prepare("SELECT ID, Title, Image FROM BlogsBerry__Articles WHERE BlogID = :blogID AND Deleted IS NULL");
            $query->bindValue("blogID", (int)$blogID, PDO::PARAM_INT);
            $query->execute();

            return $query->fetchAll();
        }

        public function getArticle($articleID) {
            if((int)$_SESSION["UserID"] <= 0 || (int)$articleID <= 0) return false;

            $query = $this->database->prepare("SELECT ID, Title, Content, Link, Image FROM BlogsBerry__Articles WHERE ID = :id AND Deleted IS NULL");
            $query->bindValue("id", (int)$articleID, PDO::PARAM_INT);
            $query->execute();

            return $query->fetch();
        }

        public function isBlog($userID, $blogID) {
            if((int)$userID <= 0 || (int)$blogID <= 0) return false;

            $query = $this->database->prepare("SELECT ID FROM BlogsBerry__Blogs WHERE ID = :id AND UserID = :userID AND Deleted IS NULL");
            $query->bindValue("id", (int)$blogID, PDO::PARAM_INT);
            $query->bindValue("userID", (int)$userID, PDO::PARAM_INT);
            $query->execute();

            return (bool)$query->fetch();
        }



        public function feed($blogID) {
            if((int)$blogID <= 0) return false;

            $query = $this->database->prepare("SELECT Link FROM BlogsBerry__Articles WHERE BlogID = :blogID AND Deleted IS NULL");
            $query->bindValue("blogID", (int)$blogID, PDO::PARAM_INT);
            $query->execute();

            $links = array();

            while($data = $query->fetch()) array_push($links, htmlspecialchars($data["Link"]));

            $blogs = new Blogs();

            $created = 0;

            $this->authorization = true;

            foreach(simplexml_load_string(file_get_contents($blogs->getBlog((int)$blogID)["RSS"]))->channel->item as $article) {
                $title = htmlspecialchars(strip_tags(trim(str_replace(array("<![CDATA[", "]]", "&nbsp;"), "", $article->title))));
                $content = htmlspecialchars(strip_tags(trim(str_replace(array("<![CDATA[", "]]", "&nbsp;"), "", $article->description))));
                $link = htmlspecialchars(strip_tags(trim(str_replace(array("<![CDATA[", "]]", "&nbsp;"), "", $article->link))));

                if(strlen($title) > 256) $title = substr($title, 0, 125) . "...";
                if(strlen($content) > 1024) $content = substr($content, 0, 509) . "...";
                if(strlen($link) > 256) $link = substr($link, 0, 125) . "...";

                if(!in_array($link, $links) && $this->create((int)$blogID, $title, $content, $link, 1)) $created ++;
                else echo "Error :\nTitle : " . strlen(htmlspecialchars($title)) . "\nContent : " . strlen(htmlspecialchars($content)) . "\nLink : " . strlen(htmlspecialchars($link)) . "\n\n";
            }

            $this->authorization = false;

            // Mise a jour automatique, meme si le blogueur n'est pas connecte
            // Envoyer le rapport par email à contact@anthony-khelil.com

            echo "\n\nCreated WS : " . $created;
        }

        private function isArticle($userID, $articleID) {
            if((int)$userID <= 0 || (int)$articleID <= 0) return false;

            $query = $this->database->prepare("
                SELECT BlogsBerry__Articles.ID
                FROM BlogsBerry__Articles
                LEFT JOIN BlogsBerry__Blogs ON BlogsBerry__Articles.BlogID = BlogsBerry__Blogs.ID
                WHERE BlogsBerry__Articles.ID = :id AND BlogsBerry__Blogs.UserID = :userID AND BlogsBerry__Blogs.Deleted IS NULL AND BlogsBerry__Articles.Deleted IS NULL");
            $query->bindValue("id", (int)$articleID, PDO::PARAM_INT);
            $query->bindValue("userID", (int)$userID, PDO::PARAM_INT);
            $query->execute();

            return (bool)$query->fetch();
        }

        private function isLanguage($language) {
            return $language == "English" || $language == "German" || $language == "French" || $language == "Italian" || $language == "Spanish";
        }
    };

?>
