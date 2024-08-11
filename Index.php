
<?php

    session_start();

    $userID = (int)$_SESSION["UserID"];
    $action = htmlspecialchars($_GET["Action"]);
    $request = htmlspecialchars($_POST["Request"]);
    $languages = array("English", "German", "French", "Italian", "Spanish");
    $language = "English";

    if((int)$_COOKIE["RandomID"] <= 0) {
        $_COOKIE["RandomID"] = rand(1, 16777215);

        setcookie("RandomID", (int)$_COOKIE["RandomID"], time() + 31557600, "/", "anthony-khelil.com", true, true);

        require_once("Models/Random.php");
        $random = new Random();
        $random->create();
    }


    require_once("Models/Requests.php");
    $requests = new Requests();
    $requests->create();

    require_once("Models/Users.php");
    $users = new Users();
    $user = $users->getUser((int)$userID);

    require_once("Private/Translate.php");

    if(in_array($user["Language"], $languages)) $language = htmlspecialchars($user["Language"]);
    else if(in_array($_GET["Language"], $languages)) $language = htmlspecialchars($_GET["Language"]);
    else if(in_array($_COOKIE["Language"], $languages)) $language = htmlspecialchars($_COOKIE["Language"]);

    setcookie("Language", htmlspecialchars($language), time() + 31557600, "/", "anthony-khelil.com", true, true);

    if(in_array($request, array("Blogs", "Articles", "Clicks", "Bookmarks", "Users", "Searches"))) require("Controllers/Requests.php");
    else if(in_array($action, array("Welcome", "Terms", "Blogs", "Articles", "Login", "Signup"))) require("Controllers/Home.php");
    else if(in_array($action, array("Home", "User", "Overview", "Statistics"))) require("Controllers/User.php");
    else if($action == "Logout") {
        $_SESSION["UserID"] = 0;

        header("Location: /BlogsBerry/Login");
    } else header("Location: /BlogsBerry/");

?>
