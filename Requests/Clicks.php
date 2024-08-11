
<?php

    require_once("Models/Clicks.php");
    $clicks = new Clicks();

    if(htmlspecialchars($_POST["Action"]) == "Create" && $clicks->create((int)$_POST["BlogID"], (int)$_POST["ArticleID"], htmlspecialchars($_POST["Search"]))) echo "true";

?>
