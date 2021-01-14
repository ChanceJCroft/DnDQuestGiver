<?php
    class User{
        private $db;

        public function __construct(){
            $this->db = new Database;
        }


        //get all users (if ever needed)
        public function getAllUsers(){
            $this->db->query("SELECT * FROM users");
                //assign result set
                $results = $this->db->resultSet();

                return $results;
        }



        //Create user
        public function create($data){
            //Insert query
            $this->db->query("INSERT INTO users (username, pword)
            VALUES (:username, :pword)");

            //Bind data
            $this->db->bind(':username', $data['username']);
            $this->db->bind(':pword', $data['pword']);

            //Execute
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }

        //Delete user (if ever needed)
        public function delete($username){
            //Insert query
            $this->db->query("DELETE FROM users WHERE username = $username");

            //Execute
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }


    }



?>