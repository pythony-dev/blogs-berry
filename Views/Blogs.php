
<!DOCTYPE HTML>

<html>
    <head>
        <?php require("Private/Header.php"); ?>
        <script src="/BlogsBerry/Public/Scripts/Blogs.js"> </script>
        <title> <?= Translate::blogs($language, "title"); ?> - Blog's Berry </title>
    </head>
    <body class="container">
        <div class="d-flex flex-column justify-content-center min-vh-100">
            <section class="row p-5 bg-white border shadow rounded-top">
                <?php require("Private/Navbar.php"); ?>
                <article class="col-12 col-md-10 col-xl-8 offset-md-1 offset-xl-2 mt-5">
                    <div class="row">
                        <p class="h2 w-100 my-4 text-center"> <?= Translate::blogs($language, "content"); ?> </p>
                        <input id="blogsSearch" class="form-control my-4 text-center" type="text" placeholder="<?= Translate::blogs($language, "search"); ?>"/>
                    </div>
                </article>
            </section>
            <?php require("Private/Footer.php"); ?>
        </div>
        <div id="blogsDiv" class="d-none mt-5">
            <section id="blogsResults" class="row p-5 bg-white border shadow rounded-top">
            </section>
            <?php require("Private/Footer.php"); ?>
        </div>
    </body>
</html>
