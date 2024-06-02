<?php

    // use PHPMailer\PHPMailer\PHPMailer;
    require_once './includes/autoloader.inc.php';
    // require_once '../PHPMailer/src/PHPMailer.php';
    // require_once '../PHPMailer/src/Exception.php';
    // require_once '../PHPMailer/src/SMTP.php';


    class ResetPasswords extends Database
    {
        private $mail;
        private $resetMember;

        public $error = "";
        public $message = "";



        public function __construct() 
        {
            // $this->mail = new PHPMailer();
            // $this->mail->isSMTP();
            // $this->mail->Host = 'sandbox.smtp.mailtrap.io';
            // $this->mail->SMTPAuth = true;
            // $this->mail->Port = 2525;
            // $this->mail->Username = '966dc592a14cb6';
            // $this->mail->Password = '11b796b5d478f3';

        }

        public function sendEmail()
        {

            $userEmail = trim($_POST['email']);

            if(empty($userEmail)) {
                $this->error = "Veuillez entrer votre email !";
            } 
            else if(!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
                $this->error = "Veuillez entrer un email valide!";
            }
            else if(!$this->findMemberByEmail()) {
                $this->error = "Cette email n'appartient à aucun utilisateur !";
            }
            else 
            {
                $selector = bin2hex(random_bytes(8));

                $token = random_bytes(32);
    
                $url = "http://localhost/hop/createpwd.php?selector=" .$selector. "& validator=" .bin2hex($token);
    
                $expires = date("U") + 1800;

                
            }

            

        }

        public function findMemberByEmail() 
        {
            $sql = "SELECT * FROM members WHERE email = ?";

            $rslt = $this->getConnected()->prepare($sql);
            $rslt->execute(array(trim($_POST['email'])));

            $row = $rslt->fetch();

            if(!$row > 0) {
                //$this->message = "L'email est bonne !";
                return false;
            }
            else {
                //$this->error = "Email déjà utilisée";
                return $row;
            }
        }


    }