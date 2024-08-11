
<?php

class Emails {

    static public function signup($language, $email, $username, $password) {
        return mail(
            htmlspecialchars($email),
            "Blog's Berry - " . Translate::emails($language, "signupTitle"),
            Translate::emails($language, "signupContent", $username, $password),
            "MIME-Version : 1.0\nContent-type : text/html; charset=utf-8\nFrom : 'Blog's Berry' <contact@anthony-khelil.com>"
        );
    }

    static public function forgot($language, $email, $username, $password) {
        return mail(
            htmlspecialchars($email),
            "Blog's Berry - " . Translate::emails($language, "forgotTitle"),
            Translate::emails($language, "forgotContent", $username, $password),
            "MIME-Version : 1.0\nContent-type : text/html; charset=utf-8\nFrom : 'Blog's Berry' <contact@anthony-khelil.com>"
        );
    }

    static public function partnership($language, $email, $username) {
        return mail(
            htmlspecialchars($email),
            "Blog's Berry - " . Translate::emails($language, "partnershipTitle"),
            Translate::emails($language, "partnershipContent", $username),
            "MIME-Version : 1.0\nContent-type : text/html; charset=utf-8\nFrom : 'Blog's Berry' <contact@anthony-khelil.com>"
        );
    }

}

?>
