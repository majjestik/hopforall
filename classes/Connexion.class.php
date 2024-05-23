<?php


    class Connexion
    {
        private $server = "localhost";
        private $user = "root";
        private $pwd = "";
        private $dbname = "hopforall";
        private $conn;
        private $stmt;
        public $error = "";
        public $message = "";

        public function __construct()
        {

            try {
                $this->conn = new PDO("mysql:host=$this->server;dbname=$this->dbname;", $this->user, $this->pwd);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        
                //  echo "You are connected !";
                 return $this->conn;
            } 
            catch (PDOException $e) {
                echo "Connection failed!". $e->getMessage();
                die();
            }
        }



    }

    // $boot = new Connexion;