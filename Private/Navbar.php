
<article class="col-12 col-md-10 col-xl-8 offset-md-1 offset-xl-2 mb-5">
    <div class="row">
        <div class="navbar-md navbar-expand-md">
            <div class="row">
                <div class="col-9 col-md-12">
                    <a href="<?= $userID <= 0 ? "/" : ($user["Status"] != "Blogger" ? "/Home" : "/User"); ?>">
                        <img class="img-fluid" src="/BlogsBerry/Public/Images/Icons/Title.png" alt="Blog's Berry"/>
                    </a>
                </div>
                <div class="col-3 d-md-none d-flex justify-content-center align-items-center" data-toggle="collapse" data-target='#navbar'>
                    <img class="icon" src="/BlogsBerry/Public/Images/Icons/Menu.png" alt="Menu"/>
                </div>
            </div>
            <?php if($user["Status"] != "Blogger") { ?>
                <nav id="navbar" class="navbar-collapse collapse w-100">
                    <ul class="w-100 d-flex flex-column flex-md-row justify-content-around align-items-center list-unstyled <?= in_array($action, array("Welcome", "Home", "Terms")) ? "mt-5" : "my-5"; ?>">
                        <?php if($userID <= 0) { ?>
                            <li>
                                <a class="text-dark<?php if($action == "Welcome") echo " font-weight-bold"; ?>" href="/BlogsBerry/Welcome"> <?= Translate::navbar($language, "welcome"); ?> </a>
                            </li>
                        <?php } else { ?>
                            <li>
                                <a class="text-dark<?php if($action == "Home") echo " font-weight-bold"; ?>" href="/BlogsBerry/Home"> <?= Translate::navbar($language, "home"); ?> </a>
                            </li>
                        <?php } ?>
                        <li>
                            <a class="text-dark<?php if($action == "Blogs") echo " font-weight-bold"; ?>" href="/BlogsBerry/Blogs"> <?= Translate::navbar($language, "blogs"); ?> </a>
                        </li>
                        <li>
                            <a class="text-dark<?php if($action == "Articles") echo " font-weight-bold"; ?>" href="/BlogsBerry/Articles"> <?= Translate::navbar($language, "articles"); ?> </a>
                        </li>
                        <?php if($userID <= 0) { ?>
                            <li>
                                <a class="text-dark<?php if($action == "Login") echo " font-weight-bold"; ?>" href="/BlogsBerry/Login"> <?= Translate::navbar($language, "login"); ?> </a>
                            </li>
                            <li>
                                <a class="text-dark<?php if($action == "Signup") echo " font-weight-bold"; ?>" href="/BlogsBerry/Signup"> <?= Translate::navbar($language, "signup"); ?> </a>
                            </li>
                            <li class="dropdown">
                                <a id="dropdown" class="text-dark" href="" data-toggle="dropdown"> <?= Translate::navbar($language, lcfirst($language)); ?> </a>
                                <div class="dropdown-menu">
                                    <?php if($language != "English") echo '<a class="dropdown-item" href="/BlogsBerry/' . $action . '/English"> ' . Translate::navbar($language, "english") . ' </a>'; ?>
                                    <?php if($language != "German") echo '<a class="dropdown-item" href="/BlogsBerry/' . $action . '/German"> ' . Translate::navbar($language, "german") . ' </a>'; ?>
                                    <?php if($language != "French") echo '<a class="dropdown-item" href="/BlogsBerry/' . $action . '/French"> ' . Translate::navbar($language, "french") . ' </a>'; ?>
                                    <?php if($language != "Italian") echo '<a class="dropdown-item" href="/BlogsBerry/' . $action . '/Italian"> ' . Translate::navbar($language, "italian") . ' </a>'; ?>
                                    <?php if($language != "Spanish") echo '<a class="dropdown-item" href="/BlogsBerry/' . $action . '/Spanish"> ' . Translate::navbar($language, "spanish") . ' </a>'; ?>
                                </div>
                            </li>
                        <?php } else { ?>
                            <li>
                                <a class="text-dark<?php if($action == "User") echo " font-weight-bold"; ?>" href="/BlogsBerry/User"> <?= Translate::navbar($language, "account"); ?> </a>
                            </li>
                            <li>
                                <a class="text-dark" href="/BlogsBerry/Logout"> <?= Translate::navbar($language, "logout"); ?> </a>
                            </li>
                        <?php } ?>
                    </ul>
                </nav>
            <?php } ?>
            <input id="language" type="hidden" value="<?= $language; ?>"/>
        </div>
    </div>
</article>
