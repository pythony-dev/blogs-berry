
<!DOCTYPE HTML>

<html>
    <head>
        <?php require("Private/Header.php"); ?>
        <script src="/BlogsBerry/Public/Scripts/Blogger.js"> </script>
        <title> <?= $user["Username"]; ?> - Blog's Berry </title>
    </head>
    <body class="container">
        <section class="row p-5 bg-white border shadow rounded-top">
            <?php require("Private/Navbar.php"); ?>
            <article class="col-12 col-md-10 col-xl-8 offset-md-1 offset-xl-2 my-5">
                <div class="row">
                    <?php if(sizeof($timeline) > 0) { ?>
                        <p class="h2 w-100 my-4 text-center"> <?= Translate::blogger($language, "title"); ?> </p>
                        <p class="my-4 text-justify"> <?= Translate::blogger($language, "content"); ?> </p>
                        <table class="table table-striped table-bordered table-responsive text-center my-4">
                            <thead>
                                <tr>
                                    <th class="w-25"> <?= Translate::blogger($language, "tableTitle"); ?> </th>
                                    <th class="w-25"> <?= Translate::blogger($language, "tableImage"); ?> </th>
                                    <th class="w-25"> <?= Translate::blogger($language, "tableOverview"); ?> </th>
                                    <th class="w-25"> <?= Translate::blogger($language, "tableStatistics"); ?> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($timeline as $blog) { ?>
                                    <tr>
                                        <td class="align-middle"> <?= $blog["Title"]; ?> </td>
                                        <td class="align-middle">
                                            <img class="img-fluid my-4 shadow rounded" src="/BlogsBerry/Public/Images/Blogs/<?= $blog["Image"]; ?>.jpeg" alt="<?= $blog["Title"]; ?>"/>
                                        </td>
                                        <td class="align-middle">
                                            <a class="btn btn-outline-primary w-100 my-4" href="/BlogsBerry/Overview/<?= $blog["ID"]; ?>"> <?= Translate::blogger($language, "tableOverview"); ?> </a>
                                        </td>
                                        <td class="align-middle">
                                            <a class="btn btn-outline-success w-100 my-4" href="/BlogsBerry/Statistics/<?= $blog["ID"]; ?>"> <?= Translate::blogger($language, "tableStatistics"); ?> </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    <?php } else { ?>
                        <p class="h5 w-100 my-4 text-center"> <?= Translate::blogger($language, "empty"); ?> </p>
                    <?php } ?>
                </div>
            </article>
            <article class="col-12 col-md-10 col-xl-8 offset-md-1 offset-xl-2 mt-5">
                <div class="row">
                    <div class="col-12 col-md-6 input-group my-4" data-toggle="modal" data-target="#settingsModal">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <img class="icon" src="/BlogsBerry/Public/Images/Icons/Settings.png" alt="<?= Translate::blogger($language, "settings"); ?>"/>
                            </div>
                        </div>
                        <button class="form-control btn btn-outline-dark"> <?= Translate::blogger($language, "settings"); ?> </button>
                    </div>
                    <div class="col-12 col-md-6 input-group my-4" data-toggle="modal" data-target="#addModal">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <img class="icon" src="/BlogsBerry/Public/Images/Icons/Add.png" alt="<?= Translate::blogger($language, "add"); ?>"/>
                            </div>
                        </div>
                        <button class="form-control btn btn-outline-dark"> <?= Translate::blogger($language, "add"); ?> </button>
                    </div>
                    <div class="col-12 input-group my-4" onclick="window.location.assign('/BlogsBerry/Logout')">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <img class="icon" src="/BlogsBerry/Public/Images/Icons/Logout.png" alt="<?= Translate::blogger($language, "logout"); ?>"/>
                            </div>
                        </div>
                        <button class="form-control btn btn-outline-dark"> <?= Translate::blogger($language, "logout"); ?> </button>
                    </div>
                </div>
            </article>
        </section>
        <?php require("Private/Footer.php"); ?>
        <div id="settingsModal" class="modal fade p-5">
            <div class="modal-dialog modal-dialog-centered">
                <form id="settingsForm" class="modal-content p-5">
                    <p class="h2 my-4 text-center"> <?= Translate::blogger($language, "settings"); ?> </p>
                    <select id="settingsLanguage" class="form-control my-4" required>
                        <option value disabled<?php if(!in_array($user["Language"], $languages)) echo " selected"; ?>> <?= Translate::blogger($language, "language"); ?> </option>
                        <option value="English"<?php if($user["Language"] == "English") echo " selected"; ?>> <?= Translate::blogger($language, "english"); ?> </option>
                        <option value="German"<?php if($user["Language"] == "German") echo " selected"; ?>> <?= Translate::blogger($language, "german"); ?> </option>
                        <option value="French"<?php if($user["Language"] == "French") echo " selected"; ?>> <?= Translate::blogger($language, "french"); ?> </option>
                        <option value="Italian"<?php if($user["Language"] == "Italian") echo " selected"; ?>> <?= Translate::blogger($language, "italian"); ?> </option>
                        <option value="Spanish"<?php if($user["Language"] == "Spanish") echo " selected"; ?>> <?= Translate::blogger($language, "spanish"); ?> </option>
                    </select>
                    <input id="settingsEmail" class="form-control my-4 text-center is-valid" type="email" value="<?= $user["Email"]; ?>" placeholder="<?= Translate::blogger($language, "settingsEmail"); ?>" required/>
                    <input id="settingsUsername" class="form-control my-4 text-center is-valid" type="text" value="<?= $user["Username"]; ?>" placeholder="<?= Translate::blogger($language, "settingsUsername"); ?>" required/>
                    <select id="settingsFrequency" class="form-control mb-5 mt-4" required>
                        <option value disabled<?php if(!in_array($user["Frequency"], array("Daily", "Weekly", "Monthly", "Annual", "Never"))) echo " selected"; ?>> <?= Translate::blogger($language, "frequency"); ?> </option>
                        <option value="Daily"<?php if($user["Frequency"] == "Daily") echo " selected"; ?>> <?= Translate::blogger($language, "daily"); ?> </option>
                        <option value="Weekly"<?php if($user["Frequency"] == "Weekly") echo " selected"; ?>> <?= Translate::blogger($language, "weekly"); ?> </option>
                        <option value="Monthly"<?php if($user["Frequency"] == "Monthly") echo " selected"; ?>> <?= Translate::blogger($language, "monthly"); ?> </option>
                        <option value="Annual"<?php if($user["Frequency"] == "Annual") echo " selected"; ?>> <?= Translate::blogger($language, "annual"); ?> </option>
                        <option value="Never"<?php if($user["Frequency"] == "Never") echo " selected"; ?>> <?= Translate::blogger($language, "never"); ?> </option>
                    </select>
                    <input id="settingsPassword" class="form-control mt-5 mb-4 text-center" type="password" placeholder="<?= Translate::blogger($language, "settingsPassword"); ?>" required/>
                    <input class="btn btn-primary my-4" type="submit" value="<?= Translate::blogger($language, "settingsSubmit"); ?>"/>
                </form>
            </div>
        </div>
        <div id="addModal" class="modal fade p-5">
            <div class="modal-dialog modal-dialog-centered">
                <form id="addForm" class="modal-content p-5">
                    <p class="h2 my-4 text-center"> <?= Translate::blogger($language, "add"); ?> </p>
                    <select id="addLanguage" class="form-control my-4" required>
                        <option value disabled<?php if(!in_array($user["Language"], $language)) echo " selected"; ?>> <?= Translate::blogger($language, "language"); ?> </option>
                        <option value="English"<?php if($user["Language"] == "English") echo " selected"; ?>> <?= Translate::blogger($language, "english"); ?> </option>
                        <option value="German"<?php if($user["Language"] == "German") echo " selected"; ?>> <?= Translate::blogger($language, "german"); ?> </option>
                        <option value="French"<?php if($user["Language"] == "French") echo " selected"; ?>> <?= Translate::blogger($language, "french"); ?> </option>
                        <option value="Italian"<?php if($user["Language"] == "Italian") echo " selected"; ?>> <?= Translate::blogger($language, "italian"); ?> </option>
                        <option value="Spanish"<?php if($user["Language"] == "Spanish") echo " selected"; ?>> <?= Translate::blogger($language, "spanish"); ?> </option>
                    </select>
                    <input id="addTitle" class="form-control my-4 text-center" type="text" placeholder="<?= Translate::blogger($language, "addTitle"); ?>" required/>
                    <textarea id="addContent" class="form-control my-4 text-center" rows="4" placeholder="<?= Translate::blogger($language, "addContent"); ?>" required></textarea>
                    <input id="addLink" class="form-control my-4 text-center" type="url" placeholder="<?= Translate::blogger($language, "addLink"); ?>" required/>
                    <div id="addDiv" class="custom-file my-4">
                        <input id="addFile" class="custom-file-input" type="file" name="Image" accept=".jpeg, .jpg, .png" required/>
                        <label class="custom-file-label" for="addFile"> <?= Translate::blogger($language, "addImage"); ?> </label>
                    </div>
                    <input id="addImageID" type="hidden"/>
                    <img id="addImage" class="d-none img-fluid my-4 shadow rounded"/>
                    <input class="btn btn-primary my-4" type="submit" value="<?= Translate::blogger($language, "addSubmit"); ?>"/>
                </form>
            </div>
        </div>
    </body>
</html>
