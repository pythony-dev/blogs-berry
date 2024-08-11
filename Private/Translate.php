
<?php

    class Translate {

        static public function navbar($language, $text) {
            if($language == "English")
                return array(
                    "welcome" => "Welcome",
                    "home" => "Home",
                    "blogs" => "Blogs",
                    "articles" => "Articles",
                    "login" => "Login",
                    "signup" => "Registration",
                    "account" => "My Account",
                    "logout" => "Log Out",
                    "english" => "English",
                    "german" => "German",
                    "french" => "French",
                    "italian" => "Italian",
                    "spanish" => "Spanish",
                )[$text];
            else if($language == "German")
                return array(
                    "welcome" => "Welcome",
                    "home" => "Home",
                    "blogs" => "Blogs",
                    "articles" => "Articles",
                    "login" => "Login",
                    "signup" => "Registration",
                    "account" => "My Account",
                    "logout" => "Log Out",
                    "english" => "English",
                    "german" => "German",
                    "french" => "French",
                    "italian" => "Italian",
                    "spanish" => "Spanish",
                )[$text];
            else if($language == "French")
                return array(
                    "welcome" => "Bienvenue",
                    "home" => "Accueil",
                    "blogs" => "Blogs",
                    "articles" => "Articles",
                    "login" => "Connexion",
                    "signup" => "Inscription",
                    "account" => "Mon Compte",
                    "logout" => "Déconnexion",
                    "english" => "Anglais",
                    "german" => "Allemand",
                    "french" => "Français",
                    "italian" => "Italien",
                    "spanish" => "Espagnol",
                )[$text];
            else if($language == "Italian")
                return array(
                    "welcome" => "Welcome",
                    "home" => "Home",
                    "blogs" => "Blogs",
                    "articles" => "Articles",
                    "login" => "Login",
                    "signup" => "Registration",
                    "account" => "My Account",
                    "logout" => "Log Out",
                    "english" => "English",
                    "german" => "German",
                    "french" => "French",
                    "italian" => "Italian",
                    "spanish" => "Spanish",
                )[$text];
            else if($language == "Spanish")
                return array(
                    "welcome" => "Welcome",
                    "home" => "Home",
                    "blogs" => "Blogs",
                    "articles" => "Articles",
                    "login" => "Login",
                    "signup" => "Registration",
                    "account" => "My Account",
                    "logout" => "Log Out",
                    "english" => "English",
                    "german" => "German",
                    "french" => "French",
                    "italian" => "Italian",
                    "spanish" => "Spanish",
                )[$text];
        }

        static public function welcome($language, $text) {
            if($language == "English")
                return array(
                    "title" => "Welcome",
                    "blogsTitle" => "Discover new Blogs",
                    "blogsContent" => "Blogs hold a special place in the hearts of many people. Whether it allows an artist to share his latest creations with the world, a budding chef to make his community salivate, or an entrepreneur to communicate directly with his fans, Blogs have been enjoyed by everyone for generations. Don't wait any longer, and come and discover a host of new Blogs on the subjects you are most passionate about !",
                    "blogsButton" => "Discover new Blogs",
                    "articlesTitle" => "Read fascinating Articles",
                    "articlesContent" => "A Blog allows its author to create a community, through these numerous Articles. Each one of them allows direct communication between the author of the Blog and his subscribers, and allows to express the opinion of each one on various subjects, such as the best destination for a vacation. Come and browse these different Articles now, and learn more about your favorite topics !",
                    "articlesButton" => "Read fascinating Articles",
                    "usersTitle" => "Follow your favorite Blogs and Articles",
                    "usersContent" => "By registering on Blog's Berry, you will be able to save each Blog or Article you like, so you can find them again at any time. This will also ensure that you never miss the publication. You will also have a personalized home page, ensuring you never miss a new publication by your favorite authors. Now that you know all this, what are you waiting for to sign up and enjoy all these benefits ?",
                    "usersButton" => "Follow my Blogs and Articles",
                    "privacyTitle" => "Privacy Policy",
                    "privacyContent" => "As a Web actor, Blog's Berry is used by a large number of users, who entrust us with personal information such as their email address. Our philosophy is that this personal information represents the trust you place in us, and we are committed to doing everything we can to protect it. If you want to know exactly what information we collect, please read our Privacy Policy.",
                    "privacyButton" => "Learn more",
                )[$text];
            else if($language == "German")
                return array(
                    "title" => "Welcome",
                    "blogsTitle" => "Discover new Blogs",
                    "blogsContent" => "Blogs hold a special place in the hearts of many people. Whether it allows an artist to share his latest creations with the world, a budding chef to make his community salivate, or an entrepreneur to communicate directly with his fans, Blogs have been enjoyed by everyone for generations. Don't wait any longer, and come and discover a host of new Blogs on the subjects you are most passionate about !",
                    "blogsButton" => "Discover new Blogs",
                    "articlesTitle" => "Read fascinating Articles",
                    "articlesContent" => "A Blog allows its author to create a community, through these numerous Articles. Each one of them allows direct communication between the author of the Blog and his subscribers, and allows to express the opinion of each one on various subjects, such as the best destination for a vacation. Come and browse these different Articles now, and learn more about your favorite topics !",
                    "articlesButton" => "Read fascinating Articles",
                    "usersTitle" => "Follow your favorite Blogs and Articles",
                    "usersContent" => "By registering on Blog's Berry, you will be able to save each Blog or Article you like, so you can find them again at any time. This will also ensure that you never miss the publication. You will also have a personalized home page, ensuring you never miss a new publication by your favorite authors. Now that you know all this, what are you waiting for to sign up and enjoy all these benefits ?",
                    "usersButton" => "Follow my Blogs and Articles",
                    "privacyTitle" => "Privacy Policy",
                    "privacyContent" => "As a Web actor, Blog's Berry is used by a large number of users, who entrust us with personal information such as their email address. Our philosophy is that this personal information represents the trust you place in us, and we are committed to doing everything we can to protect it. If you want to know exactly what information we collect, please read our Privacy Policy.",
                    "privacyButton" => "Learn more",
                )[$text];
            else if($language == "French")
                return array(
                    "title" => "Bienvenue",
                    "blogsTitle" => "Découvrez de nouveaux Blogs",
                    "blogsContent" => "Les Blogs tiennent une place à part dans le coeur de nombreuses personnes. Que cela permette à un artiste de partager ses dernières créations avec le monde entier, à un cuisinier en herbe de faire saliver sa communauté, ou encore à un entrepreneur de communiquer directement avec ses fans, les Blogs sont appréciés de tous depuis des générations. N'attendez plus, et venez vous aussi découvrir une foule de nouveaux Blogs sur les sujets qui vous passionnent le plus !",
                    "blogsButton" => "Découvrir de nouveaux Blogs",
                    "articlesTitle" => "Lisez des Articles passionnants",
                    "articlesContent" => "Un Blog permet à son auteur de créer une communauté, au travers de ses nombreux Articles. Chacun d'entre eux permet de communiquer directement entre l'auteur du Blog et ses abonnées, et permet d'exprimer l'avis de chacun sur des sujets diverses, tels que la meilleure destination pour des vacances dépaysantes. Venez parcourir dès maintenant ces différents Articles, et apprenez-en plus sur les thématiques que vous préférez !",
                    "articlesButton" => "Lire des Articles passionnants",
                    "usersTitle" => "Suivez vos Blogs et Articles favoris",
                    "usersContent" => "En vous inscrivant sur Blog's Berry, vous pourrez sauvegarder chaque Blog ou Article que vous appréciez, afin de les retrouver à n'importe quel moment. Cela vous permettra également ne jamais rater de publication. Vous aurez également une page d'accueil personnalisée, vous assurant de ne jamais louper une nouvelle publication de vos auteurs favoris. Maintenant que vous savez tout cela, qu'attendez-vous pour vous inscrire et profiter de tous ces avantages ?",
                    "usersButton" => "Suivre mes Blogs et Articles",
                    "privacyTitle" => "Engagement de Confidentialité",
                    "privacyContent" => "En tant qu'acteur du Web, Blog's Berry est utilisé par un nombre important d'utilisateurs, qui nous confient des informations personnelles telles que leurs adresses email. Notre philosophie est que ces données personnelles représentent la confiance que vous nous accordez, et nous nous engageons à tout mettre en oeuvre pour les protéger. Si vous désirez connaitre précisément les données que nous recueillons, nous vous invitons à lire notre Engagement de Confidentialité.",
                    "privacyButton" => "En savoir plus",
                )[$text];
            else if($language == "Italian")
                return array(
                    "title" => "Welcome",
                    "blogsTitle" => "Discover new Blogs",
                    "blogsContent" => "Blogs hold a special place in the hearts of many people. Whether it allows an artist to share his latest creations with the world, a budding chef to make his community salivate, or an entrepreneur to communicate directly with his fans, Blogs have been enjoyed by everyone for generations. Don't wait any longer, and come and discover a host of new Blogs on the subjects you are most passionate about !",
                    "blogsButton" => "Discover new Blogs",
                    "articlesTitle" => "Read fascinating Articles",
                    "articlesContent" => "A Blog allows its author to create a community, through these numerous Articles. Each one of them allows direct communication between the author of the Blog and his subscribers, and allows to express the opinion of each one on various subjects, such as the best destination for a vacation. Come and browse these different Articles now, and learn more about your favorite topics !",
                    "articlesButton" => "Read fascinating Articles",
                    "usersTitle" => "Follow your favorite Blogs and Articles",
                    "usersContent" => "By registering on Blog's Berry, you will be able to save each Blog or Article you like, so you can find them again at any time. This will also ensure that you never miss the publication. You will also have a personalized home page, ensuring you never miss a new publication by your favorite authors. Now that you know all this, what are you waiting for to sign up and enjoy all these benefits ?",
                    "usersButton" => "Follow my Blogs and Articles",
                    "privacyTitle" => "Privacy Policy",
                    "privacyContent" => "As a Web actor, Blog's Berry is used by a large number of users, who entrust us with personal information such as their email address. Our philosophy is that this personal information represents the trust you place in us, and we are committed to doing everything we can to protect it. If you want to know exactly what information we collect, please read our Privacy Policy.",
                    "privacyButton" => "Learn more",
                )[$text];
            else if($language == "Spanish")
                return array(
                    "title" => "Welcome",
                    "blogsTitle" => "Discover new Blogs",
                    "blogsContent" => "Blogs hold a special place in the hearts of many people. Whether it allows an artist to share his latest creations with the world, a budding chef to make his community salivate, or an entrepreneur to communicate directly with his fans, Blogs have been enjoyed by everyone for generations. Don't wait any longer, and come and discover a host of new Blogs on the subjects you are most passionate about !",
                    "blogsButton" => "Discover new Blogs",
                    "articlesTitle" => "Read fascinating Articles",
                    "articlesContent" => "A Blog allows its author to create a community, through these numerous Articles. Each one of them allows direct communication between the author of the Blog and his subscribers, and allows to express the opinion of each one on various subjects, such as the best destination for a vacation. Come and browse these different Articles now, and learn more about your favorite topics !",
                    "articlesButton" => "Read fascinating Articles",
                    "usersTitle" => "Follow your favorite Blogs and Articles",
                    "usersContent" => "By registering on Blog's Berry, you will be able to save each Blog or Article you like, so you can find them again at any time. This will also ensure that you never miss the publication. You will also have a personalized home page, ensuring you never miss a new publication by your favorite authors. Now that you know all this, what are you waiting for to sign up and enjoy all these benefits ?",
                    "usersButton" => "Follow my Blogs and Articles",
                    "privacyTitle" => "Privacy Policy",
                    "privacyContent" => "As a Web actor, Blog's Berry is used by a large number of users, who entrust us with personal information such as their email address. Our philosophy is that this personal information represents the trust you place in us, and we are committed to doing everything we can to protect it. If you want to know exactly what information we collect, please read our Privacy Policy.",
                    "privacyButton" => "Learn more",
                )[$text];
        }

        static public function home($language, $text) {
            if($language == "English")
                return array(
                    "title" => "Home",
                    "by" => "By",
                    "on" => "On",
                    "date" => "m/d/Y",
                    "read" => "Read",
                    "empty" => "Search for new Blogs and Articles on subjects you're passionate about, then click on the heart icon to add them to your favorites.",
                )[$text];
            else if($language == "German")
                return array(
                    "title" => "Home",
                    "by" => "By",
                    "on" => "On",
                    "date" => "d/m/Y",
                    "read" => "Read",
                    "empty" => "Search for new Blogs and Articles on subjects you're passionate about, then click on the heart icon to add them to your favorites.",
                )[$text];
            else if($language == "French")
                return array(
                    "title" => "Accueil",
                    "by" => "Par",
                    "on" => "Le",
                    "date" => "d/m/Y",
                    "read" => "Lire",
                    "empty" => "Recherchez de nouveaux Blogs et Articles sur des sujets qui vous passionnent, puis cliquez sur l'icône en forme de coeur pour les ajouter à vos favoris.",
                )[$text];
            else if($language == "Italian")
                return array(
                    "title" => "Home",
                    "by" => "By",
                    "on" => "On",
                    "date" => "d/m/Y",
                    "read" => "Read",
                    "empty" => "Search for new Blogs and Articles on subjects you're passionate about, then click on the heart icon to add them to your favorites.",
                )[$text];
            else if($language == "Spanish")
                return array(
                    "title" => "Home",
                    "by" => "By",
                    "on" => "On",
                    "date" => "d/m/Y",
                    "read" => "Read",
                    "empty" => "Search for new Blogs and Articles on subjects you're passionate about, then click on the heart icon to add them to your favorites.",
                )[$text];
        }

        static public function blogs($language, $text) {
            if($language == "English")
                return array(
                    "title" => "Blogs",
                    "content" => "Search a Blog",
                    "search" => "Search a Blog (Animals, Cooking, Travel, …)",
                )[$text];
            else if($language == "German")
                return array(
                    "title" => "Blogs",
                    "content" => "Search a Blog",
                    "search" => "Search a Blog (Animals, Cooking, Travel, …)",
                )[$text];
            else if($language == "French")
                return array(
                    "title" => "Blogs",
                    "content" => "Rechercher un Blog",
                    "search" => "Rechercher un Blog (Animaux, Cuisine, Voyages, …)"
                )[$text];
            else if($language == "Italian")
                return array(
                    "title" => "Blogs",
                    "content" => "Search a Blog",
                    "search" => "Search a Blog (Animals, Cooking, Travel, …)",
                )[$text];
            else if($language == "Spanish")
                return array(
                    "title" => "Blogs",
                    "content" => "Search a Blog",
                    "search" => "Search a Blog (Animals, Cooking, Travel, …)",
                )[$text];
        }

        static public function articles($language, $text) {
            if($language == "English")
                return array(
                    "title" => "Articles",
                    "content" => "Search for an Article",
                    "search" => "Search for an Article (Animals, Cooking, Travel, …)"
                )[$text];
            else if($language == "German")
                return array(
                    "title" => "Articles",
                    "content" => "Search for an Article",
                    "search" => "Search for an Article (Animals, Cooking, Travel, …)"
                )[$text];
            else if($language == "French")
                return array(
                    "title" => "Articles",
                    "content" => "Rechercher un Article",
                    "search" => "Rechercher un Article (Animaux, Cuisine, Voyages, …)"
                )[$text];
            else if($language == "Italian")
                return array(
                    "title" => "Articles",
                    "content" => "Search for an Article",
                    "search" => "Search for an Article (Animals, Cooking, Travel, …)"
                )[$text];
            else if($language == "Spanish")
                return array(
                    "title" => "Articles",
                    "content" => "Search for an Article",
                    "search" => "Search for an Article (Animals, Cooking, Travel, …)"
                )[$text];
        }

        static public function login($language, $text) {
            if($language == "English")
                return array(
                    "title" => "Log In",
                    "content" => "Login to Blog's Berry",
                    "username" => "Username (Pythony)",
                    "password" => "Password (Pythony123@)",
                    "submit" => "Log In",
                    "forgot" => "Forgot your Password ?",
                    "forgotContent" => "If you have forgotten your password, please enter the email address associated with your account and we will send you a new password.",
                    "forgotEmail" => "Email Address (contact@anthony-khelil.com)",
                    "forgotSubmit" => "Reset my Password",
                )[$text];
            else if($language == "German")
                return array(
                    "title" => "Log In",
                    "content" => "Login to Blog's Berry",
                    "username" => "Username (Pythony)",
                    "password" => "Password (Pythony123@)",
                    "submit" => "Log In",
                    "forgot" => "Forgot your Password ?",
                    "forgotContent" => "If you have forgotten your password, please enter the email address associated with your account and we will send you a new password.",
                    "forgotEmail" => "Email Address (contact@anthony-khelil.com)",
                    "forgotSubmit" => "Reset my Password",
                )[$text];
            else if($language == "French")
                return array(
                    "title" => "Connexion",
                    "content" => "Connectez-vous à Blog's Berry",
                    "username" => "Pseudo (Pythony)",
                    "password" => "Mot de Passe (Pythony123@)",
                    "submit" => "Se Connecter",
                    "forgot" => "Mot de Passe oublié ?",
                    "forgotContent" => "En cas d'oubli de votre Mot de Passe, veuillez indiquer l'adresse email associée à votre compte, et nous vous y enverrons un nouveau Mot de Passe.",
                    "forgotEmail" => "Adresse Email (contact@anthony-khelil.com)",
                    "forgotSubmit" => "Réinitialiser mon Mot de Passe",
                )[$text];
            else if($language == "Italian")
                return array(
                    "title" => "Log In",
                    "content" => "Login to Blog's Berry",
                    "username" => "Username (Pythony)",
                    "password" => "Password (Pythony123@)",
                    "submit" => "Log In",
                    "forgot" => "Forgot your Password ?",
                    "forgotContent" => "If you have forgotten your password, please enter the email address associated with your account and we will send you a new password.",
                    "forgotEmail" => "Email Address (contact@anthony-khelil.com)",
                    "forgotSubmit" => "Reset my Password",
                )[$text];
            else if($language == "Spanish")
                return array(
                    "title" => "Log In",
                    "content" => "Login to Blog's Berry",
                    "username" => "Username (Pythony)",
                    "password" => "Password (Pythony123@)",
                    "submit" => "Log In",
                    "forgot" => "Forgot your Password ?",
                    "forgotContent" => "If you have forgotten your password, please enter the email address associated with your account and we will send you a new password.",
                    "forgotEmail" => "Email Address (contact@anthony-khelil.com)",
                    "forgotSubmit" => "Reset my Password",
                )[$text];
        }

        static public function signup($language, $text) {
            if($language == "English")
                return array(
                    "title" => "Sign In",
                    "content" => "Subscribe to Blog's Berry",
                    "email" => "Email Address (contact@anthony-khelil.com)",
                    "username" => "Username (Pythony)",
                    "submit" => "Sign In",
                    "status" => "Select your Status",
                    "reader" => "I read Blogs and Articles",
                    "blogger" => "I write Blogs and Articles",
                    "terms" => "I accept the <a href=\"/Terms\"> Terms and Conditions of Use </a>",
                )[$text];
            else if($language == "German")
                return array(
                    "title" => "Sign In",
                    "content" => "Subscribe to Blog's Berry",
                    "email" => "Email Address (contact@anthony-khelil.com)",
                    "username" => "Username (Pythony)",
                    "submit" => "Sign In",
                    "status" => "Select your Status",
                    "reader" => "I read Blogs and Articles",
                    "blogger" => "I write Blogs and Articles",
                    "terms" => "I accept the <a href=\"/Terms\"> Terms and Conditions of Use </a>",
                )[$text];
            else if($language == "French")
                return array(
                    "title" => "Inscription",
                    "content" => "Subscribe to Blog's Berry",
                    "content" => "Inscrivez-vous sur Blog's Berry",
                    "email" => "Adresse Email (contact@anthony-khelil.com)",
                    "username" => "Pseudo (Pythony)",
                    "submit" => "S'inscrire",
                    "status" => "Sélectionnez votre Status",
                    "reader" => "Je lis des Blogs et des Articles",
                    "blogger" => "J'écris des Blogs et des Articles",
                    "terms" => "J'accepte les <a href=\"/Terms\"> Conditions Générales d'Utilisation </a>",
                )[$text];
            else if($language == "Italian")
                return array(
                    "title" => "Sign In",
                    "content" => "Subscribe to Blog's Berry",
                    "email" => "Email Address (contact@anthony-khelil.com)",
                    "username" => "Username (Pythony)",
                    "submit" => "Sign In",
                    "status" => "Select your Status",
                    "reader" => "I read Blogs and Articles",
                    "blogger" => "I write Blogs and Articles",
                    "terms" => "I accept the <a href=\"/Terms\"> Terms and Conditions of Use </a>",
                )[$text];
            else if($language == "Spanish")
                return array(
                    "title" => "Sign In",
                    "content" => "Subscribe to Blog's Berry",
                    "email" => "Email Address (contact@anthony-khelil.com)",
                    "username" => "Username (Pythony)",
                    "submit" => "Sign In",
                    "status" => "Select your Status",
                    "reader" => "I read Blogs and Articles",
                    "blogger" => "I write Blogs and Articles",
                    "terms" => "I accept the <a href=\"/Terms\"> Terms and Conditions of Use </a>",
                )[$text];
        }

        static public function terms($language, $text) {
            if($language == "English")
            return array(
                "title" => "Terms and Conditions of Use",
                "termsTitle" => "Terms and Conditions of Use",
                "termsContent" => "
                    The following Terms and Conditions of Use apply to the website <a href=\"https://www.anthony-khelil.com/BlogsBerry\"> Blog's Berry </a> and define the rules that apply to it. By using Blog's Berry, you accept these Terms of Use. These rules may change from time to time, and it is your responsibility to periodically check these rules for changes. <br/> <br/> <br/>
                    Access to the site is allowed to any visitor wishing to search for Blogs or Articles, or simply wishing to view the site. On the other hand, Anthony Khelil, creator and developer of the site, reserves the right at any time to ban, temporarily or permanently, any user or group of users, without prior warning or reason, and in particular in the event of suspicion of non-compliance with the General Conditions of Use. <br/> <br/> <br/>
                    Blog's Berry is a site for sharing Blogs and Articles written by many enthusiasts. To implement sharing, Blog's Berry and Article search tools are set up, and allow visitors to search on keywords. Our algorithm will be based on these keywords, and will retrieve previously registered Blogs and Articles, and display them to the visitor as a list. As this information has been recorded by persons external to the site, Blog's Berry disclaims all responsibility for any information that may be found there. In the same way, as the links of the Blogs and complete Articles are hosted by these same external persons, it is their responsibility to ensure the content present through these links. <br/> <br/> <br/>
                    As the platform has been developed to allow users to carry out brief searches and navigate between the different pages of the site, only direct users can use the site using their browser. Any use of a robot, program, algorithm, or any other method to automate the use of the site is strictly prohibited. <br/> <br/> <br/>
                    Finally, please note that all the content hosted on Blog's Berry belongs to Anthony Khelil, and that it is therefore strictly forbidden to reuse it in any way whatsoever. We would also like to thank the sites <a href=\"https://www.pexels.com\"> Pexels </a> and <a href=\"https://www.pixabay.com\"> PixaBay </a> for providing us with some images of the site, <a href=\"https://www.freepik.com\"> FreePik </a> for the icons used, as well as <a href=\"https://spait.pb.design\"> Julien Guillo </a> for the realization of the Blog's Berry logo",
                "cookiesTitle" => "Cookie Usage",
                "cookiesContent" => "The Blog's Berry website uses cookies for statistical purposes and to optimize your experience. When you load a page, several cookies are deposited on your browser, including a User ID. This User Identifier is a unique and random number, which makes it possible to anonymise the statistics collected. This identifier is strictly personal, is renewed periodically, and is exclusive to Blog's Berry, and its use is detailed in the section <strong> Privacy Policy </strong> below. Finally, please note that by using Blog's Berry, you consent to the use of cookies on your browser.",
                "privacyTitle" => "Commitment of Confidentiality",
                "privacyContent" => "As a Web player, Blog's Berry is used by a large number of users, who entrust us with personal information such as their email address. Our philosophy is that this personal information represents the trust you place in us, and we are committed to doing everything we can to protect it. To do so, we use a User ID system stored via a cookie. When you first load Blog's Berry, a UserID cookie is created and initialized to a random and secure value. Then, on each page you load, the value of this cookie is used as your UserID, and allows you to track the different pages you have loaded. But the particularity of this system is that no person or technology in the world can make the link between this User ID and you. The data saved on Blog's Berry is therefore completely anonymous. The Language is a cookie whose sole purpose is to remember the last language loaded. ",
                "partnershipsTitle" => "Partnership",
                "partnershipsContent" => "By sharing your Blogs and Articles worldwide via Blog's Berry, you benefit from the visibility and notoriety of our platform, so that you can be known by more and more people. However, you can do the same for Blog's Berry, and talk about us on your Blogs and Articles. This is a great way to thank us, and you could even get the status of Blog's Berry Partner, so that you can be highlighted in searches. If you are interested, you can <a href=\"mailto:contact@anthony-khelil.com\"> contact us </a> to see how your Blog and Blog's Berry can work together.",
                "contactTitle" => "Contact Us",
                "contactContent" => "Blog's Berry is a platform designed by and for bloggers, and we place special emphasis on the feedback you can give us. If you have a suggestion, recommendation, or comment regarding the site, on any domain, (Technical, design, ...) we invite you to send them to us <a href=\"mailto:contact@anthony-khelil.com\"> by email. </a> We will answer you as soon as possible, and will do our best to take into account your precious advices during future updates of our platform.",
            )[$text];
            else if($language == "German")
            return array(
                "title" => "Terms and Conditions of Use",
                "termsTitle" => "Terms and Conditions of Use",
                "termsContent" => "
                    The following Terms and Conditions of Use apply to the website <a href=\"https://www.anthony-khelil.com/BlogsBerry\"> Blog's Berry </a> and define the rules that apply to it. By using Blog's Berry, you accept these Terms of Use. These rules may change from time to time, and it is your responsibility to periodically check these rules for changes. <br/> <br/> <br/>
                    Access to the site is allowed to any visitor wishing to search for Blogs or Articles, or simply wishing to view the site. On the other hand, Anthony Khelil, creator and developer of the site, reserves the right at any time to ban, temporarily or permanently, any user or group of users, without prior warning or reason, and in particular in the event of suspicion of non-compliance with the General Conditions of Use. <br/> <br/> <br/>
                    Blog's Berry is a site for sharing Blogs and Articles written by many enthusiasts. To implement sharing, Blog's Berry and Article search tools are set up, and allow visitors to search on keywords. Our algorithm will be based on these keywords, and will retrieve previously registered Blogs and Articles, and display them to the visitor as a list. As this information has been recorded by persons external to the site, Blog's Berry disclaims all responsibility for any information that may be found there. In the same way, as the links of the Blogs and complete Articles are hosted by these same external persons, it is their responsibility to ensure the content present through these links. <br/> <br/> <br/>
                    As the platform has been developed to allow users to carry out brief searches and navigate between the different pages of the site, only direct users can use the site using their browser. Any use of a robot, program, algorithm, or any other method to automate the use of the site is strictly prohibited. <br/> <br/> <br/>
                    Finally, please note that all the content hosted on Blog's Berry belongs to Anthony Khelil, and that it is therefore strictly forbidden to reuse it in any way whatsoever. We would also like to thank the sites <a href=\"https://www.pexels.com\"> Pexels </a> and <a href=\"https://www.pixabay.com\"> PixaBay </a> for providing us with some images of the site, <a href=\"https://www.freepik.com\"> FreePik </a> for the icons used, as well as <a href=\"https://spait.pb.design\"> Julien Guillo </a> for the realization of the Blog's Berry logo",
                "cookiesTitle" => "Cookie Usage",
                "cookiesContent" => "The Blog's Berry website uses cookies for statistical purposes and to optimize your experience. When you load a page, several cookies are deposited on your browser, including a User ID. This User Identifier is a unique and random number, which makes it possible to anonymise the statistics collected. This identifier is strictly personal, is renewed periodically, and is exclusive to Blog's Berry, and its use is detailed in the section <strong> Privacy Policy </strong> below. Finally, please note that by using Blog's Berry, you consent to the use of cookies on your browser.",
                "privacyTitle" => "Commitment of Confidentiality",
                "privacyContent" => "As a Web player, Blog's Berry is used by a large number of users, who entrust us with personal information such as their email address. Our philosophy is that this personal information represents the trust you place in us, and we are committed to doing everything we can to protect it. To do so, we use a User ID system stored via a cookie. When you first load Blog's Berry, a UserID cookie is created and initialized to a random and secure value. Then, on each page you load, the value of this cookie is used as your UserID, and allows you to track the different pages you have loaded. But the particularity of this system is that no person or technology in the world can make the link between this User ID and you. The data saved on Blog's Berry is therefore completely anonymous. The Language is a cookie whose sole purpose is to remember the last language loaded. ",
                "partnershipsTitle" => "Partnership",
                "partnershipsContent" => "By sharing your Blogs and Articles worldwide via Blog's Berry, you benefit from the visibility and notoriety of our platform, so that you can be known by more and more people. However, you can do the same for Blog's Berry, and talk about us on your Blogs and Articles. This is a great way to thank us, and you could even get the status of Blog's Berry Partner, so that you can be highlighted in searches. If you are interested, you can <a href=\"mailto:contact@anthony-khelil.com\"> contact us </a> to see how your Blog and Blog's Berry can work together.",
                "contactTitle" => "Contact Us",
                "contactContent" => "Blog's Berry is a platform designed by and for bloggers, and we place special emphasis on the feedback you can give us. If you have a suggestion, recommendation, or comment regarding the site, on any domain, (Technical, design, ...) we invite you to send them to us <a href=\"mailto:contact@anthony-khelil.com\"> by email. </a> We will answer you as soon as possible, and will do our best to take into account your precious advices during future updates of our platform.",
            )[$text];
            else if($language == "French")
                return array(
                    "title" => "Conditions Générales d'Utilisation",
                    "termsTitle" => "Conditions Générales d'Utilisation",
                    "termsContent" => "
                        Les Conditions Générales d'Utilisation suivantes s'appliquent au site web <a href=\"https://www.anthony-khelil.com/BlogsBerry\"> Blog's Berry </a> et définissent les règles qui s'y appliquent. En utilisant Blog's Berry, vous acceptez les présentes Conditions Générales d'Utilisation. Ces règles peuvent êtres amenées à changer, et il est de votre responsabilité de vérifier périodiquement ces règles pour voir si des modifications y ont été apportées. <br/> <br/> <br/>
                        L'accès au site est autorisé à tout visiteur souhaitant effectuer des recherches de Blogs ou d'Articles, ou souhaitant simplement voir le site. En revanche, Anthony Khelil, créateur et développeur du site, se réserve à tout moment le droit de bannir, temporairement ou définitivement, tout utilisateur, ou groupe d'utilisateur, sans avertissement ni motif préalable, et notamment en cas de soupcon de non respect des Conditions Générales d'Utilisation. <br/> <br/> <br/>
                        Blog's Berry est un site de partages de Blogs et d'Articles écrits par de nombreux passionnés. Pour mettre en oeuvre de partage, des outils de recherches de Blogs et d'Articles sont mis en place, et permettent aux visiteurs d'effectuer une recherche sur des mots clés. Notre algorithme va s'appuyer sur ces mots clés, et va récupérer les Blogs et Articles enregistrés au préalable, et les afficher au visiteur sous forme de liste. Ces informations ayant été enregistrées par des personnes externes au site, Blog's Berry se décharge de toute responsabilitées concernant les informations qui pourraient s'y trouver. De la même façon, les liens des Blogs et Articles complets étant hébergés par ces mêmes personnes externes, il est de leur responsabilité de s'assurer du contenu présent à travers ces liens. <br/> <br/> <br/>
                        La plateforme ayant été développé pour permettre aux utilisateur d'effectuer de brèves recherches et de naviguer entre les différentes pages du site, seuls les utilisateurs directs peuvent utiliser le site en utilisant leur navigateur. Toute utilisation d'un robot, programme, algorithme, ou de toute autre méthode viant à automatiser l'utilisation du site est formellement interdite. <br/> <br/> <br/>
                        Veuillez enfin noter que l'ensemble des contenus hébergés sur Blog's Berry appartient à Anthony Khelil, et qu'il est donc formellement interdit de les réutiliser, de quelque manière que ce soit. Nous tenons par ailleurs à remercier les sites <a href=\"https://www.pexels.com\"> Pexels </a> et <a href=\"https://www.pixabay.com\"> PixaBay </a> de nous avoir fourni bénévolement certaines images du site, <a href=\"https://www.freepik.com\"> FreePik </a> pour les icônes utilisées, ainsi que <a href=\"https://spait.pb.design\"> Julien Guillo </a> pour la réalisation du logo Blog's Berry",
                    "cookiesTitle" => "Utilisations des Cookies",
                    "cookiesContent" => "Le site web Blog's Berry utilise des cookies à des fins de statistiques et d'optimisation de votre expérience. Lorsque vous chargez une page, plusieurs cookies sont déposés sur votre navigateur, et notamment un Identifiant Utilisateur. Cet Identifiant Utilisateur est un numéro unique et aléatoire, permettant d'anonymiser les statistiques collectées. Cet identifiant est strictement personnel, est renouvellé périodiquement, et est exclusif à Blog's Berry, et son utilisation est détaillé dans la section <strong> Engagement de Confidentialité </strong> ci-dessous. Enfin, veuillez qu'en utilisant Blog's Berry, vous consentez à l'utilisation des cookies sur votre navigateur.",
                    "privacyTitle" => "Engagement de Confidentialité",
                    "privacyContent" => "En tant qu'acteur du Web, Blog's Berry est utilisé par un nombre important d'utilisateurs, qui nous confient des informations personnelles telles que leurs adresses email. Notre philosophie est que ces données personnelles représentent la confiance que vous nous accordez, et nous nous engageons à tout mettre en oeuvre pour les protéger. Pour ce faire, nous utilisons un système d'Identifiant Utilisateur stocké via un cookie. Lorsque vous chargez Blog's Berry pour la première fois, un cookie UserID est crée et initialisé à une valeur aléatoire et sécurisée. Par la suite, à chaque page que vous chargez, la valeur de ce cookie est utilisée en tant qu'Identifiant Utilisateur, et permet de suivre les différentes pages que vous avez chargée. Mais la particularité de ce système est qu'aucune personne ou technologie au monde ne peux faire le lien entre cet Identifiant Utilisateur et vous. Les données sauvegardées sur Blog's Berry sont ainsi totalement anonymisées. La Langue est un cookie dont le seul but est de mémoriser la dernière langue chargée. ",
                    "partnershipsTitle" => "Partenariats",
                    "partnershipsContent" => "En partageant vos Blogs et Articles au monde entier via Blog's Berry, vous profitez ainsi de la visibilité et de la notoriété de notre plateforme, afin de vous faire connaitre par toujours plus de monde. Toutefois, vous pouvez faire la même chose pour Blog's Berry, et parlez de nous sur vos Blogs et Articles. Cela est un excellent moyen de nous remercier, et vous pourriez même obtenir le status de Partenaire Blog's Berry, afin d'être mis en avant dans les recherches. Si cela vous intérésse, vous pouvez <a href=\"mailto:contact@anthony-khelil.com\"> nous contacter </a>, afin que nous voyions ensemble comment votre Blog et Blog's Berry peuvent travailler ensemble.",
                    "contactTitle" => "Nous Contacter",
                    "contactContent" => "Blog's Berry est une plateforme concu par et pour des blogueurs, et nous accordons une important particulière sur les retours que vous pourrez nous faire. Si vous avez une suggestion, recommandation, ou commentaire à l'égard du site, sur n'importe quel domaine, (Technique, design, …) nous vous invitons à nous les transmettre <a href=\"mailto:contact@anthony-khelil.com\"> par email. </a> Nous vous répondrons au plus vite, et ferons de notre mieux pour prendre en compte vos précieux conseils lors de futures mises à jour de notre plateforme. </a>",
                )[$text];
            else if($language == "Italian")
            return array(
                "title" => "Terms and Conditions of Use",
                "termsTitle" => "Terms and Conditions of Use",
                "termsContent" => "
                    The following Terms and Conditions of Use apply to the website <a href=\"https://www.anthony-khelil.com/BlogsBerry\"> Blog's Berry </a> and define the rules that apply to it. By using Blog's Berry, you accept these Terms of Use. These rules may change from time to time, and it is your responsibility to periodically check these rules for changes. <br/> <br/> <br/>
                    Access to the site is allowed to any visitor wishing to search for Blogs or Articles, or simply wishing to view the site. On the other hand, Anthony Khelil, creator and developer of the site, reserves the right at any time to ban, temporarily or permanently, any user or group of users, without prior warning or reason, and in particular in the event of suspicion of non-compliance with the General Conditions of Use. <br/> <br/> <br/>
                    Blog's Berry is a site for sharing Blogs and Articles written by many enthusiasts. To implement sharing, Blog's Berry and Article search tools are set up, and allow visitors to search on keywords. Our algorithm will be based on these keywords, and will retrieve previously registered Blogs and Articles, and display them to the visitor as a list. As this information has been recorded by persons external to the site, Blog's Berry disclaims all responsibility for any information that may be found there. In the same way, as the links of the Blogs and complete Articles are hosted by these same external persons, it is their responsibility to ensure the content present through these links. <br/> <br/> <br/>
                    As the platform has been developed to allow users to carry out brief searches and navigate between the different pages of the site, only direct users can use the site using their browser. Any use of a robot, program, algorithm, or any other method to automate the use of the site is strictly prohibited. <br/> <br/> <br/>
                    Finally, please note that all the content hosted on Blog's Berry belongs to Anthony Khelil, and that it is therefore strictly forbidden to reuse it in any way whatsoever. We would also like to thank the sites <a href=\"https://www.pexels.com\"> Pexels </a> and <a href=\"https://www.pixabay.com\"> PixaBay </a> for providing us with some images of the site, <a href=\"https://www.freepik.com\"> FreePik </a> for the icons used, as well as <a href=\"https://spait.pb.design\"> Julien Guillo </a> for the realization of the Blog's Berry logo",
                "cookiesTitle" => "Cookie Usage",
                "cookiesContent" => "The Blog's Berry website uses cookies for statistical purposes and to optimize your experience. When you load a page, several cookies are deposited on your browser, including a User ID. This User Identifier is a unique and random number, which makes it possible to anonymise the statistics collected. This identifier is strictly personal, is renewed periodically, and is exclusive to Blog's Berry, and its use is detailed in the section <strong> Privacy Policy </strong> below. Finally, please note that by using Blog's Berry, you consent to the use of cookies on your browser.",
                "privacyTitle" => "Commitment of Confidentiality",
                "privacyContent" => "As a Web player, Blog's Berry is used by a large number of users, who entrust us with personal information such as their email address. Our philosophy is that this personal information represents the trust you place in us, and we are committed to doing everything we can to protect it. To do so, we use a User ID system stored via a cookie. When you first load Blog's Berry, a UserID cookie is created and initialized to a random and secure value. Then, on each page you load, the value of this cookie is used as your UserID, and allows you to track the different pages you have loaded. But the particularity of this system is that no person or technology in the world can make the link between this User ID and you. The data saved on Blog's Berry is therefore completely anonymous. The Language is a cookie whose sole purpose is to remember the last language loaded. ",
                "partnershipsTitle" => "Partnership",
                "partnershipsContent" => "By sharing your Blogs and Articles worldwide via Blog's Berry, you benefit from the visibility and notoriety of our platform, so that you can be known by more and more people. However, you can do the same for Blog's Berry, and talk about us on your Blogs and Articles. This is a great way to thank us, and you could even get the status of Blog's Berry Partner, so that you can be highlighted in searches. If you are interested, you can <a href=\"mailto:contact@anthony-khelil.com\"> contact us </a> to see how your Blog and Blog's Berry can work together.",
                "contactTitle" => "Contact Us",
                "contactContent" => "Blog's Berry is a platform designed by and for bloggers, and we place special emphasis on the feedback you can give us. If you have a suggestion, recommendation, or comment regarding the site, on any domain, (Technical, design, ...) we invite you to send them to us <a href=\"mailto:contact@anthony-khelil.com\"> by email. </a> We will answer you as soon as possible, and will do our best to take into account your precious advices during future updates of our platform.",
            )[$text];
            else if($language == "Spanish")
            return array(
                "title" => "Terms and Conditions of Use",
                "termsTitle" => "Terms and Conditions of Use",
                "termsContent" => "
                    The following Terms and Conditions of Use apply to the website <a href=\"https://www.anthony-khelil.com/BlogsBerry\"> Blog's Berry </a> and define the rules that apply to it. By using Blog's Berry, you accept these Terms of Use. These rules may change from time to time, and it is your responsibility to periodically check these rules for changes. <br/> <br/> <br/>
                    Access to the site is allowed to any visitor wishing to search for Blogs or Articles, or simply wishing to view the site. On the other hand, Anthony Khelil, creator and developer of the site, reserves the right at any time to ban, temporarily or permanently, any user or group of users, without prior warning or reason, and in particular in the event of suspicion of non-compliance with the General Conditions of Use. <br/> <br/> <br/>
                    Blog's Berry is a site for sharing Blogs and Articles written by many enthusiasts. To implement sharing, Blog's Berry and Article search tools are set up, and allow visitors to search on keywords. Our algorithm will be based on these keywords, and will retrieve previously registered Blogs and Articles, and display them to the visitor as a list. As this information has been recorded by persons external to the site, Blog's Berry disclaims all responsibility for any information that may be found there. In the same way, as the links of the Blogs and complete Articles are hosted by these same external persons, it is their responsibility to ensure the content present through these links. <br/> <br/> <br/>
                    As the platform has been developed to allow users to carry out brief searches and navigate between the different pages of the site, only direct users can use the site using their browser. Any use of a robot, program, algorithm, or any other method to automate the use of the site is strictly prohibited. <br/> <br/> <br/>
                    Finally, please note that all the content hosted on Blog's Berry belongs to Anthony Khelil, and that it is therefore strictly forbidden to reuse it in any way whatsoever. We would also like to thank the sites <a href=\"https://www.pexels.com\"> Pexels </a> and <a href=\"https://www.pixabay.com\"> PixaBay </a> for providing us with some images of the site, <a href=\"https://www.freepik.com\"> FreePik </a> for the icons used, as well as <a href=\"https://spait.pb.design\"> Julien Guillo </a> for the realization of the Blog's Berry logo",
                "cookiesTitle" => "Cookie Usage",
                "cookiesContent" => "The Blog's Berry website uses cookies for statistical purposes and to optimize your experience. When you load a page, several cookies are deposited on your browser, including a User ID. This User Identifier is a unique and random number, which makes it possible to anonymise the statistics collected. This identifier is strictly personal, is renewed periodically, and is exclusive to Blog's Berry, and its use is detailed in the section <strong> Privacy Policy </strong> below. Finally, please note that by using Blog's Berry, you consent to the use of cookies on your browser.",
                "privacyTitle" => "Commitment of Confidentiality",
                "privacyContent" => "As a Web player, Blog's Berry is used by a large number of users, who entrust us with personal information such as their email address. Our philosophy is that this personal information represents the trust you place in us, and we are committed to doing everything we can to protect it. To do so, we use a User ID system stored via a cookie. When you first load Blog's Berry, a UserID cookie is created and initialized to a random and secure value. Then, on each page you load, the value of this cookie is used as your UserID, and allows you to track the different pages you have loaded. But the particularity of this system is that no person or technology in the world can make the link between this User ID and you. The data saved on Blog's Berry is therefore completely anonymous. The Language is a cookie whose sole purpose is to remember the last language loaded. ",
                "partnershipsTitle" => "Partnership",
                "partnershipsContent" => "By sharing your Blogs and Articles worldwide via Blog's Berry, you benefit from the visibility and notoriety of our platform, so that you can be known by more and more people. However, you can do the same for Blog's Berry, and talk about us on your Blogs and Articles. This is a great way to thank us, and you could even get the status of Blog's Berry Partner, so that you can be highlighted in searches. If you are interested, you can <a href=\"mailto:contact@anthony-khelil.com\"> contact us </a> to see how your Blog and Blog's Berry can work together.",
                "contactTitle" => "Contact Us",
                "contactContent" => "Blog's Berry is a platform designed by and for bloggers, and we place special emphasis on the feedback you can give us. If you have a suggestion, recommendation, or comment regarding the site, on any domain, (Technical, design, ...) we invite you to send them to us <a href=\"mailto:contact@anthony-khelil.com\"> by email. </a> We will answer you as soon as possible, and will do our best to take into account your precious advices during future updates of our platform.",
            )[$text];
        }

        static public function reader($language, $text) {
            if($language == "English")
                return array(
                    "title" => "My Account",
                    "content" => "Welcome to your Account. On this page, you can view, edit and delete your various Blogs and Favorite Articles, as well as update your profile.",
                    "blogs" => "Favorite Blogs",
                    "articles" => "Favorite Articles",
                    "settings" => "Account Settings",
                    "logout" => "Logout",
                    "language" => "Select a Language",
                    "english" => "English",
                    "german" => "German",
                    "french" => "French",
                    "italian" => "Italian",
                    "spanish" => "Spanish",
                    "settingsEmail" => "Email Address (contact@anthony-khelil.com)",
                    "settingsUsername" => "Username (Pythony)",
                    "frequency" => "Select a Newsletter Frequency",
                    "daily" => "Daily",
                    "weekly" => "Weekly",
                    "monthly" => "Monthly",
                    "annual" => "Annual",
                    "never" => "Never",
                    "settingsPassword" => "Confirm with your Password (Pythony123@)",
                    "settingsSubmit" => "Save Settings",
                    "blogsContent" => "Here are the Blogs you have saved. As soon as a new Article is published on one of them, it will appear on your Home page. You can click on one of them to open it, or delete it from your Favorites.",
                    "blogsTitle" => "Title",
                    "blogsImage" => "Image",
                    "blogsOpen" => "Open",
                    "blogsDelete" => "Delete",
                    "blogsEmpty" => "You don't have any favorite Blog yet. Search for new Blogs on topics you are passionate about, then click on the heart icon to add them to your Favorites.",
                    "articlesContent" => "Here are the Articles you have saved. They also appear on your Home page, among the Blogs you have saved. You can click on one of them to open it, or delete it from your Favorites.",
                    "articlesEmpty" => "You don't have any Favorite Article yet. Search for new Articles on topics you are passionate about, then click on the heart icon to add them to your Favorites.",
                )[$text];
            else if($language == "German")
                return array(
                    "title" => "My Account",
                    "content" => "Welcome to your Account. On this page, you can view, edit and delete your various Blogs and Favorite Articles, as well as update your profile.",
                    "blogs" => "Favorite Blogs",
                    "articles" => "Favorite Articles",
                    "settings" => "Account Settings",
                    "logout" => "Logout",
                    "language" => "Select a Language",
                    "english" => "English",
                    "german" => "German",
                    "french" => "French",
                    "italian" => "Italian",
                    "spanish" => "Spanish",
                    "settingsEmail" => "Email Address (contact@anthony-khelil.com)",
                    "settingsUsername" => "Username (Pythony)",
                    "frequency" => "Select a Newsletter Frequency",
                    "daily" => "Daily",
                    "weekly" => "Weekly",
                    "monthly" => "Monthly",
                    "annual" => "Annual",
                    "never" => "Never",
                    "settingsPassword" => "Confirm with your Password (Pythony123@)",
                    "settingsSubmit" => "Save Settings",
                    "blogsContent" => "Here are the Blogs you have saved. As soon as a new Article is published on one of them, it will appear on your Home page. You can click on one of them to open it, or delete it from your Favorites.",
                    "blogsTitle" => "Title",
                    "blogsImage" => "Image",
                    "blogsOpen" => "Open",
                    "blogsDelete" => "Delete",
                    "blogsEmpty" => "You don't have any favorite Blog yet. Search for new Blogs on topics you are passionate about, then click on the heart icon to add them to your Favorites.",
                    "articlesContent" => "Here are the Articles you have saved. They also appear on your Home page, among the Blogs you have saved. You can click on one of them to open it, or delete it from your Favorites.",
                    "articlesEmpty" => "You don't have any Favorite Article yet. Search for new Articles on topics you are passionate about, then click on the heart icon to add them to your Favorites.",
                )[$text];
            else if($language == "French")
                return array(
                    "title" => "Mon Compte",
                    "content" => "Bienvenue sur votre Compte. Sur cette page, vous pouvez voir, modifier et supprimer vos différents Blogs et Articles favoris, ainsi que mettre à jour votre profil.",
                    "blogs" => "Blogs Favoris",
                    "articles" => "Articles Favoris",
                    "settings" => "Paramètres du Compte",
                    "logout" => "Déconnexion",
                    "language" => "Sélectionnez une Langue",
                    "english" => "Anglais",
                    "german" => "Allemand",
                    "french" => "Français",
                    "italian" => "Italien",
                    "spanish" => "Espagnol",
                    "settingsEmail" => "Adresse Email (contact@anthony-khelil.com)",
                    "settingsUsername" => "Pseudo (Pythony)",
                    "frequency" => "Sélectionnez une Fréquence de Newsletter",
                    "daily" => "Quotidienne",
                    "weekly" => "Hebdomadaire",
                    "monthly" => "Mensuelle",
                    "annual" => "Annuelle",
                    "never" => "Jamais",
                    "settingsPassword" => "Confirmez avec votre Mot de Passe (Pythony123@)",
                    "settingsSubmit" => "Sauvegarder les Paramètres",
                    "blogsContent" => "Voici les Blogs que vous avez sauvegardés. Dès qu'un nouvel article sera publié sur l'un d'entre eux, il apparaîtra sur votre page d'Accueil. Vous pouvez cliquer sur l'un d'entre eux pour l'ouvrir, ou le supprimer de vos Favoris.",
                    "blogsTitle" => "Titre",
                    "blogsImage" => "Image",
                    "blogsOpen" => "Ouvrir",
                    "blogsDelete" => "Supprimer",
                    "blogsEmpty" => "Vous n'avez pas encore de Blog favoris. Recherchez de nouveaux Blogs sur des sujets qui vous passionnent, puis cliquez sur l'icône en forme de coeur pour les ajouter à vos Favoris.",
                    "articlesContent" => "Voici les Articles que vous avez sauvegardés. Ils apparaissent également sur votre page d'Accueil, parmis les Blogs que vous avez sauvegardés. Vous pouvez cliquer sur l'un d'entre eux pour l'ouvrir, ou le supprimer de vos Favoris.",
                    "articlesEmpty" => "Vous n'avez pas encore d'Article favoris. Recherchez de nouveaux Articles sur des sujets qui vous passionnent, puis cliquez sur l'icône en forme de coeur pour les ajouter à vos Favoris.",
                )[$text];
            else if($language == "Italian")
                return array(
                    "title" => "My Account",
                    "content" => "Welcome to your Account. On this page, you can view, edit and delete your various Blogs and Favorite Articles, as well as update your profile.",
                    "blogs" => "Favorite Blogs",
                    "articles" => "Favorite Articles",
                    "settings" => "Account Settings",
                    "logout" => "Logout",
                    "language" => "Select a Language",
                    "english" => "English",
                    "german" => "German",
                    "french" => "French",
                    "italian" => "Italian",
                    "spanish" => "Spanish",
                    "settingsEmail" => "Email Address (contact@anthony-khelil.com)",
                    "settingsUsername" => "Username (Pythony)",
                    "frequency" => "Select a Newsletter Frequency",
                    "daily" => "Daily",
                    "weekly" => "Weekly",
                    "monthly" => "Monthly",
                    "annual" => "Annual",
                    "never" => "Never",
                    "settingsPassword" => "Confirm with your Password (Pythony123@)",
                    "settingsSubmit" => "Save Settings",
                    "blogsContent" => "Here are the Blogs you have saved. As soon as a new Article is published on one of them, it will appear on your Home page. You can click on one of them to open it, or delete it from your Favorites.",
                    "blogsTitle" => "Title",
                    "blogsImage" => "Image",
                    "blogsOpen" => "Open",
                    "blogsDelete" => "Delete",
                    "blogsEmpty" => "You don't have any favorite Blog yet. Search for new Blogs on topics you are passionate about, then click on the heart icon to add them to your Favorites.",
                    "articlesContent" => "Here are the Articles you have saved. They also appear on your Home page, among the Blogs you have saved. You can click on one of them to open it, or delete it from your Favorites.",
                    "articlesEmpty" => "You don't have any Favorite Article yet. Search for new Articles on topics you are passionate about, then click on the heart icon to add them to your Favorites.",
                )[$text];
            else if($language == "Spanish")
                return array(
                    "title" => "My Account",
                    "content" => "Welcome to your Account. On this page, you can view, edit and delete your various Blogs and Favorite Articles, as well as update your profile.",
                    "blogs" => "Favorite Blogs",
                    "articles" => "Favorite Articles",
                    "settings" => "Account Settings",
                    "logout" => "Logout",
                    "language" => "Select a Language",
                    "english" => "English",
                    "german" => "German",
                    "french" => "French",
                    "italian" => "Italian",
                    "spanish" => "Spanish",
                    "settingsEmail" => "Email Address (contact@anthony-khelil.com)",
                    "settingsUsername" => "Username (Pythony)",
                    "frequency" => "Select a Newsletter Frequency",
                    "daily" => "Daily",
                    "weekly" => "Weekly",
                    "monthly" => "Monthly",
                    "annual" => "Annual",
                    "never" => "Never",
                    "settingsPassword" => "Confirm with your Password (Pythony123@)",
                    "settingsSubmit" => "Save Settings",
                    "blogsContent" => "Here are the Blogs you have saved. As soon as a new Article is published on one of them, it will appear on your Home page. You can click on one of them to open it, or delete it from your Favorites.",
                    "blogsTitle" => "Title",
                    "blogsImage" => "Image",
                    "blogsOpen" => "Open",
                    "blogsDelete" => "Delete",
                    "blogsEmpty" => "You don't have any favorite Blog yet. Search for new Blogs on topics you are passionate about, then click on the heart icon to add them to your Favorites.",
                    "articlesContent" => "Here are the Articles you have saved. They also appear on your Home page, among the Blogs you have saved. You can click on one of them to open it, or delete it from your Favorites.",
                    "articlesEmpty" => "You don't have any Favorite Article yet. Search for new Articles on topics you are passionate about, then click on the heart icon to add them to your Favorites.",
                )[$text];
        }


        static public function blogger($language, $text) {
            if($language == "English")
                return array(
                    "title" => "Your Blogs",
                    "content" => "Welcome to your home page. You can use it to get a quick look at all the Blogs you've added, and you can also edit one of them, add a new one, or even edit your Profile by clicking on the corresponding buttons. Finally, don't forget to visit the Statistics section, to measure the progress of your various Blogs.",
                    "tableTitle" => "Title",
                    "tableImage" => "Image",
                    "tableOverview" => "Overview",
                    "tableStatistics" => "Statistics",
                    "empty" => "You don't have a Blog yet. Use the button below to create one.",
                    "settings" => "Account Settings",
                    "add" => "Add a Blog",
                    "logout" => "Logout",
                    "language" => "Select a Language",
                    "english" => "English",
                    "german" => "German",
                    "french" => "French",
                    "italian" => "Italian",
                    "spanish" => "Spanish",
                    "settingsEmail" => "Email Address (contact@anthony-khelil.com)",
                    "settingsUsername" => "Username (Pythony)",
                    "frequency" => "Select a Newsletter Frequency",
                    "daily" => "Daily",
                    "weekly" => "Weekly",
                    "monthly" => "Monthly",
                    "annual" => "Annual",
                    "never" => "Never",
                    "settingsPassword" => "Confirm with your Password (Pythony123@)",
                    "settingsSubmit" => "Save Settings",
                    "addTitle" => "Title (Welcome to Blog's Berry !)",
                    "addContent" => "Content (Blog's Berry is a great website allowing you to discover Blogs and Articles from all over the world. And more than that, you can even…)",
                    "addLink" => "Link (https://www.anthony-khelil.com/BlogsBerry/Blogs)",
                    "addImage" => "Image",
                    "addSubmit" => "Add this Blog",
                )[$text];
            else if($language == "German")
                return array(
                    "title" => "Your Blogs",
                    "content" => "Welcome to your home page. You can use it to get a quick look at all the Blogs you've added, and you can also edit one of them, add a new one, or even edit your Profile by clicking on the corresponding buttons. Finally, don't forget to visit the Statistics section, to measure the progress of your various Blogs.",
                    "tableTitle" => "Title",
                    "tableImage" => "Image",
                    "tableOverview" => "Overview",
                    "tableStatistics" => "Statistics",
                    "empty" => "You don't have a Blog yet. Use the button below to create one.",
                    "settings" => "Account Settings",
                    "add" => "Add a Blog",
                    "logout" => "Logout",
                    "language" => "Select a Language",
                    "english" => "English",
                    "german" => "German",
                    "french" => "French",
                    "italian" => "Italian",
                    "spanish" => "Spanish",
                    "settingsEmail" => "Email Address (contact@anthony-khelil.com)",
                    "settingsUsername" => "Username (Pythony)",
                    "frequency" => "Select a Newsletter Frequency",
                    "daily" => "Daily",
                    "weekly" => "Weekly",
                    "monthly" => "Monthly",
                    "annual" => "Annual",
                    "never" => "Never",
                    "settingsPassword" => "Confirm with your Password (Pythony123@)",
                    "settingsSubmit" => "Save Settings",
                    "addTitle" => "Title (Welcome to Blog's Berry !)",
                    "addContent" => "Content (Blog's Berry is a great website allowing you to discover Blogs and Articles from all over the world. And more than that, you can even…)",
                    "addLink" => "Link (https://www.anthony-khelil.com/BlogsBerry/Blogs)",
                    "addImage" => "Image",
                    "addSubmit" => "Add this Blog",
                )[$text];
            else if($language == "French")
                return array(
                    "title" => "Vos Blogs",
                    "content" => "Bienvenue sur votre page d'Accueil. Vous pouvez l'utiliser pour avoir un rapide coup d'oeil sur tous les Blogs que vous avez ajoutés, et pouvez également en modifier un, ou en ajouter un nouveau, ou même modifier votre Profil en cliquant sur les boutons correspondant. Enfin, n'oubliez pas de visiter la rubrique Statistiques, afin de mesurer les progrès de vos différents Blogs.",
                    "tableTitle" => "Titre",
                    "tableImage" => "Image",
                    "tableOverview" => "Aperçu",
                    "tableStatistics" => "Statistiques",
                    "empty" => "Vous n'avez encore aucun Blog. Utilisez le bouton ci-dessous pour en créer un.",
                    "settings" => "Paramètres du Compte",
                    "add" => "Ajouter un Blog",
                    "logout" => "Déconnexion",
                    "language" => "Sélectionnez une Langue",
                    "english" => "Anglais",
                    "german" => "Allemand",
                    "french" => "Français",
                    "italian" => "Italien",
                    "spanish" => "Espagnol",
                    "settingsEmail" => "Adresse Email (contact@anthony-khelil.com)",
                    "settingsUsername" => "Pseudo (Pythony)",
                    "frequency" => "Sélectionnez une Fréquence de Newsletter",
                    "daily" => "Quotidienne",
                    "weekly" => "Hebdomadaire",
                    "monthly" => "Mensuelle",
                    "annual" => "Annuelle",
                    "never" => "Jamais",
                    "settingsPassword" => "Confirmez avec votre Mot de Passe (Pythony123@)",
                    "settingsSubmit" => "Sauvegarder les Paramètres",
                    "addTitle" => "Titre (Bienvenue sur Blog's Berry !)",
                    "addContent" => "Contenu (Blog's Berry est un formidable site web vous permettant de découvrir des Blogs et des Articles du monde entier. Et plus que cela, vous pouvez même…)",
                    "addLink" => "Lien (https://www.anthony-khelil.com/BlogsBerry/Blogs)",
                    "addImage" => "Image",
                    "addSubmit" => "Ajouter ce Blog",
                )[$text];
            else if($language == "Italian")
                return array(
                    "title" => "Your Blogs",
                    "content" => "Welcome to your home page. You can use it to get a quick look at all the Blogs you've added, and you can also edit one of them, add a new one, or even edit your Profile by clicking on the corresponding buttons. Finally, don't forget to visit the Statistics section, to measure the progress of your various Blogs.",
                    "tableTitle" => "Title",
                    "tableImage" => "Image",
                    "tableOverview" => "Overview",
                    "tableStatistics" => "Statistics",
                    "empty" => "You don't have a Blog yet. Use the button below to create one.",
                    "settings" => "Account Settings",
                    "add" => "Add a Blog",
                    "logout" => "Logout",
                    "language" => "Select a Language",
                    "english" => "English",
                    "german" => "German",
                    "french" => "French",
                    "italian" => "Italian",
                    "spanish" => "Spanish",
                    "settingsEmail" => "Email Address (contact@anthony-khelil.com)",
                    "settingsUsername" => "Username (Pythony)",
                    "frequency" => "Select a Newsletter Frequency",
                    "daily" => "Daily",
                    "weekly" => "Weekly",
                    "monthly" => "Monthly",
                    "annual" => "Annual",
                    "never" => "Never",
                    "settingsPassword" => "Confirm with your Password (Pythony123@)",
                    "settingsSubmit" => "Save Settings",
                    "addTitle" => "Title (Welcome to Blog's Berry !)",
                    "addContent" => "Content (Blog's Berry is a great website allowing you to discover Blogs and Articles from all over the world. And more than that, you can even…)",
                    "addLink" => "Link (https://www.anthony-khelil.com/BlogsBerry/Blogs)",
                    "addImage" => "Image",
                    "addSubmit" => "Add this Blog",
                )[$text];
            else if($language == "Spanish")
                return array(
                    "title" => "Your Blogs",
                    "content" => "Welcome to your home page. You can use it to get a quick look at all the Blogs you've added, and you can also edit one of them, add a new one, or even edit your Profile by clicking on the corresponding buttons. Finally, don't forget to visit the Statistics section, to measure the progress of your various Blogs.",
                    "tableTitle" => "Title",
                    "tableImage" => "Image",
                    "tableOverview" => "Overview",
                    "tableStatistics" => "Statistics",
                    "empty" => "You don't have a Blog yet. Use the button below to create one.",
                    "settings" => "Account Settings",
                    "add" => "Add a Blog",
                    "logout" => "Logout",
                    "language" => "Select a Language",
                    "english" => "English",
                    "german" => "German",
                    "french" => "French",
                    "italian" => "Italian",
                    "spanish" => "Spanish",
                    "settingsEmail" => "Email Address (contact@anthony-khelil.com)",
                    "settingsUsername" => "Username (Pythony)",
                    "frequency" => "Select a Newsletter Frequency",
                    "daily" => "Daily",
                    "weekly" => "Weekly",
                    "monthly" => "Monthly",
                    "annual" => "Annual",
                    "never" => "Never",
                    "settingsPassword" => "Confirm with your Password (Pythony123@)",
                    "settingsSubmit" => "Save Settings",
                    "addTitle" => "Title (Welcome to Blog's Berry !)",
                    "addContent" => "Content (Blog's Berry is a great website allowing you to discover Blogs and Articles from all over the world. And more than that, you can even…)",
                    "addLink" => "Link (https://www.anthony-khelil.com/BlogsBerry/Blogs)",
                    "addImage" => "Image",
                    "addSubmit" => "Add this Blog",
                )[$text];
        }

        static public function overview($language, $text) {
            if($language == "English")
                return array(
                    "title" => "Your Articles",
                    "content" => "Here are the Articles you have published on this Blog. You can edit, delete, or add new ones. Don't forget to check the Statistics page to see how well this Blog is doing.",
                    "tableTitle" => "Title",
                    "tableImage" => "Image",
                    "tableEdit" => "Edit",
                    "tableStatistics" => "Statistics",
                    "empty" => "You don't have any items yet. Use the button below to create one.",
                    "settings" => "Blog Settings",
                    "add" => "Add an Article",
                    "home" => "Home",
                    "language" => "Select a Language",
                    "english" => "English",
                    "german" => "German",
                    "french" => "French",
                    "italian" => "Italian",
                    "spanish" => "Spanish",
                    "settingsTitle" => "Title (Welcome to Blog's Berry !)",
                    "settingsContent" => "Content (Blog's Berry is a great website allowing you to discover Blogs and Articles from all over the world. And more than that, you can even…)",
                    "settingsLink" => "Link (https://www.anthony-khelil.com/BlogsBerry/Blogs)",
                    "settingsSubmit" => "Save Settings",
                    "settingsDelete" => "Delete this Blog",
                    "addTitle" => "Title (How to publish content on Blog's Berry ?)",
                    "addContent" => "Content (Today, we're going to see together how to publish content on Blog's Berry. The easiest way to do this is to…)",
                    "addLink" => "Link (https://www.anthony-khelil.com/BlogsBerry/Articles)",
                    "addImage" => "Image",
                    "addSubmit" => "Add this Article",
                    "editTitle" => "Article Settings",
                    "editDelete" => "Delete this Article",
                )[$text];
            else if($language == "German")
                return array(
                    "title" => "Your Articles",
                    "content" => "Here are the Articles you have published on this Blog. You can edit, delete, or add new ones. Don't forget to check the Statistics page to see how well this Blog is doing.",
                    "tableTitle" => "Title",
                    "tableImage" => "Image",
                    "tableEdit" => "Edit",
                    "tableStatistics" => "Statistics",
                    "empty" => "You don't have any items yet. Use the button below to create one.",
                    "settings" => "Blog Settings",
                    "add" => "Add an Article",
                    "home" => "Home",
                    "language" => "Select a Language",
                    "english" => "English",
                    "german" => "German",
                    "french" => "French",
                    "italian" => "Italian",
                    "spanish" => "Spanish",
                    "settingsTitle" => "Title (Welcome to Blog's Berry !)",
                    "settingsContent" => "Content (Blog's Berry is a great website allowing you to discover Blogs and Articles from all over the world. And more than that, you can even…)",
                    "settingsLink" => "Link (https://www.anthony-khelil.com/BlogsBerry/Blogs)",
                    "settingsSubmit" => "Save Settings",
                    "settingsDelete" => "Delete this Blog",
                    "addTitle" => "Title (How to publish content on Blog's Berry ?)",
                    "addContent" => "Content (Today, we're going to see together how to publish content on Blog's Berry. The easiest way to do this is to…)",
                    "addLink" => "Link (https://www.anthony-khelil.com/BlogsBerry/Articles)",
                    "addImage" => "Image",
                    "addSubmit" => "Add this Article",
                    "editTitle" => "Article Settings",
                    "editDelete" => "Delete this Article",
                )[$text];
            else if($language == "French")
                return array(
                    "title" => "Vos Articles",
                    "content" => "Voici les Articles que vous avez publié sur ce Blog. Vous pouvez les modifier, supprimer, ou encore en ajouter de nouveaux. N'oubliez pas non plus de faire un tour sur la page des Statistiques, afin de mesurer les résultats de ce Blog.",
                    "tableTitle" => "Titre",
                    "tableImage" => "Image",
                    "tableEdit" => "Éditer",
                    "tableStatistics" => "Statistiques",
                    "empty" => "Vous n'avez encore aucun Article. Utilisez le bouton ci-dessous pour en créer un.",
                    "settings" => "Paramètres du Blog",
                    "add" => "Ajouter un Article",
                    "home" => "Accueil",
                    "language" => "Sélectionnez une Langue",
                    "english" => "Anglais",
                    "german" => "Allemand",
                    "french" => "Français",
                    "italian" => "Italien",
                    "spanish" => "Espagnol",
                    "settingsTitle" => "Titre (Bienvenue sur Blog's Berry !)",
                    "settingsContent" => "Contenu (Blog's Berry est un formidable site web vous permettant de découvrir des Blogs et des Articles du monde entier. Et plus que cela, vous pouvez même…)",
                    "settingsLink" => "Lien (https://www.anthony-khelil.com/BlogsBerry/Blogs)",
                    "settingsSubmit" => "Sauvegarder les Paramètres",
                    "settingsDelete" => "Supprimer ce Blog",
                    "addTitle" => "Titre (Comment publier du contenu sur Blog's Berry ?)",
                    "addContent" => "Contenu (Aujourd'hui, nous allons voir ensemble comment publier du contenu sur Blog's Berry. Pour cela, la solution la plus simple est de…)",
                    "addLink" => "Lien (https://www.anthony-khelil.com/BlogsBerry/Articles)",
                    "addImage" => "Image",
                    "addSubmit" => "Ajouter cet Article",
                    "editTitle" => "Paramètres de l'Article",
                    "editDelete" => "Supprimer cet Article",
                )[$text];
            else if($language == "Italian")
                return array(
                    "title" => "Your Articles",
                    "content" => "Here are the Articles you have published on this Blog. You can edit, delete, or add new ones. Don't forget to check the Statistics page to see how well this Blog is doing.",
                    "tableTitle" => "Title",
                    "tableImage" => "Image",
                    "tableEdit" => "Edit",
                    "tableStatistics" => "Statistics",
                    "empty" => "You don't have any items yet. Use the button below to create one.",
                    "settings" => "Blog Settings",
                    "add" => "Add an Article",
                    "home" => "Home",
                    "language" => "Select a Language",
                    "english" => "English",
                    "german" => "German",
                    "french" => "French",
                    "italian" => "Italian",
                    "spanish" => "Spanish",
                    "settingsTitle" => "Title (Welcome to Blog's Berry !)",
                    "settingsContent" => "Content (Blog's Berry is a great website allowing you to discover Blogs and Articles from all over the world. And more than that, you can even…)",
                    "settingsLink" => "Link (https://www.anthony-khelil.com/BlogsBerry/Blogs)",
                    "settingsSubmit" => "Save Settings",
                    "settingsDelete" => "Delete this Blog",
                    "addTitle" => "Title (How to publish content on Blog's Berry ?)",
                    "addContent" => "Content (Today, we're going to see together how to publish content on Blog's Berry. The easiest way to do this is to…)",
                    "addLink" => "Link (https://www.anthony-khelil.com/BlogsBerry/Articles)",
                    "addImage" => "Image",
                    "addSubmit" => "Add this Article",
                    "editTitle" => "Article Settings",
                    "editDelete" => "Delete this Article",
                )[$text];
            else if($language == "Spanish")
                return array(
                    "title" => "Your Articles",
                    "content" => "Here are the Articles you have published on this Blog. You can edit, delete, or add new ones. Don't forget to check the Statistics page to see how well this Blog is doing.",
                    "tableTitle" => "Title",
                    "tableImage" => "Image",
                    "tableEdit" => "Edit",
                    "tableStatistics" => "Statistics",
                    "empty" => "You don't have any items yet. Use the button below to create one.",
                    "settings" => "Blog Settings",
                    "add" => "Add an Article",
                    "home" => "Home",
                    "language" => "Select a Language",
                    "english" => "English",
                    "german" => "German",
                    "french" => "French",
                    "italian" => "Italian",
                    "spanish" => "Spanish",
                    "settingsTitle" => "Title (Welcome to Blog's Berry !)",
                    "settingsContent" => "Content (Blog's Berry is a great website allowing you to discover Blogs and Articles from all over the world. And more than that, you can even…)",
                    "settingsLink" => "Link (https://www.anthony-khelil.com/BlogsBerry/Blogs)",
                    "settingsSubmit" => "Save Settings",
                    "settingsDelete" => "Delete this Blog",
                    "addTitle" => "Title (How to publish content on Blog's Berry ?)",
                    "addContent" => "Content (Today, we're going to see together how to publish content on Blog's Berry. The easiest way to do this is to…)",
                    "addLink" => "Link (https://www.anthony-khelil.com/BlogsBerry/Articles)",
                    "addImage" => "Image",
                    "addSubmit" => "Add this Article",
                    "editTitle" => "Article Settings",
                    "editDelete" => "Delete this Article",
                )[$text];
        }

        static public function statistics($language, $text) {
            if($language == "English")
                return array(
                    "title" => "Statistics",
                    "content" => "Here are the Statistics of blos Blogs and Articles on Blog's Berry. Here you can see how many times each of them have been viewed, their average position, and the number of clicks that followed. You can set these statistics to analyze only your Blog results, only your posts, or both. Then, don't forget to choose which Blogs and Posts you want to view, and set the number and frequency of Statistics.",
                    "platformTitle" => "Select a Platform",
                    "platformBoth" => "Blogs and Articles",
                    "platformBlogs" => "Only Blogs",
                    "platformArticles" => "Only Articles",
                    "blogsTitle" => "Select a Blog",
                    "blogsAll" => "All Blogs",
                    "articlesTitle" => "Select an Article",
                    "articlesAll" => "All Articles",
                    "periodTitle" => "Select a Period",
                    "periodDays" => "Days",
                    "periodWeeks" => "Weeks",
                    "periodMonths" => "Months",
                    "searches" => "Searches",
                    "positions" => "Positions",
                    "clicks" => "Clicks",
                    "boost" => "Boost my Blogs and Articles",
                    "home" => "Home",
                    "boostContent" => "Blog's Berry is a platform for sharing and exchange, whose goal is to bring visibility to the different Blogs and Articles written by each of you. You can, in turn, bring visibility to Blog's Berry, via your own Blog. In some cases, we could even thank you by granting you the status of Blog's Berry Partner, and thus highlight your Blogs and Articles. <br/> <br/> If you are interested in promoting Blog's Berry with your own community, just click on the button below. We will send you all the details to your email address, so you can see how your Blog and Blog's Berry can work together.",
                    "boostButton" => "Become a Blog's Berry Partner",
                )[$text];
            else if($language == "German")
                return array(
                    "title" => "Statistics",
                    "content" => "Here are the Statistics of blos Blogs and Articles on Blog's Berry. Here you can see how many times each of them have been viewed, their average position, and the number of clicks that followed. You can set these statistics to analyze only your Blog results, only your posts, or both. Then, don't forget to choose which Blogs and Posts you want to view, and set the number and frequency of Statistics.",
                    "platformTitle" => "Select a Platform",
                    "platformBoth" => "Blogs and Articles",
                    "platformBlogs" => "Only Blogs",
                    "platformArticles" => "Only Articles",
                    "blogsTitle" => "Select a Blog",
                    "blogsAll" => "All Blogs",
                    "articlesTitle" => "Select an Article",
                    "articlesAll" => "All Articles",
                    "periodTitle" => "Select a Period",
                    "periodDays" => "Days",
                    "periodWeeks" => "Weeks",
                    "periodMonths" => "Months",
                    "searches" => "Searches",
                    "positions" => "Positions",
                    "clicks" => "Clicks",
                    "boost" => "Boost my Blogs and Articles",
                    "home" => "Home",
                    "boostContent" => "Blog's Berry is a platform for sharing and exchange, whose goal is to bring visibility to the different Blogs and Articles written by each of you. You can, in turn, bring visibility to Blog's Berry, via your own Blog. In some cases, we could even thank you by granting you the status of Blog's Berry Partner, and thus highlight your Blogs and Articles. <br/> <br/> If you are interested in promoting Blog's Berry with your own community, just click on the button below. We will send you all the details to your email address, so you can see how your Blog and Blog's Berry can work together.",
                    "boostButton" => "Become a Blog's Berry Partner",
                )[$text];
            else if($language == "French")
                return array(
                    "title" => "Statistiques",
                    "content" => "Voici les Statistiques de blos Blogs et Articles sur Blog's Berry. Vous pouvez y visualiser le nombre de fois que chacun d'entre eux ont été vus, leur positions moyenne, ainsi que le nombre de clics qui ont suivi. Vous pouvre régler ces statistiques afin d'analyser uniquement les résultats de vos Blogs, uniquement ceux de vos Articles, ou de comptabiliser les deux. Ensuite, n'oubliez pas de choisir sur quels Blogs et quels Articles vous souhaitez visualiser, et réglez le nombre et la fréquence des Statistiques.",
                    "platformTitle" => "Sélectionnez une Plateforme",
                    "platformBoth" => "Blogs et Articles",
                    "platformBlogs" => "Seulement les Blogs",
                    "platformArticles" => "Seulement les Articles",
                    "blogsTitle" => "Sélectionnez un Blog",
                    "blogsAll" => "Tous les Blogs",
                    "articlesTitle" => "Sélectionnez un Article",
                    "articlesAll" => "Tous les Articles",
                    "periodTitle" => "Sélectionnez une Période",
                    "periodDays" => "Jours",
                    "periodWeeks" => "Semaines",
                    "periodMonths" => "Mois",
                    "searches" => "Recherches",
                    "positions" => "Positions",
                    "clicks" => "Clics",
                    "boost" => "Booster mes Blogs et Articles",
                    "home" => "Accueil",
                    "boostContent" => "Blog's Berry est une plateforme de partage et d'échange, dont le but est d'apporter de la visibilité aux différents Blogs et Articles écris par chacun d'entre vous. Vous pouvez, à votre tour, apporter de la visibilité à Blog's Berry, via votre propre Blog. Dans certains cas, nous pourrions même vous en remercier en vous accordant le status de Partenaire Blog's Berry, et ainsi mettre en avant vos Blogs et Articles. <br/> <br/> Si vous êtes intéréssé pour promouvoir Blog's Berry avec votre propre communauté, il vous suffit de cliquer sur le bouton ci-dessous. Nous vous enverrons sur votre adresse email tous les détails, afin de voir ensemble comment votre Blog et Blog's Berry peuvent travailler ensemble.",
                    "boostButton" => "Devenir Partenaire Blog's Berry",
                )[$text];
            else if($language == "Italian")
                return array(
                    "title" => "Statistics",
                    "content" => "Here are the Statistics of blos Blogs and Articles on Blog's Berry. Here you can see how many times each of them have been viewed, their average position, and the number of clicks that followed. You can set these statistics to analyze only your Blog results, only your posts, or both. Then, don't forget to choose which Blogs and Posts you want to view, and set the number and frequency of Statistics.",
                    "platformTitle" => "Select a Platform",
                    "platformBoth" => "Blogs and Articles",
                    "platformBlogs" => "Only Blogs",
                    "platformArticles" => "Only Articles",
                    "blogsTitle" => "Select a Blog",
                    "blogsAll" => "All Blogs",
                    "articlesTitle" => "Select an Article",
                    "articlesAll" => "All Articles",
                    "periodTitle" => "Select a Period",
                    "periodDays" => "Days",
                    "periodWeeks" => "Weeks",
                    "periodMonths" => "Months",
                    "searches" => "Searches",
                    "positions" => "Positions",
                    "clicks" => "Clicks",
                    "boost" => "Boost my Blogs and Articles",
                    "home" => "Home",
                    "boostContent" => "Blog's Berry is a platform for sharing and exchange, whose goal is to bring visibility to the different Blogs and Articles written by each of you. You can, in turn, bring visibility to Blog's Berry, via your own Blog. In some cases, we could even thank you by granting you the status of Blog's Berry Partner, and thus highlight your Blogs and Articles. <br/> <br/> If you are interested in promoting Blog's Berry with your own community, just click on the button below. We will send you all the details to your email address, so you can see how your Blog and Blog's Berry can work together.",
                    "boostButton" => "Become a Blog's Berry Partner",
                )[$text];
            else if($language == "Spanish")
                return array(
                    "title" => "Statistics",
                    "content" => "Here are the Statistics of blos Blogs and Articles on Blog's Berry. Here you can see how many times each of them have been viewed, their average position, and the number of clicks that followed. You can set these statistics to analyze only your Blog results, only your posts, or both. Then, don't forget to choose which Blogs and Posts you want to view, and set the number and frequency of Statistics.",
                    "platformTitle" => "Select a Platform",
                    "platformBoth" => "Blogs and Articles",
                    "platformBlogs" => "Only Blogs",
                    "platformArticles" => "Only Articles",
                    "blogsTitle" => "Select a Blog",
                    "blogsAll" => "All Blogs",
                    "articlesTitle" => "Select an Article",
                    "articlesAll" => "All Articles",
                    "periodTitle" => "Select a Period",
                    "periodDays" => "Days",
                    "periodWeeks" => "Weeks",
                    "periodMonths" => "Months",
                    "searches" => "Searches",
                    "positions" => "Positions",
                    "clicks" => "Clicks",
                    "boost" => "Boost my Blogs and Articles",
                    "home" => "Home",
                    "boostContent" => "Blog's Berry is a platform for sharing and exchange, whose goal is to bring visibility to the different Blogs and Articles written by each of you. You can, in turn, bring visibility to Blog's Berry, via your own Blog. In some cases, we could even thank you by granting you the status of Blog's Berry Partner, and thus highlight your Blogs and Articles. <br/> <br/> If you are interested in promoting Blog's Berry with your own community, just click on the button below. We will send you all the details to your email address, so you can see how your Blog and Blog's Berry can work together.",
                    "boostButton" => "Become a Blog's Berry Partner",
                )[$text];
        }

        static public function emails($language, $text, $username = "", $password = "") {
            if($language == "English")
                return array(
                    "signupTitle" => "Welcome to Blog's Berry",
                    "signupContent" => "Dear " . $username . " Thank you for subscribing to Blog's Berry. From now on, you can login to your account and enjoy a host of benefits. To do so, you need to go <a href=\"https://www.anthony-khelil.com/BlogsBerry/Login\"> to the Login page </a> and fill in the following information : <br/> <br/> Username : " . $username . " <br/> Password : " . $username . " <br/> <br/> By logging in, you will be able to enjoy a host of advantages, such as tagging your favorite Blogs and Articles, or even adding your own Blogs and Articles, so that they are visible to the world. And if you have any questions, you can send them to us by contacting us via this email address. <br/> <br/> Have fun with Blog's Berry <br/> <br/> The Blog's Berry Team.",
                    "forgotTitle" => "Reset your Password",
                    "forgotContent" => "Dear " . $username . ". You have requested to reset your Password. So here is your new login information : <br/> <br/> Username : " . $username . " <br/> Password : " . $password . " <br/> If it wasn't you, please log in to your Account to verify that access has not been usurped. If you succeed, please ignore this email. If you are unable to do so, please contact us as soon as possible. <br/> The Blog's Berry Team.",
                    "partnershipTitle" => "Become a Blog's Berry Partner",
                    "partnershipContent" => "Dear " . $username . " You have applied to become a Blog's Berry Partner. But before you go any further, do you know exactly what it consists of ? <br/> <br/> Developing a web platform such as Blog's Berry is a long and complex job. However, Blog's Berry is completely free, and therefore allows everyone to come and discover new Blogs and Articles, and even to integrate yours into the countless searches carried out every day on our platform. <If you would like to thank us for these efforts, we invite you to share Blog's Berry with your community. This can take any form you wish, be it writing an Article, a banner in an advertising space, an interview, a mention, etc... Whatever you can bring us, no matter how many visitors you can bring back, will always be beneficial for Blog's Berry to continue to thrive. <br/> <br/> The second advantage of becoming a Partner is also to have an increased visibility, to better distinguish you from other Blogs and Articles. On a regular basis, the people who give us visibility through the above means can be highlighted in the searches, to thank them for their commitment. <br/> <br/> If you would like to become a Blog's Berry Partner, simply reply to this email indicating your Blogs, and how you would like to promote us (Articles, advertising, ...) so that we can contact you to start this great partnership together.",
                )[$text];
            else if($language == "German")
                return array(
                    "signupTitle" => "Welcome to Blog's Berry",
                    "signupContent" => "Dear " . $username . " Thank you for subscribing to Blog's Berry. From now on, you can login to your account and enjoy a host of benefits. To do so, you need to go <a href=\"https://www.anthony-khelil.com/BlogsBerry/Login\"> to the Login page </a> and fill in the following information : <br/> <br/> Username : " . $username . " <br/> Password : " . $username . " <br/> <br/> By logging in, you will be able to enjoy a host of advantages, such as tagging your favorite Blogs and Articles, or even adding your own Blogs and Articles, so that they are visible to the world. And if you have any questions, you can send them to us by contacting us via this email address. <br/> <br/> Have fun with Blog's Berry <br/> <br/> The Blog's Berry Team.",
                    "forgotTitle" => "Reset your Password",
                    "forgotContent" => "Dear " . $username . ". You have requested to reset your Password. So here is your new login information : <br/> <br/> Username : " . $username . " <br/> Password : " . $password . " <br/> If it wasn't you, please log in to your Account to verify that access has not been usurped. If you succeed, please ignore this email. If you are unable to do so, please contact us as soon as possible. <br/> The Blog's Berry Team.",
                    "partnershipTitle" => "Become a Blog's Berry Partner",
                    "partnershipContent" => "Dear " . $username . " You have applied to become a Blog's Berry Partner. But before you go any further, do you know exactly what it consists of ? <br/> <br/> Developing a web platform such as Blog's Berry is a long and complex job. However, Blog's Berry is completely free, and therefore allows everyone to come and discover new Blogs and Articles, and even to integrate yours into the countless searches carried out every day on our platform. <If you would like to thank us for these efforts, we invite you to share Blog's Berry with your community. This can take any form you wish, be it writing an Article, a banner in an advertising space, an interview, a mention, etc... Whatever you can bring us, no matter how many visitors you can bring back, will always be beneficial for Blog's Berry to continue to thrive. <br/> <br/> The second advantage of becoming a Partner is also to have an increased visibility, to better distinguish you from other Blogs and Articles. On a regular basis, the people who give us visibility through the above means can be highlighted in the searches, to thank them for their commitment. <br/> <br/> If you would like to become a Blog's Berry Partner, simply reply to this email indicating your Blogs, and how you would like to promote us (Articles, advertising, ...) so that we can contact you to start this great partnership together.",
                )[$text];
            else if($language == "French")
                return array(
                    "signupTitle" => "Bienvenue chez Blog's Berry",
                    "signupContent" => "Cher " . $username . " <br/> <br/> Merci de votre inscription sur Blog's Berry. À partir de maintenant, vous pouvez vous connecter à votre compte et profiter d'une foule d'avantage. Pour cela, vous devez vous rendre <a href=\"https://www.anthony-khelil.com/BlogsBerry/Login\"> sur la page de Connexion, </a> et y renseigner les informations suivantes : <br/> <br/> Pseudo : " . $username . " <br/> Mot de Passe : " . $password . " <br/> <br/> En vous connectant, vous pourrez profiter d'une foule d'avantage, comme marquer vos blogs et articles favoris, ou même ajouter vos propres Blogs et Articles, afin qu'ils soient visibles par le monde entier. Et si vous avez la moindre questions, vous pouvez nous la faire parvenir en nous contactant via cette adresse email. <br/> <br/> Amusez-vous bien avec Blog's Berry <br/> <br/> L'Équipe Blog's Berry.",
                    "forgotTitle" => "Réinitialisation de votre Mot de Passe",
                    "forgotContent" => "Cher " . $username . " <br/> <br/> Vous avez demandé à réinitialiser votre Mot de Passe. Voici donc vos nouvelles informations de connexion : <br/> <br/> Pseudo : " . $username . " <br/> Mot de Passe : " . $password . " <br/> <br/> Si ce n'était pas vous, veuillez vous connectez à votre Compte afin de vérifier que l'accès n'y a pas été usurpé. Si vous y parvenez, veuillez ne pas tenir compte de cet email. Si vous n'y parvenez pas, veuillez nous contacter le plus rapidement possible. <br/> <br/> L'Équipe Blog's Berry.",
                    "partnershipTitle" => "Devenez Partenaire Blog's Berry",
                    "partnershipContent" => "Cher " . $username . " <br/> <br/> Vous avez effectué une demande pour devenir Partenaire Blog's Berry. Mais avant d'aller plus loin, savez-vous précisément en quoi cela consiste ? <br/> <br/> Le développement d'une platform web telle que Blog's Berry est un travail long et complexe. Toutefois, Blog's Berry est intégralement gratuit, et permet donc à chacun de venir y découvrir de nouveaux Blogs et Articles, et même d'intégrer les vôtres dans les innombrables recherches effecutées chaque jour sur notre plateforme. <br/> Si vous souhaitez nous remercier pour ces efforts, nous vous invitons à partager Blog's Berry avec votre communauté. Cela peut prendre la forme que vous désirez, que cela soit la rédaction d'un Article, une banderolle dans un espace publicitaire, une interview, une mention, etc… Tout ce que vous pourrez nous apporter, quel que soit le nombre de visiteurs que vous pourrez nous ramener, nous sera toujours bénéfique pour permettre à Blog's Berry de continuer à prospérer. <br/> <br/> Le second avantage à devenir Partenaire est également d'avoir une visibilité accrue, pour mieux vous distinguer des autres Blogs et Articles. Régulièrement, les personnes qui nous accordent de la visibilité via les moyens énoncés précédemment peuvent être mis en avant dans les recherches, afin de les remercier de leur engagement. <br/> <br/> Si vous souhaitez devenir Partenaire Blog's Berry, il vous suffit de répondre à cet email en nous indiquant votre Blogs, et la façon dont vous souhaiteriez nous promouvoir, (Articles, publicité, …) afin que nous vous recontactions pour démarrer ensemble ce formidable Partenariat.",
                )[$text];
            else if($language == "Italian")
                return array(
                    "signupTitle" => "Welcome to Blog's Berry",
                    "signupContent" => "Dear " . $username . " Thank you for subscribing to Blog's Berry. From now on, you can login to your account and enjoy a host of benefits. To do so, you need to go <a href=\"https://www.anthony-khelil.com/BlogsBerry/Login\"> to the Login page </a> and fill in the following information : <br/> <br/> Username : " . $username . " <br/> Password : " . $username . " <br/> <br/> By logging in, you will be able to enjoy a host of advantages, such as tagging your favorite Blogs and Articles, or even adding your own Blogs and Articles, so that they are visible to the world. And if you have any questions, you can send them to us by contacting us via this email address. <br/> <br/> Have fun with Blog's Berry <br/> <br/> The Blog's Berry Team.",
                    "forgotTitle" => "Reset your Password",
                    "forgotContent" => "Dear " . $username . ". You have requested to reset your Password. So here is your new login information : <br/> <br/> Username : " . $username . " <br/> Password : " . $password . " <br/> If it wasn't you, please log in to your Account to verify that access has not been usurped. If you succeed, please ignore this email. If you are unable to do so, please contact us as soon as possible. <br/> The Blog's Berry Team.",
                    "partnershipTitle" => "Become a Blog's Berry Partner",
                    "partnershipContent" => "Dear " . $username . " You have applied to become a Blog's Berry Partner. But before you go any further, do you know exactly what it consists of ? <br/> <br/> Developing a web platform such as Blog's Berry is a long and complex job. However, Blog's Berry is completely free, and therefore allows everyone to come and discover new Blogs and Articles, and even to integrate yours into the countless searches carried out every day on our platform. <If you would like to thank us for these efforts, we invite you to share Blog's Berry with your community. This can take any form you wish, be it writing an Article, a banner in an advertising space, an interview, a mention, etc... Whatever you can bring us, no matter how many visitors you can bring back, will always be beneficial for Blog's Berry to continue to thrive. <br/> <br/> The second advantage of becoming a Partner is also to have an increased visibility, to better distinguish you from other Blogs and Articles. On a regular basis, the people who give us visibility through the above means can be highlighted in the searches, to thank them for their commitment. <br/> <br/> If you would like to become a Blog's Berry Partner, simply reply to this email indicating your Blogs, and how you would like to promote us (Articles, advertising, ...) so that we can contact you to start this great partnership together.",
                )[$text];
            else if($language == "Spanish")
                return array(
                    "signupTitle" => "Welcome to Blog's Berry",
                    "signupContent" => "Dear " . $username . " Thank you for subscribing to Blog's Berry. From now on, you can login to your account and enjoy a host of benefits. To do so, you need to go <a href=\"https://www.anthony-khelil.com/BlogsBerry/Login\"> to the Login page </a> and fill in the following information : <br/> <br/> Username : " . $username . " <br/> Password : " . $username . " <br/> <br/> By logging in, you will be able to enjoy a host of advantages, such as tagging your favorite Blogs and Articles, or even adding your own Blogs and Articles, so that they are visible to the world. And if you have any questions, you can send them to us by contacting us via this email address. <br/> <br/> Have fun with Blog's Berry <br/> <br/> The Blog's Berry Team.",
                    "forgotTitle" => "Reset your Password",
                    "forgotContent" => "Dear " . $username . ". You have requested to reset your Password. So here is your new login information : <br/> <br/> Username : " . $username . " <br/> Password : " . $password . " <br/> If it wasn't you, please log in to your Account to verify that access has not been usurped. If you succeed, please ignore this email. If you are unable to do so, please contact us as soon as possible. <br/> The Blog's Berry Team.",
                    "partnershipTitle" => "Become a Blog's Berry Partner",
                    "partnershipContent" => "Dear " . $username . " You have applied to become a Blog's Berry Partner. But before you go any further, do you know exactly what it consists of ? <br/> <br/> Developing a web platform such as Blog's Berry is a long and complex job. However, Blog's Berry is completely free, and therefore allows everyone to come and discover new Blogs and Articles, and even to integrate yours into the countless searches carried out every day on our platform. <If you would like to thank us for these efforts, we invite you to share Blog's Berry with your community. This can take any form you wish, be it writing an Article, a banner in an advertising space, an interview, a mention, etc... Whatever you can bring us, no matter how many visitors you can bring back, will always be beneficial for Blog's Berry to continue to thrive. <br/> <br/> The second advantage of becoming a Partner is also to have an increased visibility, to better distinguish you from other Blogs and Articles. On a regular basis, the people who give us visibility through the above means can be highlighted in the searches, to thank them for their commitment. <br/> <br/> If you would like to become a Blog's Berry Partner, simply reply to this email indicating your Blogs, and how you would like to promote us (Articles, advertising, ...) so that we can contact you to start this great partnership together.",
                )[$text];
        }
    };

?>
