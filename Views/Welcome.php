
<!DOCTYPE HTML>

<html>
    <head>
        <?php require("Private/Header.php"); ?>
        <title> <?= Translate::welcome($language, "title"); ?> - Blog's Berry </title>
    </head>
    <body class="container">
        <section class="row p-5 bg-white border shadow rounded-top">
            <?php require("Private/Navbar.php"); ?>
            <article class="col-12 col-md-10 col-xl-8 offset-md-1 offset-xl-2 my-5">
                <div class="row">
                    <p class="h2 w-100 my-4 text-center"> <?= Translate::welcome($language, "blogsTitle"); ?> </p>
                    <div class="row">
                        <div class="col-12 col-md-6 my-auto">
                            <p class="my-4 text-justify"> <?= Translate::welcome($language, "blogsContent"); ?> </p>
                        </div>
                        <div class="col-12 col-md-6 my-auto">
                            <a href="/BlogsBerry/Blogs">
                                <img class="img-fluid my-4 shadow rounded" src="/BlogsBerry/Public/Images/Backgrounds/Blogs.jpeg" alt="Blogs"/>
                            </a>
                        </div>
                    </div>
                    <a class="btn btn-primary w-100 my-4" href="/BlogsBerry/Blogs"> <?= Translate::welcome($language, "blogsButton"); ?> </a>
                </div>
            </article>
            <article class="col-12 col-md-10 col-xl-8 offset-md-1 offset-xl-2 my-5">
                <div class="row">
                    <p class="h2 w-100 my-4 text-center"> <?= Translate::welcome($language, "articlesTitle"); ?> </p>
                    <div class="row">
                        <div class="col-12 col-md-6 my-auto order-md-1">
                            <p class="my-4 text-justify"> <?= Translate::welcome($language, "articlesContent"); ?> </p>
                        </div>
                        <div class="col-12 col-md-6 my-auto">
                            <a href="/Articles">
                                <img class="img-fluid my-4 shadow rounded" src="/BlogsBerry/Public/Images/Backgrounds/Articles.jpeg" alt="Articles"/>
                            </a>
                        </div>
                    </div>
                    <a class="btn btn-primary w-100 my-4" href="/BlogsBerry/Articles"> <?= Translate::welcome($language, "articlesButton"); ?> </a>
                </div>
            </article>
            <article class="col-12 col-md-10 col-xl-8 offset-md-1 offset-xl-2 my-5">
                <div class="row">
                    <p class="h2 w-100 my-4 text-center"> <?= Translate::welcome($language, "usersTitle"); ?> </p>
                    <div class="row">
                        <div class="col-12 col-md-6 my-auto">
                            <p class="my-4 text-justify"> <?= Translate::welcome($language, "usersContent"); ?> </p>
                        </div>
                        <div class="col-12 col-md-6 my-auto">
                            <a href="/Login">
                                <img class="img-fluid my-4 shadow rounded" src="/BlogsBerry/Public/Images/Backgrounds/Users.jpeg" alt="Users"/>
                            </a>
                        </div>
                    </div>
                    <a class="btn btn-primary w-100 my-4" href="/BlogsBerry/Login"> <?= Translate::welcome($language, "usersButton"); ?> </a>
                </div>
            </article>
            <article class="col-12 col-md-10 col-xl-8 offset-md-1 offset-xl-2 mt-5">
                <div class="row">
                    <p class="h2 w-100 my-4 text-center"> <?= Translate::welcome($language, "privacyTitle"); ?> </p>
                    <div class="row">
                        <div class="col-12 col-md-6 my-auto order-md-1">
                            <p class="my-4 text-justify"> <?= Translate::welcome($language, "privacyContent"); ?> </p>
                        </div>
                        <div class="col-12 col-md-6 my-auto">
                            <a href="/Terms#Privacy">
                                <img class="img-fluid my-4 shadow rounded" src="/BlogsBerry/Public/Images/Backgrounds/Privacy.jpeg" alt="Privacy"/>
                            </a>
                        </div>
                    </div>
                    <a class="btn btn-primary w-100 my-4" href="/BlogsBerry/Terms#Privacy"> <?= Translate::welcome($language, "privacyButton"); ?> </a>
                </div>
            </article>
        </section>
        <?php require("Private/Footer.php"); ?>
    </body>
</html>
