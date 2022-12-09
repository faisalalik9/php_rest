<?php

class Post{
    private $conn;
    private $table = 'clients_data';

    public $id;
    public $name;
    public $contact;
    public $email;
    public $program;

    public function __construct($db){
        $this->conn = $db;
    }

    public function read(){
        $sqlQuery = "SELECT id, name, contact, email, program FROM " . $this->db_table . "";
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->execute();
        return $stmt;
    }

}



?>