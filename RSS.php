
<?php

    require_once("Models/Blogs.php");
    $blogs = new Blogs();

    require_once("Models/Articles.php");
    $articles = new Articles();

    $count = $blogs->count();

    for($id = 1; $id <= $count; $id ++) {
        echo "Feed : " . $id . ", Create : " . $articles->feed((int)$id);
    }


    echo "End";

?>
