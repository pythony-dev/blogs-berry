
<!DOCTYPE HTML>

<html>
    <head>
        <?php require("Private/Header.php"); ?>
        <title> <?= Translate::terms($language, "title"); ?> - Blog's Berry </title>
    </head>
    <body class="container">
        <section class="row p-5 bg-white border shadow rounded-top">
            <?php require("Private/Navbar.php"); ?>
            <article id="Terms" class="col-12 col-md-10 col-xl-8 offset-md-1 offset-xl-2 my-5">
                <div class="row">
                    <p class="h2 w-100 my-4 text-center"> <?= Translate::terms($language, "termsTitle"); ?> </p>
                    <p class="my-4 text-justify"> <?= Translate::terms($language, "termsContent"); ?> </p>
                </div>
            </article>
            <article id="Cookies" class="col-12 col-md-10 col-xl-8 offset-md-1 offset-xl-2 my-5">
                <div class="row">
                    <p class="h2 w-100 my-4 text-center"> <?= Translate::terms($language, "cookiesTitle"); ?> </p>
                    <p class="my-4 text-justify"> <?= Translate::terms($language, "cookiesContent"); ?> </p>
                </div>
            </article>
            <article id="Privacy" class="col-12 col-md-10 col-xl-8 offset-md-1 offset-xl-2 my-5">
                <div class="row">
                    <p class="h2 w-100 my-4 text-center"> <?= Translate::terms($language, "privacyTitle"); ?> </p>
                    <p class="my-4 text-justify"> <?= Translate::terms($language, "privacyContent"); ?> </p>
                </div>
            </article>
            <article id="Partnerships" class="col-12 col-md-10 col-xl-8 offset-md-1 offset-xl-2 my-5">
                <div class="row">
                    <p class="h2 w-100 my-4 text-center"> <?= Translate::terms($language, "partnershipsTitle"); ?> </p>
                    <p class="my-4 text-justify"> <?= Translate::terms($language, "partnershipsContent"); ?> </p>
                </div>
            </article>
            <article id="Contact" class="col-12 col-md-10 col-xl-8 offset-md-1 offset-xl-2 mt-5">
                <div class="row">
                    <p class="h2 w-100 my-4 text-center"> <?= Translate::terms($language, "contactTitle"); ?> </p>
                    <p class="my-4 text-justify"> <?= Translate::terms($language, "contactContent"); ?> </p>
                </div>
            </article>
        </section>
        <?php require("Private/Footer.php"); ?>
    </body>
</html>
