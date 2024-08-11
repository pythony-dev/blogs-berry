
<!DOCTYPE HTML>

<html>
    <head>
        <?php require("Private/Header.php"); ?>
        <script src="/BlogsBerry/Public/Scripts/Signup.js"> </script>
        <title> <?= Translate::signup($language, "title"); ?> - Blog's Berry </title>
    </head>
    <body class="container">
        <div class="d-flex flex-column justify-content-center min-vh-100">
            <section class="row p-5 bg-white border shadow rounded-top">
                <?php require("Private/Navbar.php"); ?>
                <article class="col-12 col-md-10 col-xl-8 offset-md-1 offset-xl-2 mt-5">
                    <form id="signupForm" class="row">
                        <p class="h2 w-100 my-4 text-center"> <?= Translate::signup($language, "content"); ?> </p>
                        <input id="signupEmail" class="form-control my-4 text-center" type="email" placeholder="<?= Translate::signup($language, "email"); ?>" required/>
                        <input id="signupUsername" class="form-control my-4 text-center" type="text" placeholder="<?= Translate::signup($language, "username"); ?>" required/>
                        <select id="signupStatus" class="form-control my-4" required>
                            <option value disabled selected> <?= Translate::signup($language, "status"); ?> </option>
                            <option value="Reader"> <?= Translate::signup($language, "reader"); ?> </option>
                            <option value="Blogger"> <?= Translate::signup($language, "blogger"); ?> </option>
                        </select>
                        <div class="form-check w-100 my-4 text-center">
                            <input id="signupTerms" class="form-check-input" type="checkbox" required/>
                            <label id="signupTerms" class="form-check-label" for="signupTerms"> <?= Translate::signup($language, "terms"); ?> </label>
                        </div>
                        <input class="btn btn-primary w-100 my-4" type="submit" value="<?= Translate::signup($language, "submit"); ?>"/>
                    </form>
                </article>
            </section>
            <?php require("Private/Footer.php"); ?>
        </div>
    </body>
</html>
