<?php

class Conectar extends PDO{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "primeiro";
    
    function __construct() {   
        parent::__construct("mysql:host=$this->host;dbname=$this->db", "$this->user", "$this->password");
        $this->create_db('primeiro');    
    }
    
    function connect() {
        try {
        $conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->password);
        echo "Connected successfully"; 
        }
        catch(PDOException $e)
        {
            $this->create_db();
        }
    }
    
    function create_db($db) {
            $dbh = new PDO("mysql:host=$this->host", $this->user, '');
            $dbh->exec("CREATE DATABASE $db;");   
    }
        
    public function salvar(){
        try{
   $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')";
    // use exec() because no results are returned
    $prep = $this->prepare($sql);
    $prep->execute();
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }   }
    
    
}


