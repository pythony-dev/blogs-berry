
<!DOCTYPE HTML>

<html>
    <head>
        <?php require("Private/Header.php"); ?>
        <script src="/BlogsBerry/Public/Scripts/Articles.js"> </script>
        <title> <?= Translate::articles($language, "title"); ?> - Blog's Berry </title>
    </head>
    <body class="container">
        <div class="d-flex flex-column justify-content-center min-vh-100">
            <section class="row p-5 bg-white border shadow rounded-top">
                <?php require("Private/Navbar.php"); ?>
                <article class="col-12 col-md-10 col-xl-8 offset-md-1 offset-xl-2 mt-5">
                    <div class="row">
                        <p class="h2 w-100 my-4 text-center"> <?= Translate::articles($language, "content"); ?> </p>
                        <input id="articlesSearch" class="form-control my-4 text-center" type="text" placeholder="<?= Translate::articles($language, "search"); ?>"/>
                    </div>
                </article>
            </section>
            <?php require("Private/Footer.php"); ?>
        </div>
        <div id="articlesDiv" class="d-none mt-5">
            <section id="articlesResults" class="row p-5 bg-white border shadow rounded-top">
            </section>
            <?php require("Private/Footer.php"); ?>
        </div>
    </body>
</html>
