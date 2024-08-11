
<?php

    if($request == "Blogs") require("Requests/Blogs.php");
    else if($request == "Articles") require("Requests/Articles.php");
    else if($request == "Clicks") require("Requests/Clicks.php");
    else if($request == "Bookmarks") require("Requests/Bookmarks.php");
    else if($request == "Users") require("Requests/Users.php");
    else if($request == "Searches") require("Requests/Searches.php");

?>
