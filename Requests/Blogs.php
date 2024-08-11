
<?php

    require_once("Models/Blogs.php");
    $blogs = new Blogs();

    $action = htmlspecialchars($_POST["Action"]);
    $language = htmlspecialchars($_POST["Language"]);
    $title = htmlspecialchars($_POST["Title"]);
    $content = htmlspecialchars($_POST["Content"]);
    $link = htmlspecialchars($_POST["Link"]);
    $image = (int)$_POST["Image"];
    $rss = htmlspecialchars($_POST["RSS"]);
    $blogID = (int)$_POST["BlogID"];

    if($action == "Search") echo json_encode($blogs->search($language, htmlspecialchars($_POST["Search"]), (int)$_POST["Position"]));
    else if($action == "Create" && $blogs->create($language, $title, $content, $link, $image, $rss)) echo "true";
    else if($action == "Update" && $blogs->update($blogID, $language, $title, $content, $link, $image, $rss)) echo "true";
    else if($action == "Delete" && $blogs->delete($blogID)) echo "true";
    else if($action == "Image" && (int)$_FILES["Image"]["error"] == 0) {
        $id = rand(1, 16777215);

        if($_FILES["Image"]["size"] >= 4194304) echo "size";
        else if(!in_array(pathinfo($_FILES["Image"]["name"])["extension"], array("jpeg", "jpg", "png"))) echo "extension";
        else if(!in_array($_FILES["Image"]["type"], array("image/jpeg", "image/png"))) echo "type";
        else if(move_uploaded_file($_FILES["Image"]["tmp_name"], "Public/Images/Blogs/" . $id . ".jpeg")) echo $id;
    }

?>
