<?php

    // require_once './includes/autoloader.inc.php';
    require_once './classes/Database.class.php';

    class Users extends Database
    {
        private $db;
        private $stmt;

        public $error = "";
        public $message = "";

        public function __construct()
        {
            $this->db = new Database();

            $this->db->getConnected();
        }
    }

    $show = new Users();