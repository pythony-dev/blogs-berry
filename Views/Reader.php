
<!DOCTYPE HTML>

<html>
    <head>
        <?php require("Private/Header.php"); ?>
        <script src="/BlogsBerry/Public/Scripts/Reader.js"> </script>
        <title> <?= $user["Username"]; ?> - Blog's Berry </title>
    </head>
    <body class="container">
        <div class="d-flex flex-column justify-content-center min-vh-100">
            <section class="row p-5 bg-white border shadow rounded-top">
                <?php require("Private/Navbar.php"); ?>
                <article class="col-12 col-md-10 col-xl-8 offset-md-1 offset-xl-2 mt-5">
                    <div class="row">
                        <p class="h2 w-100 my-4 text-center"> <?= Translate::reader($language, "title"); ?> </p>
                        <p class="my-4 text-justify"> <?= Translate::reader($language, "content"); ?> </p>
                        <div class="col-12 col-md-6 input-group my-4" data-toggle="modal" data-target="#blogsModal">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <img class="icon" src="/BlogsBerry/Public/Images/Icons/Blogs.png" alt="<?= Translate::reader($language, "blogs"); ?>"/>
                                </div>
                            </div>
                            <button class="form-control btn btn-outline-dark"> <?= Translate::reader($language, "blogs"); ?> </button>
                        </div>
                        <div class="col-12 col-md-6 input-group my-4" data-toggle="modal" data-target="#articlesModal">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <img class="icon" src="/BlogsBerry/Public/Images/Icons/Articles.png" alt="<?= Translate::reader($language, "articles"); ?>"/>
                                </div>
                            </div>
                            <button class="form-control btn btn-outline-dark"> <?= Translate::reader($language, "articles"); ?> </button>
                        </div>
                        <div class="col-12 col-md-6 input-group my-4" data-toggle="modal" data-target="#settingsModal">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <img class="icon" src="/BlogsBerry/Public/Images/Icons/Settings.png" alt="<?= Translate::reader($language, "settings"); ?>"/>
                                </div>
                            </div>
                            <button class="form-control btn btn-outline-dark"> <?= Translate::reader($language, "settings"); ?> </button>
                        </div>
                        <div class="col-12 col-md-6 input-group my-4" onclick="window.location.assign('/BlogsBerry/Logout')">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <img class="icon" src="/BlogsBerry/Public/Images/Icons/Logout.png" alt="<?= Translate::reader($language, "logout"); ?>"/>
                                </div>
                            </div>
                            <button class="form-control btn btn-outline-dark"> <?= Translate::reader($language, "logout"); ?> </button>
                        </div>
                    </div>
                </article>
            </section>
            <?php require("Private/Footer.php"); ?>
        </div>
        <div id="blogsModal" class="modal fade p-5">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content p-5">
                    <p class="h2 my-4 text-center"> <?= Translate::reader($language, "blogs"); ?> </p>
                    <?php if(sizeof($blogsTimeline) > 0) { ?>
                        <p id="blogsContent" class="my-4 text-justify"> <?= Translate::reader($language, "blogsContent"); ?> </p>
                        <table id="blogsTable" class="table table-striped table-bordered table-responsive text-center my-4">
                            <thead>
                                <tr>
                                    <th class="w-25"> <?= Translate::reader($language, "blogsTitle"); ?> </th>
                                    <th class="w-25"> <?= Translate::reader($language, "blogsImage"); ?> </th>
                                    <th class="w-25"> <?= Translate::reader($language, "blogsOpen"); ?> </th>
                                    <th class="w-25"> <?= Translate::reader($language, "blogsDelete"); ?> </th>
                                </tr>
                            </thead>
                            <tbody id="blogsList">
                                <?php foreach($blogsTimeline as $blogID) { $blog = $blogs->getBlog($blogID["BlogID"]); ?>
                                    <tr>
                                        <td class="align-middle"> <?= $blog["Title"]; ?> </td>
                                        <td class="align-middle">
                                            <img class="img-fluid my-4 shadow rounded" src="/BlogsBerry/Public/Images/Blogs/<?= $blog["Image"]; ?>.jpeg" alt="<?= $blog["Title"]; ?>"/>
                                        </td>
                                        <td class="align-middle">
                                            <a id="<?= $blog["ID"]; ?>" class="btn btn-outline-success w-100 my-4 blogsOpen" href="<?= $blog["Link"]; ?>"> <?= Translate::reader($language, "blogsOpen"); ?> </a>
                                        </td>
                                        <td class="align-middle">
                                            <button id="<?= $blog["ID"]; ?>" class="btn btn-outline-danger w-100 my-4 blogsDelete"> <?= Translate::reader($language, "blogsDelete"); ?> </button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    <?php } else { ?>
                        <p class="my-4 text-justify"> <?= Translate::reader($language, "blogsEmpty"); ?> </p>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div id="articlesModal" class="modal fade p-5">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content p-5">
                    <p class="h2 my-4 text-center"> <?= Translate::reader($language, "articles"); ?> </p>
                    <?php if(sizeof($articlesTimeline) > 0) { ?>
                        <p id="articlesContent" class="my-4 text-justify"> <?= Translate::reader($language, "articlesContent"); ?> </p>
                        <table id="articlesTable" class="table table-striped table-bordered table-responsive text-center my-4">
                            <thead>
                                <tr>
                                    <th class="w-25"> <?= Translate::reader($language, "blogsTitle"); ?> </th>
                                    <th class="w-25"> <?= Translate::reader($language, "blogsImage"); ?> </th>
                                    <th class="w-25"> <?= Translate::reader($language, "blogsOpen"); ?> </th>
                                    <th class="w-25"> <?= Translate::reader($language, "blogsDelete"); ?> </th>
                                </tr>
                            </thead>
                            <tbody id="articlesList">
                                <?php foreach($articlesTimeline as $articleID) { $article = $articles->getArticle($articleID["ArticleID"]); ?>
                                    <tr>
                                        <td class="align-middle"> <?= $article["Title"]; ?> </td>
                                        <td class="align-middle">
                                            <img class="img-fluid my-4 shadow rounded" src="/BlogsBerry/Public/Images/Articles/<?= $article["Image"]; ?>.jpeg" alt="<?= $article["Title"]; ?>"/>
                                        </td>
                                        <td class="align-middle">
                                            <a id="<?= $article["ID"]; ?>" class="btn btn-outline-success w-100 my-4 articlesOpen" href="<?= $article["Link"]; ?>"> <?= Translate::reader($language, "blogsOpen"); ?> </a>
                                        </td>
                                        <td class="align-middle">
                                            <button id="<?= $article["ID"]; ?>" class="btn btn-outline-danger w-100 my-4 articlesDelete"> <?= Translate::reader($language, "blogsDelete"); ?> </button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    <?php } else { ?>
                        <p class="my-4 text-justify"> <?= Translate::reader($language, "articlesEmpty"); ?> </p>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div id="settingsModal" class="modal fade p-5">
            <div class="modal-dialog modal-dialog-centered">
                <form id="settingsForm" class="modal-content p-5">
                    <p class="h2 my-4 text-center"> <?= Translate::reader($language, "settings"); ?> </p>
                    <select id="settingsLanguage" class="form-control my-4" required>
                        <option value disabled<?php if(!in_array($user["Language"], $languages)) echo " selected"; ?>> <?= Translate::reader($language, "language"); ?> </option>
                        <option value="English"<?php if($user["Language"] == "English") echo " selected"; ?>> <?= Translate::reader($language, "english"); ?> </option>
                        <option value="German"<?php if($user["Language"] == "German") echo " selected"; ?>> <?= Translate::reader($language, "german"); ?> </option>
                        <option value="French"<?php if($user["Language"] == "French") echo " selected"; ?>> <?= Translate::reader($language, "french"); ?> </option>
                        <option value="Italian"<?php if($user["Language"] == "Italian") echo " selected"; ?>> <?= Translate::reader($language, "italian"); ?> </option>
                        <option value="Spanish"<?php if($user["Language"] == "Spanish") echo " selected"; ?>> <?= Translate::reader($language, "spanish"); ?> </option>
                    </select>
                    <input id="settingsEmail" class="form-control my-4 text-center is-valid" type="email" value="<?= $user["Email"]; ?>" placeholder="<?= Translate::reader($language, "settingsEmail"); ?>" required/>
                    <input id="settingsUsername" class="form-control my-4 text-center is-valid" type="text" value="<?= $user["Username"]; ?>" placeholder="<?= Translate::reader($language, "settingsUsername"); ?>" required/>
                    <select id="settingsFrequency" class="form-control mb-5 mt-4" required>
                        <option value disabled<?php if(!in_array($user["Frequency"], array("Daily", "Weekly", "Monthly", "Annual", "Never"))) echo " selected"; ?>> <?= Translate::reader($language, "frequency"); ?> </option>
                        <option value="Daily"<?php if($user["Frequency"] == "Daily") echo " selected"; ?>> <?= Translate::reader($language, "daily"); ?> </option>
                        <option value="Weekly"<?php if($user["Frequency"] == "Weekly") echo " selected"; ?>> <?= Translate::reader($language, "weekly"); ?> </option>
                        <option value="Monthly"<?php if($user["Frequency"] == "Monthly") echo " selected"; ?>> <?= Translate::reader($language, "monthly"); ?> </option>
                        <option value="Annual"<?php if($user["Frequency"] == "Annual") echo " selected"; ?>> <?= Translate::reader($language, "annual"); ?> </option>
                        <option value="Never"<?php if($user["Frequency"] == "Never") echo " selected"; ?>> <?= Translate::reader($language, "never"); ?> </option>
                    </select>
                    <input id="settingsPassword" class="form-control mt-5 mb-4 text-center" type="password" placeholder="<?= Translate::reader($language, "settingsPassword"); ?>" required/>
                    <input class="btn btn-primary my-4" type="submit" value="<?= Translate::reader($language, "settingsSubmit"); ?>"/>
                </form>
            </div>
        </div>
    </body>
</html>
