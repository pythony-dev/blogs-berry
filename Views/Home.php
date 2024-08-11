
<!DOCTYPE HTML>

<html>
    <head>
        <?php require("Private/Header.php"); ?>
        <script src="/BlogsBerry/Public/Scripts/Home.js"> </script>
        <title> <?= Translate::home($language, "title"); ?> - Blog's Berry </title>
    </head>
    <body class="container">
        <section id="homeResults" class="row p-5 bg-white border shadow rounded-top">
            <?php require("Private/Navbar.php"); ?>
            <?php if(sizeof($timeline) > 0) { foreach($timeline as $key => $value) { ?>
                <article class="col-12 col-md-10 col-xl-8 offset-md-1 offset-xl-2 <?= $key != sizeof($timeline) - 1 ? "my-5" : "mt-5"; ?>">
                    <div class="row">
                        <p class="h2 w-100 my-4 text-center"> <?= $value["Title"]; ?> </p>
                        <div class="row">
                            <div class="col-12 col-md-6 my-auto<?php if($key %2 == 1) echo " order-md-1"; ?>">
                                <p class="my-4 text-justify"> <?= $value["Content"]; ?> </p>
                                <p class="my-4 text-right"> <?= Translate::home($language, "by") . " " . $value["Username"] . " (" . Translate::home($language, "on") . " " . date_format(date_create($value["Published"]), Translate::home($language, "date")) . ")"; ?> </p>
                            </div>
                            <div class="col-12 col-md-6 my-auto">
                                <a id="<?= $value["ID"]; ?>" class="homeLink" href="<?= $value["Link"]; ?>" target="_blank">
                                    <img class="img-fluid my-4 shadow rounded" src="/BlogsBerry/Public/Images/Articles/<?= $value["Image"]; ?>.jpeg" alt="<?= $value["Title"]; ?>"/>
                                </a>
                            </div>
                        </div>
                        <a id="<?= $value["ID"]; ?>" class="btn btn-primary w-100 my-4 homeLink" href="<?= $value["Link"]; ?>" target="_blank"> <?= Translate::home($language, "read") . " " . $value["Title"]; ?> </a>
                    </div>
                </article>
            <?php } } else { ?>
                <article class="col-12 col-md-10 col-xl-8 offset-md-1 offset-xl-2 mt-5">
                    <div class="row">
                        <p class="h5 w-100 my-4 text-center"> <?= Translate::home($language, "empty"); ?> </p>
                    </div>
                </article>
            <?php } ?>
        </section>
        <?php require("Private/Footer.php"); ?>
    </body>
</html>
