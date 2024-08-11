
<?php

    require_once("Models/Bookmarks.php");
    $bookmarks = new Bookmarks();

    $action = htmlspecialchars($_POST["Action"]);
    $blogID = (int)$_POST["BlogID"];
    $articleID = (int)$_POST["ArticleID"];

    if((int)$userID <= 0) echo "false";
    else if($action == "Create" && $bookmarks->create($blogID, $articleID)) echo "true";
    else if($action == "Delete" && $bookmarks->delete($blogID, $articleID)) echo "true";

?>
