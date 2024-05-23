<?php

    require_once '../models/User.class.php';

    class Users
    {
        public $error = "";
        public $message = "";

        public function __construct()
        {
            $action = new User;
        }
    }