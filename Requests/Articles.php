
<?php

    require_once("Models/Articles.php");
    $articles = new Articles();

    $action = htmlspecialchars($_POST["Action"]);
    $position = (int)$_POST["Position"];
    $blogID = (int)$_POST["BlogID"];
    $title = htmlspecialchars($_POST["Title"]);
    $content = htmlspecialchars($_POST["Content"]);
    $link = htmlspecialchars($_POST["Link"]);
    $image = (int)$_POST["Image"];
    $articleID = (int)$_POST["ArticleID"];

    if($action == "Search") echo json_encode($articles->search(htmlspecialchars($_POST["Language"]), htmlspecialchars($_POST["Search"]), $position));
    else if($action == "Home") echo json_encode($articles->home($position));
    else if($action == "Create" && $articles->create($blogID, $title, $content, $link, $image)) echo "true";
    else if($action == "Update" && $articles->update($articleID, $title, $content, $link, $image)) echo "true";
    else if($action == "Delete" && $articles->delete($articleID)) echo "true";
    else if($action == "Articles") echo json_encode($articles->getArticles($blogID));
    else if($action == "Article") echo json_encode($articles->getArticle($articleID));
    else if($action == "Image" && (int)$_FILES["Image"]["error"] == 0) {
        $id = rand(1, 16777215);

        if($_FILES["Image"]["size"] >= 4194304) echo "size";
        else if(!in_array(pathinfo($_FILES["Image"]["name"])["extension"], array("jpeg", "jpg", "png"))) echo "extension";
        else if(!in_array($_FILES["Image"]["type"], array("image/jpeg", "image/png"))) echo "type";
        else if(move_uploaded_file($_FILES["Image"]["tmp_name"], "Public/Images/Articles/" . $id . ".jpeg")) echo $id;
    }

?>
