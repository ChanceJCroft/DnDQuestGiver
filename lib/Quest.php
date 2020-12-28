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

        //get category name from quest
        public function getCategoryFromQuest($quest){
            $this->db->query("SELECT quests.*, categories.name AS cname
                FROM quests
                 INNER JOIN categories
                 ON quests.category_id = categories.id
                 WHERE quests.id = $quest
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


        //Create quest
        public function create($data){
            //Insert query
            $this->db->query("INSERT INTO quests (quest_name, quest_giver, reward, quest_level, category_id, description)
            VALUES (:quest_name, :quest_giver, :reward, :quest_level, :category_id, :description)");

            //Bind data
            $this->db->bind(':quest_name', $data['quest_name']);
            $this->db->bind(':quest_giver', $data['quest_giver']);
            $this->db->bind(':reward', $data['reward']);
            $this->db->bind(':quest_level', $data['quest_level']);
            $this->db->bind(':category_id', $data['category_id']);
            $this->db->bind(':description', $data['description']);

            //Execute
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }

        //Delete quest
        public function delete($id){
            //Insert query
            $this->db->query("DELETE FROM quests WHERE id = $id");

            //Execute
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }


        //Update quest
        public function update($id, $data){
            //Insert query
            $this->db->query("UPDATE quests SET
                    category_id = :category_id,
                    quest_name = :quest_name,
                    quest_giver = :quest_giver,
                    reward = :reward,
                    quest_level = :quest_level,
                    description = :description
                    WHERE id = $id
                    ");

            //Bind data
            $this->db->bind(':quest_name', $data['quest_name']);
            $this->db->bind(':quest_giver', $data['quest_giver']);
            $this->db->bind(':reward', $data['reward']);
            $this->db->bind(':quest_level', $data['quest_level']);
            $this->db->bind(':category_id', $data['category_id']);
            $this->db->bind(':description', $data['description']);

            //Execute
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }


    }



?>