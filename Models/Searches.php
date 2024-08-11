
<?php

    require_once("Models/Database.php");

    class Searches extends Database {

        public function __construct() {
            parent::__construct();
        }

        public function create($blogID, $articleID, $search, $position) {
            $randomID = (int)$_COOKIE["RandomID"];

            if((int)$randomID <= 0 || ((int)$blogID <= 0) == ((int)$articleID <= 0) || strlen(htmlspecialchars($search)) <= 0 || strlen(htmlspecialchars($search)) > 64 || (int)$position <= 0) return false;

            $query = $this->database->prepare("INSERT INTO BlogsBerry__Searches (Searched, RandomID, BlogID, ArticleID, Search, Position) VALUES (NOW(), :randomID, :blogID, :articleID, :search, :position)");
            $query->bindValue("randomID", (int)$randomID, PDO::PARAM_INT);
            $query->bindValue("blogID", (int)$blogID > 0 ? (int)$blogID : NULL, PDO::PARAM_INT);
            $query->bindValue("articleID", (int)$articleID > 0 ? (int)$articleID : NULL, PDO::PARAM_INT);
            $query->bindValue("search", htmlspecialchars($search), PDO::PARAM_STR);
            $query->bindValue("position", (int)$position, PDO::PARAM_INT);

            return $query->execute();
        }

        public function statistics($platform, $blogID, $articleID, $period, $offset) {
            $userID = (int)$_SESSION["UserID"];

            if((int)$userID <= 0 || !$this->isPlatform($platform) || !$this->isPeriod($period) || (int)$offset < 0 || (int)$offset >= 30) return false;

            $query = $this->database->prepare("
                SELECT
                    CASE
                        WHEN (:period = 'Days') THEN DATE_ADD(CURDATE(), INTERVAL :offset DAY)
                        WHEN (:period = 'Weeks') THEN STR_TO_DATE(DATE_FORMAT(DATE_ADD(CURDATE(), INTERVAL :offset WEEK), '%x-%v-1'), '%x-%v-%w')
                        ELSE CONCAT(DATE_FORMAT(DATE_ADD(CURDATE(), INTERVAL :offset MONTH), '%Y-%m'), '-01')
                    END AS Date,
                    COUNT(Searches.ID) AS Searches,
                    AVG(Searches.Position) AS Position,
                    (
                        SELECT COUNT(Clicks.ID)
                        FROM BlogsBerry__Clicks
                        LEFT JOIN BlogsBerry__Articles ON Clicks.ArticleID = Articles.ID
                        LEFT JOIN BlogsBerry__Blogs ON Clicks.BlogID = Blogs.ID
                        LEFT JOIN BlogsBerry__Blogs AS Users ON Articles.BlogID = Users.ID
                        WHERE
                            (
                                (
                                    :period = 'Days' AND DATE(Clicks.Clicked) = DATE_ADD(CURDATE(), INTERVAL :offset DAY)
                                ) OR (
                                    :period = 'Weeks' AND DATE_FORMAT(Clicks.Clicked, '%x-%v') = DATE_FORMAT(DATE_ADD(CURDATE(), INTERVAL :offset WEEK), '%x-%v')
                                ) OR (
                                    :period = 'Months' AND DATE_FORMAT(Clicks.Clicked, '%Y-%m') = DATE_FORMAT(DATE_ADD(CURDATE(), INTERVAL :offset MONTH), '%Y-%m')
                                )
                            ) AND (
                                (
                                    :platform IN ('Blogs and Articles', 'Only Blogs') AND :blogID <= 0 AND Blogs.UserID = :userID AND Blogs.Deleted IS NULL
                                ) OR (
                                    :platform IN ('Blogs and Articles', 'Only Blogs') AND :blogID > 0 AND Blogs.ID = :blogID AND Blogs.UserID = :userID AND Blogs.Deleted IS NULL
                                ) OR (
                                    :platform IN ('Blogs and Articles', 'Only Articles') AND :blogID <= 0 AND Users.UserID = :userID AND Articles.Deleted IS NULL
                                ) OR (
                                    :platform IN ('Blogs and Articles', 'Only Articles') AND :blogID > 0 AND :articleID <= 0 AND Users.ID = :blogID AND Users.UserID = :userID AND Articles.Deleted IS NULL
                                ) OR (
                                    :platform IN ('Blogs and Articles', 'Only Articles') AND :blogID > 0 AND :articleID > 0 AND Articles.ID = :articleID AND Users.UserID = :userID AND Articles.Deleted IS NULL
                                )
                            )
                    ) AS Clicks
                FROM BlogsBerry__Searches
                LEFT JOIN BlogsBerry__Articles ON Searches.ArticleID = Articles.ID
                LEFT JOIN BlogsBerry__Blogs ON Searches.BlogID = Blogs.ID
                LEFT JOIN BlogsBerry__Blogs AS Users ON Articles.BlogID = Users.ID
                WHERE
                    (
                        (
                            :period = 'Days' AND DATE(Searches.Searched) = DATE_ADD(CURDATE(), INTERVAL :offset DAY)
                        ) OR (
                            :period = 'Weeks' AND DATE_FORMAT(Searches.Searched, '%x-%v') = DATE_FORMAT(DATE_ADD(CURDATE(), INTERVAL :offset WEEK), '%x-%v')
                        ) OR (
                            :period = 'Months' AND DATE_FORMAT(Searches.Searched, '%Y-%m') = DATE_FORMAT(DATE_ADD(CURDATE(), INTERVAL :offset MONTH), '%Y-%m')
                        )
                    ) AND (
                        (
                            :platform IN ('Blogs and Articles', 'Only Blogs') AND :blogID <= 0 AND Blogs.UserID = :userID AND Blogs.Deleted IS NULL
                        ) OR (
                            :platform IN ('Blogs and Articles', 'Only Blogs') AND :blogID > 0 AND Blogs.ID = :blogID AND Blogs.UserID = :userID AND Blogs.Deleted IS NULL
                        ) OR (
                            :platform IN ('Blogs and Articles', 'Only Articles') AND :blogID <= 0 AND Users.UserID = :userID AND Articles.Deleted IS NULL
                        ) OR (
                            :platform IN ('Blogs and Articles', 'Only Articles') AND :blogID > 0 AND :articleID <= 0 AND Users.ID = :blogID AND Users.UserID = :userID AND Articles.Deleted IS NULL
                        ) OR (
                            :platform IN ('Blogs and Articles', 'Only Articles') AND :blogID > 0 AND :articleID > 0 AND Articles.ID = :articleID AND Users.UserID = :userID AND Articles.Deleted IS NULL
                        )
                    )
            ");
            $query->bindValue("period", htmlspecialchars($period), PDO::PARAM_STR);
            $query->bindValue("offset", (int)-$offset, PDO::PARAM_INT);
            $query->bindValue("platform", htmlspecialchars($platform), PDO::PARAM_STR);
            $query->bindValue("userID", (int)$userID, PDO::PARAM_INT);
            $query->bindValue("blogID", (int)$blogID, PDO::PARAM_INT);
            $query->bindValue("articleID", (int)$articleID, PDO::PARAM_INT);
            $query->execute();

            return $query->fetch();
        }

        private function isPlatform($platform) {
            return $platform == "Blogs and Articles" || $platform == "Only Blogs" || $platform == "Only Articles";
        }

        private function isPeriod($period) {
            return $period == "Days" || $period == "Weeks" || $period == "Months";
        }
    };

?>
