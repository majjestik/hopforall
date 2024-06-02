<?php

    require_once 'Database.class.php';


    class Users extends Database
    {
        private $mail;

        public $error = "";
        public $message = "";


        public function subsToNewsletter() 
        {
            if(isset($_POST['subscribe'])) {


                if(isset($_POST['newsEmail'])) {
                    $userEmail = trim($_POST['newsEmail']);

                    if(empty($userEmail)) 
                    {

                        echo "
                                <div class='alert alert-info alert-dismissable fade show text-danger w-75' role='alert'> <i class='bi bi-exclamation-triangle-fill h5'></i> 
                                        Veuillez entrer votre email ! 
                                    <button class='btn-close' type='button' data-bs-dismiss='alert' aria-label='Close'>
                                        <span aria-hidden='true' class='ml-3'>&times;</span>
                                    </button>
                                </div>
                            ";
                    } 
                    else if(!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) 
                    {
                        echo "
                                <div class='alert alert-info alert-dismissable fade show text-danger' role='alert'> <i class='bi bi-exclamation-triangle-fill h5'></i> 
                                        Veuillez entrer un email valide!
                                    <button class='btn-close' type='button' data-bs-dismiss='alert' aria-label='Close'>
                                        <span aria-hidden='true' class='ml-3'>&times;</span>
                                    </button>
                                </div>
                            ";
                    }
                    else if($this->findSubscription()) 
                    {
                        echo "
                                <div class='alert alert-info alert-dismissable fade show text-danger' role='alert'> <i class='bi bi-exclamation-triangle-fill h5'></i> 
                                        Cette email est déjà utilisée !
                                    <button class='btn-close' type='button' data-bs-dismiss='alert' aria-label='Close'>
                                        <span aria-hidden='true' class='ml-3'>&times;</span>
                                    </button>
                                </div>
                            ";
                    }
                    else {
                        // echo $userEmail;
                        $date = date('Y/m/d H:i:s');
                        $query = "INSERT INTO newsletter (newsEmail, newsDate) VALUES (?, ?)";

                        $stmt = $this->getConnected()->prepare($query);
                        $stmt->execute(array($userEmail, $date));

                        if($stmt) {
                            echo "
                                <div class='alert alert-info alert-dismissable fade show text-success' role='alert'> <i class='bi bi-exclamation-triangle-fill h5'></i> 
                                        Merci pour votre souscription !
                                    <button class='btn-close' type='button' data-bs-dismiss='alert' aria-label='Close'>
                                        <span aria-hidden='true' class='ml-3'>&times;</span>
                                    </button>
                                </div>
                            ";
                        }
                        else {
                            echo "
                                <div class='alert alert-info alert-dismissable fade show text-danger' role='alert'> <i class='bi bi-exclamation-triangle-fill h5'></i> 
                                        Souscription impossible, veuillez réessayer plus tard !
                                    <button class='btn-close' type='button' data-bs-dismiss='alert' aria-label='Close'>
                                        <span aria-hidden='true' class='ml-3'>&times;</span>
                                    </button>
                                </div>
                            ";
                        }
                    }

                }
            }

            // $userEmail = trim($_POST['newsEmail']);

            // if(empty($userEmail)) 
            // {
            //     $this->error = "Veuillez entrer votre email !";
            // } 
            // else if(!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) 
            // {
            //     $this->error = "Veuillez entrer un email valide!";
            // }
        }


        public function findSubscription() 
        {
            $sql = "SELECT * FROM newsletter WHERE newsEmail = ?";

            $rslt = $this->getConnected()->prepare($sql);
            $rslt->execute(array(trim($_POST['newsEmail'])));

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

    $subscribe = new Users();

    $subscribe->subsToNewsletter();