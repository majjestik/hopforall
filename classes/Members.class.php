<?php

    require_once './includes/autoloader.inc.php';
    //require_once 'Database.class.php';

    class Members extends Database
    {
        private $db;
        private $nom;
        private $prenom;
        private $email;
        private $password;
        private $date;

        public $myNom;
        public $myPrenom;
        public $myEmail;
        public $myStatut;

        public $error = "";
        public $message = "";

        public function __construct()
        {
            //$this->db = new Database();

            //$this->db->getConnected();
        }

        // VALIDATE REGISTER FORM
        public function validateMember() 
        {
            $data = [
                'nom' => trim($_POST['nom']),
                'prenom' => trim($_POST['prenom']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirmPassword' => trim($_POST['confirmPassword']),
            ];
            
            if(empty($data['nom']) || empty($data['prenom']) || empty($data['email']) || empty($data['password']) || empty($data['confirmPassword'])) {
                $this->error = "Veuillez remplir tous les champs!";
            } 
            else if(!preg_match("/^[a-zA-Z-é'\s]+$/", $data['nom'])) {
                $this->error = "Veuillez entrer un nom valide!";
            } 
            else if(!preg_match("/^[a-zA-Z-é'\s]+$/", $data['prenom'])) {
                $this->error = "Veuillez entrer un prenom invalide!";
            }
            else if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $this->error = "Veuillez entrer un email valide!";
            }
            else if(strlen($data['password']) < 8) {
                $this->error = "Votre mot de passe doit avoir au moins 8 caractères!";
            }
            else if($data['password'] !== $data['confirmPassword']) {
                $this->error = "Mot de passe différent!";
            }
            else if($this->findMemberByEmail()) {
                $this->error = "Cette email est déjà utilisée!";
            }
            else {
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
                $this->nom = $data['nom'];
                $this->prenom = $data['prenom'];
                $this->email = $data['email'];
                $this->password = $data['password'];
                $this->date = date('Y/m/d H:i:s');

                // Register Member
                $this->registerMember($this->nom, $this->prenom, $this->email, $this->password, $this->date);
            }

            // Register user
            // if($this->userModel->register($data)) {
            //     header('Location: connect.php');
            // }
            // else {
            //     $this->error = "OOps, incapable d'enregistrer votre profile, réessayer plutard !";
            // }
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

        // REGISTER MEMBER
        public function registerMember($nom, $prenom, $email, $password, $date) 
        {
            $query = ("INSERT INTO members (nom, prenom, email, password, date) VALUES (?, ?, ?, ?, ?) ");

            $stmt = $this->getConnected()->prepare($query);
            $stmt->execute(array($nom, $prenom, $email, $password, $date));

            if($stmt) {
                $this->message = "Enregistrement réussi !";
                $this->nom = "";
                $this->prenom = "";
                $this->email = "";
                $this->password = "";
                $this->date = "";

                header('Location: success.php');
            }
            else {
                $this->error = "OOps, incapable d'enregistrer votre profile, réessayer plutard !"; 
            }
        }

        // MEMBER LOGIN
        public function loginMember() 
        {
            $data = array(
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password'])
            );

            // Check if email exist in admin table
            $sql = "SELECT * FROM members WHERE email = ?";
            $rslt = $this->getConnected()->prepare($sql);
            $rslt->execute(array($data['email']));

            $row = $rslt->fetch();

            if(empty($data['email']) || empty($data['password'])) 
            {
                $this->error = "Veuillez remplir tous les champs!";
            } 
            else if(!$row > 0) 
            {
                $this->error = "Adresse e-mail ou mot de passe incorrecte !";
            }
            else 
            {
                $id = $row['id'];
                $dbpass = $row['password'];
                $role = $row['role'];
                $statut = $row['statut'];

                if(password_verify($data['password'], $dbpass) && $statut == 1) 
                {
                    // $this->message = "Ready to connect !";
                    
                    // Password is correct, so start a new session
                    session_start();
                            
                    // Store data in session variables
                    $_SESSION["loggedin"] = true;
                    $_SESSION["id"] = $id;
                    $_SESSION["role"] = $role;
                    $_SESSION["statut"] = $statut;                           
                            
                    // Redirect user to welcome page
                    header("Location: membre.php");
                }
                else if(password_verify($data['password'], $dbpass) && $statut != 1)
                {
                    $this->error = "Accès refusé !";
                }
                else
                {
                    $this->error = "Adresse e-mail ou mot de passe incorrecte !";
                }
            }
        }

        // LIST UNACTIVATED MEMBERS
        public function unactivatedMember()
        {
            $a = 1;
            $total = "";

            $query = "SELECT * FROM members WHERE statut = 0";
            $rslt = $this->getConnected()->prepare($query);
            $rslt->execute();

            $rows = $rslt->fetchAll();

            if($rows > 0) 
            {
                foreach ($rows as $output) {
                    $total .= "<tr><td>" .$a++. "</td><td>" .$output['nom']." " .$output['prenom'].  "</td><td><a href='details.php?id=" .$output['id']."' class='btn btn-block btn-success'><i class='bi bi-eye-open'></i> Consulter</a></td><td> <form action='profiles.php' style='border: none;' method='post'>" ."<input type='hidden' name='delete' value=" .$output["id"] . "> <button class='btn btn-danger btn-block' type='submit'><i class='bi bi-remove'></i> Supprimer  </button>" ."</form> </td></tr> ";
                }
            }
            echo $total;
        }

        // DELETE MEMBER
        public function deleteMember() {
            $sql = "DELETE FROM members WHERE id =" .$_POST['delete'];
            $stmt = $this->getConnected()->prepare($sql);
            $stmt->execute();

            if($stmt) {
                $this->message = "Profil du membre supprimé !";
            }
            else {
                $this->error = "Suppression de profil avortée !";
            }
        }

        // VIEW DETAILS
        public function detailsMembre() {
            $id = $_GET['id'];

            $sql = "SELECT * FROM members WHERE id = $id";
            $stmt = $this->getConnected()->prepare($sql);
            $stmt->execute();
            $data = $stmt->fetch();

            $this->myNom = $data['nom'];
            $this->myPrenom = $data['prenom'];
            $this->myEmail = $data['email'];
            $this->myStatut = $data['statut'];

            if($data['statut'] == 0) {
                $this->myStatut = "Inactif";
            }
            else {
                $this->myStatut = "Activé";
            }
        }

        // ACTIVATE MEMBER
        public function activateMember()
        {
            $id = $_GET['id'];

            $query = "UPDATE members SET statut = 1 WHERE id = ?";
            $stmt = $this->getConnected()->prepare($query);
            $stmt->execute(array($id));

            if($stmt) {
                $this->message = "Membre activé !";
            }
            else {
                $this->error = "Activation echouée... Réessayez plus tard !";
            }
        }


    }