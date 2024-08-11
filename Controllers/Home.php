
<?php

    if($action == "Welcome") require("Views/Welcome.php");
    else if($action == "Terms") require("Views/Terms.php");
    else if($user["Status"] == "Blogger") header("Location: /User");
    else if($action == "Blogs") require("Views/Blogs.php");
    else if($action == "Articles") require("Views/Articles.php");
    else if($action == "Login" && (int)$userID <= 0) require("Views/Login.php");
    else if($action == "Signup" && (int)$userID <= 0) require("Views/Signup.php");
    else header("Location: /");

?>
