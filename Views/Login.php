
<!DOCTYPE HTML>

<html>
    <head>
        <?php require("Private/Header.php"); ?>
        <script src="/BlogsBerry/Public/Scripts/Login.js"> </script>
        <title> <?= Translate::login($language, "title"); ?> - Blog's Berry </title>
    </head>
    <body class="container">
        <div class="d-flex flex-column justify-content-center min-vh-100">
            <section class="row p-5 bg-white border shadow rounded-top">
                <?php require("Private/Navbar.php"); ?>
                <article class="col-12 col-md-10 col-xl-8 offset-md-1 offset-xl-2 mt-5">
                    <form id="loginForm" class="row">
                        <p class="h2 w-100 my-4 text-center"> <?= Translate::login($language, "content"); ?> </p>
                        <input id="loginUsername" class="form-control my-4 text-center" type="text" placeholder="<?= Translate::login($language, "username"); ?>" required/>
                        <input id="loginPassword" class="form-control my-4 text-center" type="password" placeholder="<?= Translate::login($language, "password"); ?>" required/>
                        <input class="btn btn-primary w-100 my-4" type="submit" value="<?= Translate::login($language, "submit"); ?>"/>
                        <input class="btn btn-outline-primary w-100 my-4" type="button" value="<?= Translate::login($language, "forgot"); ?>" data-toggle="modal" data-target="#forgotModal"/>
                    </form>
                </article>
            </section>
            <?php require("Private/Footer.php"); ?>
        </div>
        <div id="forgotModal" class="modal fade p-5">
            <div class="modal-dialog modal-dialog-centered">
                <form id="forgotForm" class="modal-content p-5">
                    <p class="h2 my-4 text-center"> <?= Translate::login($language, "forgot"); ?> </p>
                    <p class="my-4 text-justify"> <?= Translate::login($language, "forgotContent"); ?> </p>
                    <input id="forgotEmail" class="form-control my-4 text-center" type="email" placeholder="<?= Translate::login($language, "forgotEmail"); ?>" required/>
                    <input class="btn btn-primary my-4" type="submit" value="<?= Translate::login($language, "forgotSubmit"); ?>"/>
                </form>
            </div>
        </div>
    </body>
</html>
