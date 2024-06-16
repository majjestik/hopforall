<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require './vendor/autoload.php';


    require_once './includes/autoloader.inc.php';


    class ResetPasswords extends Database
    {
        public $error = "";
        public $message = "";

        public $otpEmail;



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
                $otp = rand() * time();

                // SEND OTP AND UPDATE THE DB
                $sql = "UPDATE members SET otp = ? WHERE email = ?";
                $stmt = $this->getConnected()->prepare($sql);
                $stmt->execute(array($otp, $userEmail));

                try {


                    //Create an instance; passing `true` enables exceptions
                    $mail = new PHPMailer(true);

                    $sender = 'guenejoseph237@gmail.com';

                     //Server settings
                    $mail->SMTPDebug = SMTP::DEBUG_SERVER;           //Enable verbose debug output
                    $mail->isSMTP();                                 //Send using SMTP
                    $mail->Host       = 'sandbox.smtp.mailtrap.io';   //Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                        //Enable SMTP authentication
                    $mail->Username   = '966dc592a14cb6';          //SMTP username
                    $mail->Password   = '11b796b5d478f3';                    //SMTP password
                    $mail->SMTPSecure = 'tls'; //Enable implicit TLS encryption
                    $mail->Port       = 587;    //465 TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                      
                    //Recipients
                    $mail->setFrom($sender, 'OTP sender');
                    $mail->addAddress($userEmail);    
                    $mail->addReplyTo($sender, 'OTP sender');

                    // Content
                    $mail->isHTML(true);
                    $mail->Subject = 'Code OTP';
                    $mail->Body    = 'Voici votre code OTP:  <b>' .$otp. '</b>';

                    $mail->send();
                    $this->message = "Votre code OTP a été envoyé... Consultez votre boîte mail";



                } catch (Exception $e) {
                    $this->error = "Une erreur est survenue. Votre code n'a pas pu être envoyé";
                }

                
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

        public function verifyOTP() 
        {
            $sql = "SELECT * FROM members WHERE otp = ?";

            $rslt = $this->getConnected()->prepare($sql);
            $rslt->execute(array(trim($_POST['otp'])));

            $row = $rslt->fetch();

            if($row > 1) {
                ignore_user_abort(true);
                
                $_SESSION['resetEmail'] = $row['email'];

                header('Location: createpwd.php');
            } 
            else 
            {
                $this->error = "Ce code OTP est incorrect";
            }
        }

        public function resetPassword() 
        {
            $gotPwd = trim($_POST['password']);

            if(strlen($gotPwd) < 8) {
                $this->error = "Votre mot de passe doit avoir au moins 8 caractères!";
            }
            else {
                $newPwd = password_hash($gotPwd, PASSWORD_DEFAULT);

                $sql = "UPDATE members SET password = ? WHERE email = ?";
                $stmt = $this->getConnected()->prepare($sql);
                $stmt->execute(array($newPwd, $_SESSION['resetEmail']));

                if($stmt) {
                    header('Location: resetSuccess.php');
                }
                else {
                    $this->error = "Une erreur est survenue... Réessayez plus tard";
                }
            }

        }


    }