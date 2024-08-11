
<?php

    require_once("Models/Users.php");
    require_once("Private/Emails.php");

    $users = new Users();

    $action = htmlspecialchars($_POST["Action"]);
    $username = htmlspecialchars($_POST["Username"]);
    $password = htmlspecialchars($_POST["Password"]);
    $language = htmlspecialchars($_POST["Language"]);
    $email = htmlspecialchars($_POST["Email"]);

    if($action == "Login" && $status = $users->login($username, $password)) echo $status;
    else if($action == "Signup" && $users->signup(htmlspecialchars($_POST["Status"]), $language, $email, $username)) echo "true";
    else if($action == "Forgot" && $users->forgot($email)) echo "true";
    else if($action == "Email") echo $users->isEmail($email, (int)$userID);
    else if($action == "Username") echo $users->isUsername($username, (int)$userID);
    else if($action == "Update" && $users->update($password, $language, $email, $username, htmlspecialchars($_POST["Frequency"]))) echo "true";
    else if($action == "Partnership" && $user = $users->getUser((int)$userID) && Emails::partnership($user["Language"], $user["Email"], $user["Username"])) echo "true";

?>
