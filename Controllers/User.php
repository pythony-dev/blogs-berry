
<?php

    require_once("Models/Blogs.php");
    $blogs = new Blogs();

    require_once("Models/Articles.php");
    $articles = new Articles();

    if($user["Status"] == "Reader") {
        if($action == "Home") {
           $timeline = $articles->home();

           require("Views/Home.php");
       } else if($action == "User") {
            require_once("Models/Bookmarks.php");
            $bookmarks = new Bookmarks();

            $blogsTimeline = $bookmarks->getBlogs();
            $articlesTimeline = $bookmarks->getArticles();

            require("Views/Reader.php");
        } else header("Location: /");
    } else if($user["Status"] == "Blogger") {
        $blogID = (int)$_GET["BlogID"];

        if($action == "User") {
            $timeline = $blogs->getBlogs();

            require("Views/Blogger.php");
        } else if($action == "Overview" && $articles->isBlog((int)$userID, $blogID)) {
            $timeline = $articles->getArticles($blogID);
            $blog = $blogs->getBlog($blogID);

            require("Views/Overview.php");
        } else if($action == "Statistics" && $articles->isBlog((int)$userID, $blogID)) {
            $articleID = (int)$_GET["ArticleID"];

            $blogsTimeline = $blogs->getBlogs();
            $articlesTimeline = $articles->getArticles($blogID);

            require("Views/Statistics.php");
        } else header("Location: /");
    } else header("Location: /");

?>
