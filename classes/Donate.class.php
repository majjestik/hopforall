<?php

    require_once 'Database.class.php';

    class Donate extends Database 
    {
        private $nom;
        private $prenom;
        private $tel;
        private $email;
        private $raison;
        private $nature;
        private $dest;
        private $trans;
        private $ville;
        private $pays;
        private $civilite;
        private $anonyme;
        private $sous;
        private $date;


        public $error = "";
        public $message = "";

        public function submitDonForm() {
            if(isset($_POST['donner'])) {

                if(isset($_POST['souscription'])) {
                    $this->sous = trim($_POST['souscription']);
                }
                
                if(isset($_POST['anonyme'])) {
                    $this->anonyme = trim($_POST['anonyme']);
                }
                
                $this->nom = trim($_POST['nomDon']);
                $this->prenom = trim($_POST['prenomDon']);
                $this->email = trim($_POST['emailDon']);
                $this->tel = trim($_POST['telephone']);
                $this->civilite = trim($_POST['civilite']);
                $this->raison = trim($_POST['raison']);
                $this->ville = trim($_POST['ville']);
                $this->pays = trim($_POST['pays']);
                $this->nature = trim($_POST['nature']);
                $this->dest = trim($_POST['destination']);
                $this->trans = trim($_POST['idTransaction']);
                $this->date = date('Y/m/d H:i:s');

                if($this->findDonationById()) {
                    $this->error = "Cette transaction est déjà enregistrée";
                }
                else {
                    $sql = "INSERT INTO dons (civilite, nomDon, prenomDon, telephone, emailDon, ville, pays, raison, nature, destination, idTransaction, date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

                    $stmt = $this->getConnected()->prepare($sql);

                    $stmt->execute(array($this->civilite, $this->nom, $this->prenom, $this->tel, $this->email, $this->ville, $this->pays, $this->raison, $this->nature, $this->dest, $this->trans,$this->date));


                    if($stmt) {

                        header('Location: merci.php');
                        die();
                    }
                    else {
                        $this->error = "Une erreur s'est produite. Merci de réessayer";
                    }


                }


            }
        }

        
        // FIND DONATION BY ID OF TRANSACTION
        public function findDonationById() {
            $query = "SELECT * FROM dons WHERE idTransaction = ?";

            $rslt = $this->getConnected()->prepare($query);
            $rslt->execute(array(trim($_POST['idTransaction'])));

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




    // if(isset($_POST['donner'])) {

    //     extract($_POST);

    //     echo $nomDon;
        
    //     $this->nom = trim($_POST['nomDon']);
    //     $this->prenom = trim($_POST['prenomDon']);
    //     $this->email = trim($_POST['emailDon']);
    //     $this->tel = trim($_POST['telephone']);
    //     $this->civilite = trim($_POST['civilite']);
    //     $this->raison = trim($_POST['raison']);
    //     $this->ville = trim($_POST['ville']);
    //     $this->pays = trim($_POST['pays']);
    //     $this->nature = trim($_POST['nature']);
    //     $this->dest = trim($_POST['destination']);
    //     $this->trans = trim($_POST['idTransaction']);
    //     $this->anonyme = trim($_POST['anonyme']);
    //     $this->sous = trim($_POST['souscription']);
    //     $this->date = date('Y/m/d H:i:s');

    //     if($this->findDonationById()) {
    //         $this->error = "Cette transaction est déjà enregistrée";
    //     }
    //     else {

    //         echo "Ready to register";
    //         // $sql = "INSERT INTO Dons (civilite, nomDon, prenomDon, telephone, emailDon, ville, pays, raison, nature, destination, idTransaction, anonyme, souscription, date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    //         // $stmt = $this->getConnected()->prepare($sql);
    //         // $stmt->execute(array($this->civilite, $this->nom, $this->prenom, $this->tel, $this->email, $this->ville, $this->pays, $this->raison, $this->nature, $this->dest, $this->trans, $this->anonyme, $this->sous, $this->date));

    //         // if($stmt) {
    //         //     $response = array(
    //         //         'status' => ,
    //         //         'msg' => 'Merci beaucoup';
    //         //     );

    //         //     header('Location: merci.php');
    //         //     die();
    //         // }
    //         // else {
    //         //     $this->error = "Une erreur s'est produite. Merci de réessayer";

    //         //     // echo "
    //         //     //         <div class='alert alert-info alert-dismissable fade show text-danger' role='alert'> <i class='bi bi-exclamation-triangle-fill h5'></i> 
    //         //     //                 Une erreur s'est produite. Merci de réessayer !
    //         //     //             <button class='btn-close' type='button' data-bs-dismiss='alert' aria-label='Close'>
    //         //     //                 <span aria-hidden='true' class='ml-3'>&times;</span>
    //         //     //             </button>
    //         //     //         </div>
    //         //     //     ";
    //         // }

    //     }

    // }
    