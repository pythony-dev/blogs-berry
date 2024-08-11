
<!DOCTYPE HTML>

<html>
    <head>
        <?php require("Private/Header.php"); ?>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.0"> </script>
        <script src="/BlogsBerry/Public/Scripts/Statistics.js"> </script>
        <title> <?= Translate::statistics($language, "title"); ?> - Blog's Berry </title>
    </head>
    <body class="container">
        <section class="row p-5 bg-white border shadow rounded-top">
            <?php require("Private/Navbar.php"); ?>
            <article class="col-12 col-md-10 col-xl-8 offset-md-1 offset-xl-2 my-5">
                <div class="row">
                    <p class="h2 w-100 my-4 text-center"> <?= Translate::statistics($language, "title"); ?> </p>
                    <p class="my-4 text-justify"> <?= Translate::statistics($language, "content"); ?> </p>
                    <select id="platform" class="form-control my-4">
                        <option value disabled> <?= Translate::statistics($language, "platformTitle"); ?> </option>
                        <option value="Blogs and Articles"> <?= Translate::statistics($language, "platformBoth"); ?> </option>
                        <option value="Only Blogs"<?php if((int)$articleID <= 0) echo " selected"; ?>> <?= Translate::statistics($language, "platformBlogs"); ?> </option>
                        <option value="Only Articles"<?php if((int)$articleID > 0) echo " selected"; ?>> <?= Translate::statistics($language, "platformArticles"); ?> </option>
                    </select>
                    <select id="blog" class="form-control my-4">
                        <option value disabled> <?= Translate::statistics($language, "blogsTitle"); ?> </option>
                        <option value="-1" selected> <?= Translate::statistics($language, "blogsAll"); ?> </option>
                        <?php foreach($blogsTimeline as $blog) { ?>
                            <option value="<?= $blog["ID"]; ?>"<?php if($blogID == $blog["ID"]) echo " selected"; ?>> <?= $blog["Title"]; ?> </option>
                        <?php } ?>
                    </select>
                    <select id="article" class="form-control my-4<?php if((int)$articleID <= 0) echo " d-none"; ?>">
                        <option value disabled> <?= Translate::statistics($language, "articlesTitle"); ?> </option>
                        <option value="-1" selected> <?= Translate::statistics($language, "articlesAll"); ?> </option>
                        <?php foreach($articlesTimeline as $article) { ?>
                            <option value="<?= $article["ID"]; ?>"<?php if((int)$articleID == $article["ID"]) echo " selected"; ?>> <?= $article["Title"]; ?> </option>
                        <?php } ?>
                    </select>
                    <div class="d-flex w-100">
                        <input id="count" class="form-control my-4 mr-4" type="number" value="10" min="3" max="30"/>
                        <select id="period" class="form-control my-4 ml-4">
                            <option value disabled> <?= Translate::statistics($language, "periodTitle"); ?> </option>
                            <option value="Days" selected> <?= Translate::statistics($language, "periodDays"); ?> </option>
                            <option value="Weeks"> <?= Translate::statistics($language, "periodWeeks"); ?> </option>
                            <option value="Months"> <?= Translate::statistics($language, "periodMonths"); ?> </option>
                        </select>
                    </div>
                    <div class="col-12 col-md-4">
                        <button id="searches" class="btn btn-primary w-100 my-4"> <?= Translate::statistics($language, "searches"); ?> </button>
                    </div>
                    <div class="col-12 col-md-4">
                        <button id="positions" class="btn btn-success w-100 my-4"> <?= Translate::statistics($language, "positions"); ?> </button>
                    </div>
                    <div class="col-12 col-md-4">
                        <button id="clicks" class="btn btn-danger w-100 my-4"> <?= Translate::statistics($language, "clicks"); ?> </button>
                    </div>
                </div>
                <canvas id="statistics" class="my-4"> </canvas>
            </article>
            <article class="col-12 col-md-10 col-xl-8 offset-md-1 offset-xl-2 mt-5">
                <div class="row">
                    <div class="col-12 col-md-6 input-group my-4" data-toggle="modal" data-target="#boostModal">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <img class="icon" src="/BlogsBerry/Public/Images/Icons/Boost.png" alt="<?= Translate::statistics($language, "boost"); ?>"/>
                            </div>
                        </div>
                        <button class="form-control btn btn-outline-dark"> <?= Translate::statistics($language, "boost"); ?> </button>
                    </div>
                    <div class="col-12 col-md-6 input-group my-4" onclick="window.location.assign('/BlogsBerry/User')">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <img class="icon" src="/BlogsBerry/Public/Images/Icons/Home.png" alt="<?= Translate::statistics($language, "home"); ?>"/>
                            </div>
                        </div>
                        <button class="form-control btn btn-outline-dark"> <?= Translate::statistics($language, "home"); ?> </button>
                    </div>
                </div>
            </article>
        </section>
        <?php require("Private/Footer.php"); ?>
        <div id="boostModal" class="modal fade p-5">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content p-5">
                    <p class="h2 my-4 text-center"> <?= Translate::statistics($language, "boost"); ?> </p>
                    <p class="my-4 text-justify"> <?= Translate::statistics($language, "boostContent"); ?> </p>
                    <button id="boostButton" class="btn btn-primary my-4"> <?= Translate::statistics($language, "boostButton"); ?> </button>
                </div>
            </div>
        </div>
    </body>
</html>
