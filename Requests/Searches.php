
<?php

    require_once("Models/Searches.php");
    $searches = new Searches();

    $blogID = (int)$_POST["BlogID"];
    $articleID = (int)$_POST["ArticleID"];
    $count = (int)$_POST["Count"];

    if(htmlspecialchars($_POST["Action"]) == "Statistics" && $count >= 3 && $count <= 30) {
        $result = array();

        for($offset = $count - 1; $offset >= 0; $offset --) array_push($result, $searches->statistics(htmlspecialchars($_POST["Platform"]), $blogID, $articleID, htmlspecialchars($_POST["Period"]), $offset));

        echo json_encode($result);
    }

?>
