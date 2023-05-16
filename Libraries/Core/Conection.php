<?php
    class Conection{

        private $conn;

        /**
         * Conection constructor.
         */
        public function __construct()
        {
             try{
               $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DB);
               $this->conn->connect_error;
            }catch (Exception $e){
                "Connection failed: " . $this->conn->connect_error;
            }
        }
        public function conect(){
            return $this->conn;
        }



    }

