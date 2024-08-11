
<!DOCTYPE HTML>

<html>
    <head>
        <?php require("Private/Header.php"); ?>
        <script src="/BlogsBerry/Public/Scripts/Overview.js"> </script>
        <title> <?= $blog["Title"]; ?> - Blog's Berry </title>
    </head>
    <body class="container">
        <section class="row p-5 bg-white border shadow rounded-top">
            <?php require("Private/Navbar.php"); ?>
            <article class="col-12 col-md-10 col-xl-8 offset-md-1 offset-xl-2 my-5">
                <div class="row">
                    <?php if(sizeof($timeline) > 0) { ?>
                        <p class="h2 w-100 my-4 text-center"> <?= Translate::overview($language, "title"); ?> </p>
                        <p class="my-4 text-justify"> <?= Translate::overview($language, "content"); ?> </p>
                        <table class="table table-striped table-bordered table-responsive text-center my-4">
                            <thead>
                                <tr>
                                    <th class="w-25"> <?= Translate::overview($language, "tableTitle"); ?> </th>
                                    <th class="w-25"> <?= Translate::overview($language, "tableImage"); ?> </th>
                                    <th class="w-25"> <?= Translate::overview($language, "tableEdit"); ?> </th>
                                    <th class="w-25"> <?= Translate::overview($language, "tableStatistics"); ?> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($timeline as $article) { ?>
                                    <tr>
                                        <td class="align-middle"> <?= $article["Title"]; ?> </td>
                                        <td class="align-middle">
                                            <img class="img-fluid my-4 shadow rounded" src="/BlogsBerry/Public/Images/Articles/<?= $article["Image"]; ?>.jpeg" alt="<?= $article["Title"]; ?>"/>
                                        </td>
                                        <td class="align-middle">
                                            <button id="<?= $article["ID"]; ?>" class="btn btn-outline-primary w-100 my-4 edit"> <?= Translate::overview($language, "tableEdit"); ?> </button>
                                        </td>
                                        <td class="align-middle">
                                            <a class="btn btn-outline-success w-100 my-4" href="/BlogsBerry/Statistics/<?= $blogID . "/" . $article["ID"]; ?>"> <?= Translate::overview($language, "tableStatistics"); ?> </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    <?php } else { ?>
                        <p class="h5 w-100 my-4 text-center"> <?= Translate::overview($language, "empty"); ?> </p>
                    <?php } ?>
                </div>
            </article>
            <article class="col-12 col-md-10 col-xl-8 offset-md-1 offset-xl-2 mt-5">
                <div class="row">
                    <div class="col-12 col-md-6 input-group my-4" data-toggle="modal" data-target="#settingsModal">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <img class="icon" src="/BlogsBerry/Public/Images/Icons/Settings.png" alt="<?= Translate::overview($language, "settings"); ?>"/>
                            </div>
                        </div>
                        <button class="form-control btn btn-outline-dark"> <?= Translate::overview($language, "settings"); ?> </button>
                    </div>
                    <div class="col-12 col-md-6 input-group my-4" data-toggle="modal" data-target="#addModal">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <img class="icon" src="/BlogsBerry/Public/Images/Icons/Add.png" alt="<?= Translate::overview($language, "add"); ?>"/>
                            </div>
                        </div>
                        <button class="form-control btn btn-outline-dark"> <?= Translate::overview($language, "add"); ?> </button>
                    </div>
                    <div class="col-12 input-group my-4" onclick="window.location.assign('/BlogsBerry/User')">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <img class="icon" src="/BlogsBerry/Public/Images/Icons/Home.png" alt="<?= Translate::overview($language, "home"); ?>"/>
                            </div>
                        </div>
                        <button class="form-control btn btn-outline-dark"> <?= Translate::overview($language, "home"); ?> </button>
                    </div>
                </div>
            </article>
        </section>
        <?php require("Private/Footer.php"); ?>
        <div id="settingsModal" class="modal fade p-5">
            <div class="modal-dialog modal-dialog-centered">
                <form id="settingsForm" class="modal-content p-5">
                    <input id="settingsBlogID" type="hidden" value="<?= $blogID; ?>"/>
                    <p class="h2 my-4 text-center"> <?= Translate::overview($language, "settings"); ?> </p>
                    <select id="settingsLanguage" class="form-control my-4" required>
                        <option value disabled<?php if(!in_array($blog["Language"], $languages)) echo " selected"; ?>> <?= Translate::overview($language, "language"); ?> </option>
                        <option value="English"<?php if($blog["Language"] == "English") echo " selected"; ?>> <?= Translate::overview($language, "english"); ?> </option>
                        <option value="German"<?php if($blog["Language"] == "German") echo " selected"; ?>> <?= Translate::overview($language, "german"); ?> </option>
                        <option value="French"<?php if($blog["Language"] == "French") echo " selected"; ?>> <?= Translate::overview($language, "french"); ?> </option>
                        <option value="Italian"<?php if($blog["Language"] == "Italian") echo " selected"; ?>> <?= Translate::overview($language, "italian"); ?> </option>
                        <option value="Spanish"<?php if($blog["Language"] == "Spanish") echo " selected"; ?>> <?= Translate::overview($language, "spanish"); ?> </option>
                    </select>
                    <input id="settingsTitle" class="form-control my-4 text-center" type="text" value="<?= $blog["Title"]; ?>" placeholder="<?= Translate::overview($language, "settingsTitle"); ?>" required/>
                    <textarea id="settingsContent" class="form-control my-4 text-center" rows="4" placeholder="<?= Translate::overview($language, "settingsContent"); ?>" required><?= $blog["Content"]; ?></textarea>
                    <input id="settingsLink" class="form-control my-4 text-center" type="url" value="<?= $blog["Link"]; ?>" placeholder="<?= Translate::overview($language, "settingsLink"); ?>" required/>
                    <input id="settingsFile" class="d-none" type="file" name="Image" accept=".jpeg, .jpg, .png"/>
                    <input id="settingsImageID" type="hidden" value="<?= $blog["Image"]; ?>"/>
                    <img id="settingsImage" class="img-fluid my-4 shadow rounded" src="/BlogsBerry/Public/Images/Blogs/<?= $blog["Image"]; ?>.jpeg" alt="<?= $blog["Title"]; ?>"/>
                    <input class="btn btn-primary mb-5 mt-4" type="submit" value="<?= Translate::overview($language, "settingsSubmit"); ?>"/>
                    <button id="settingsDelete" class="btn btn-outline-danger mt-5 mb-4"> <?= Translate::overview($language, "settingsDelete"); ?> </button>
                </form>
            </div>
        </div>
        <div id="addModal" class="modal fade p-5">
            <div class="modal-dialog modal-dialog-centered">
                <form id="addForm" class="modal-content p-5">
                    <input id="addBlogID" type="hidden" value="<?= $blogID; ?>"/>
                    <p class="h2 my-4 text-center"> <?= Translate::overview($language, "add"); ?> </p>
                    <input id="addTitle" class="form-control my-4 text-center" type="text" placeholder="<?= Translate::overview($language, "addTitle"); ?>" required/>
                    <textarea id="addContent" class="form-control my-4 text-center" rows="4" placeholder="<?= Translate::overview($language, "addContent"); ?>" required></textarea>
                    <input id="addLink" class="form-control my-4 text-center" type="url" placeholder="<?= Translate::overview($language, "addLink"); ?>" required/>
                    <div id="addDiv" class="custom-file my-4">
                        <input id="addFile" class="custom-file-input" type="file" name="Image" accept=".jpeg, .jpg, .png" required/>
                        <label class="custom-file-label" for="addFile"> <?= Translate::overview($language, "addImage"); ?> </label>
                    </div>
                    <input id="addImageID" type="hidden"/>
                    <img id="addImage" class="d-none img-fluid my-4 shadow rounded"/>
                    <input class="btn btn-primary my-4" type="submit" value="<?= Translate::overview($language, "addSubmit"); ?>"/>
                </form>
            </div>
        </div>
        <div id="editModal" class="modal fade p-5">
            <div class="modal-dialog modal-dialog-centered">
                <form id="editForm" class="modal-content p-5">
                    <input id="editArticleID" type="hidden"/>
                    <p class="h2 my-4 text-center"> <?= Translate::overview($language, "editTitle"); ?> </p>
                    <input id="editTitle" class="form-control my-4 text-center" type="text" placeholder="<?= Translate::overview($language, "addTitle"); ?>" required/>
                    <textarea id="editContent" class="form-control my-4 text-center" rows="4" placeholder="<?= Translate::overview($language, "addContent"); ?>" required></textarea>
                    <input id="editLink" class="form-control my-4 text-center" type="url" placeholder="<?= Translate::overview($language, "addLink"); ?>" required/>
                    <input id="editFile" class="d-none" type="file" name="Image" accept=".jpeg, .jpg, .png"/>
                    <input id="editImageID" type="hidden"/>
                    <img id="editImage" class="img-fluid my-4 shadow rounded"/>
                    <input class="btn btn-primary mb-5 mt-4" type="submit" value="<?= Translate::overview($language, "settingsSubmit"); ?>"/>
                    <button id="editDelete" class="btn btn-outline-danger mt-5 mb-4"> <?= Translate::overview($language, "settingsDelete"); ?> </button>
                </form>
            </div>
        </div>
    </body>
</html>
