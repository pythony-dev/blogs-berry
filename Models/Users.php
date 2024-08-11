
<?php

    require_once("Models/Database.php");
    require_once("Private/Emails.php");

    class Users extends Database {

        private $salt = "SZx6q34wx52BY3Mk";

        public function __construct() {
            parent::__construct();
        }

        public function login($username, $password) {
            $query = $this->database->prepare("SELECT ID, Status FROM BlogsBerry__Users WHERE Username = :username AND Password = :password");
            $query->bindValue("username", htmlspecialchars($username), PDO::PARAM_STR);
            $query->bindValue("password", sha1($this->salt . htmlspecialchars($password)), PDO::PARAM_STR);
            $query->execute();

            if($data = $query->fetch()) {
                $_SESSION["UserID"] = $data["ID"];

                $query = $this->database->prepare("UPDATE BlogsBerry__Users SET Forgot = NULL WHERE Username = :username");
                $query->bindValue("username", htmlspecialchars($username), PDO::PARAM_STR);

                return $query->execute() ? $data["Status"] : false;
            }

            $query = $this->database->prepare("SELECT ID, Status FROM BlogsBerry__Users WHERE Username = :username AND Forgot = :forgot");
            $query->bindValue("username", htmlspecialchars($username), PDO::PARAM_STR);
            $query->bindValue("forgot", sha1($this->salt . htmlspecialchars($password)), PDO::PARAM_STR);
            $query->execute();

            if($data = $query->fetch()) {
                $_SESSION["UserID"] = $data["ID"];

                $query = $this->database->prepare("UPDATE BlogsBerry__Users SET Password = Forgot, Forgot = NULL WHERE Username = :username");
                $query->bindValue("username", htmlspecialchars($username), PDO::PARAM_STR);

                return $query->execute() ? $data["Status"] : false;
            }

            return false;
        }

        public function signup($status, $language, $email, $username) {
            if(!$this->isStatus($status) || !$this->isLanguage($language) || $this->isEmail($email) != 1 || $this->isUsername($username) != 1) return false;

            $password = $this->createPassword();

            $query = $this->database->prepare("INSERT INTO BlogsBerry__Users (Registered, Status, Language, Email, Username, Frequency, Password, Forgot) VALUES (NOW(), :status, :language, :email, :username, 'Weekly', :password, NULL)");
            $query->bindValue("status", htmlspecialchars($status), PDO::PARAM_STR);
            $query->bindValue("language", htmlspecialchars($language), PDO::PARAM_STR);
            $query->bindValue("email", htmlspecialchars($email), PDO::PARAM_STR);
            $query->bindValue("username", htmlspecialchars($username), PDO::PARAM_STR);
            $query->bindValue("password", sha1($this->salt . htmlspecialchars($password)), PDO::PARAM_STR);

            return $query->execute() && Emails::signup(htmlspecialchars($language), htmlspecialchars($email), htmlspecialchars($username), htmlspecialchars($password));
        }

        public function forgot($email) {
            if($this->isEmail($email) != 0) return false;

            $query = $this->database->prepare("SELECT Language, Username FROM BlogsBerry__Users WHERE Email = :email");
            $query->bindValue("email", htmlspecialchars($email), PDO::PARAM_STR);
            $query->execute();

            if($data = $query->fetch()) {
                $password = $this->createPassword();

                $query = $this->database->prepare("UPDATE BlogsBerry__Users SET Forgot = :forgot WHERE Email = :email");
                $query->bindValue("forgot", sha1($this->salt . htmlspecialchars($password)), PDO::PARAM_STR);
                $query->bindValue("email", htmlspecialchars($email), PDO::PARAM_STR);

                return $query->execute() && Emails::forgot(htmlspecialchars($data["Language"]), htmlspecialchars($email), htmlspecialchars($data["Username"]), htmlspecialchars($password));
            } else return false;
        }

        public function getUser($id) {
            $query = $this->database->prepare("SELECT Status, Language, Email, Username, Frequency FROM BlogsBerry__Users WHERE ID = :id");

            $query->bindValue("id", (int)$id, PDO::PARAM_INT);
            $query->execute();

            return $query->fetch();
        }

        public function update($password, $language, $email, $username, $frequency) {
            $userID = (int)$_SESSION["UserID"];

            if($userID <= 0 || !$this->isLanguage($language) || !$this->isFrequency($frequency) || $this->isEmail($email, $userID) != 1 || $this->isUsername($username, $userID) != 1) return false;

            $query = $this->database->prepare("SELECT ID FROM BlogsBerry__Users WHERE ID = :id AND Password = :password");
            $query->bindValue("id", (int)$userID, PDO::PARAM_INT);
            $query->bindValue("password", sha1($this->salt . htmlspecialchars($password)), PDO::PARAM_STR);
            $query->execute();

            if($query->fetch()) {
                $query = $this->database->prepare("UPDATE BlogsBerry__Users SET Language = :language, Email = :email, Username = :username, Frequency = :frequency WHERE ID = :id");

                $query->bindValue("language", htmlspecialchars($language), PDO::PARAM_STR);
                $query->bindValue("email", htmlspecialchars($email), PDO::PARAM_STR);
                $query->bindValue("username", htmlspecialchars($username), PDO::PARAM_STR);
                $query->bindValue("frequency", htmlspecialchars($frequency), PDO::PARAM_STR);
                $query->bindValue("id", (int)$userID, PDO::PARAM_INT);

                return $query->execute();
            }

            return false;
        }

        public function isEmail($email, $id = 0) {
            if(!preg_match("#^[0-9A-Za-z-_.]{3,64}@[0-9A-Za-z-_.]{3,64}$#", $email)) return 2;

            $query = $this->database->prepare("SELECT ID FROM BlogsBerry__Users WHERE ID != :id AND Email = :email");
            $query->bindValue("id", (int)$id, PDO::PARAM_INT);
            $query->bindValue("email", htmlspecialchars($email), PDO::PARAM_STR);
            $query->execute();

            return $query->fetch() ? 0 : 1;
        }

        public function isUsername($username, $id = 0) {
            if(!preg_match("#^[0-9A-Za-z]{3,16}$#", $username)) return 2;

            $query = $this->database->prepare("SELECT ID FROM BlogsBerry__Users WHERE ID != :id AND Username = :username");
            $query->bindValue("id", (int)$id, PDO::PARAM_INT);
            $query->bindValue("username", htmlspecialchars($username), PDO::PARAM_STR);
            $query->execute();

            return $query->fetch() ? 0 : 1;
        }

        private function isStatus($status) {
            return $status == "Reader" || $status == "Blogger";
        }

        private function isLanguage($language) {
            return $language == "English" || $language == "German" || $language == "French" || $language == "Italian" || $language == "Spanish";
        }

        private function isFrequency($frequency) {
            return $frequency == "Daily" || $frequency == "Weekly" || $frequency == "Monthly" || $frequency == "Annual" || $frequency == "Never";
        }

        private function createPassword() {
            $password = "";

            while(strlen($password) != 16) {
                $random = rand(0, 61);

                if($random < 10) $password .= $random;
                else if($random < 36) $password .= chr($random + 55);
                else $password .= chr($random + 61);
            }

            return $password;
        }
    };

?>
