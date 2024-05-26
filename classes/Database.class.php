<?php


    class Database
    {
        private $server = "localhost";
        private $user = "root";
        private $pwd = "";
        private $dbname = "hopforall";
        private $conn;
        

        public function getConnected() 
        {
            try {
                $this->conn = new PDO("mysql:host=$this->server;dbname=$this->dbname;", $this->user, $this->pwd);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

                return $this->conn;
            }
            catch (PDOException $e) {
                echo "connection failed !" . $e->getMessage();
                die();
            }
        }


    }
