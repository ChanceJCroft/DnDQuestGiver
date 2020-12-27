<?php
    class Quest{
        private $db;

        public function __construct(){
            $this->db = new Database;
        }


        //get all quests
        public function getAllQuests(){
            $this->db->query("SELECT quests.*, categories.name AS cname
                            FROM quests
                            INNER JOIN categories
                            ON quests.category_id = categories.id
                            ORDER BY post_date DESC
                             ");
                //assign result set
                $results = $this->db->resultSet();

                return $results;
        }

        //get categories
        public function getCategories(){
            $this->db->query("SELECT * FROM categories");
                //assign result set
                $results = $this->db->resultSet();

                return $results;
        }

        //get quests by category
        public function getByCategory($category){
            $this->db->query("SELECT quests.*, categories.name AS cname
                FROM quests
                 INNER JOIN categories
                 ON quests.category_id = categories.id
                 WHERE quests.category_id = $category
                 ORDER BY post_date DESC
                 ");
                //assign result set
                $results = $this->db->resultSet();

            return $results;
        }

        public function getCategory($category_id){
            $this->db->query("SELECT * FROM categories WHERE id = :category_id");
            $this->db->bind(':category_id', $category_id);

            //Assign row
            $row = $this->db->single();

            return $row;
        }


        //Get single quest
        public function getQuest($id){
            $this->db->query("SELECT * FROM quests WHERE id = :id");
            $this->db->bind(':id', $id);

            //Assign row
            $row = $this->db->single();

            return $row;
        }


    }



?>