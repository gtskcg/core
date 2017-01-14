<?php
mb_internal_encoding("UTF-8");
mb_http_output('UTF-8');
include_once 'conect.php';
class adm {
    private $id;
    private $login;
    private $name;
    private $email;
    private $password;
    private $con;
    
    function __construct($id = "", $login = "", $name = "", $email = "", $password = "") {
        $this->id = $id;
        $this->login = $login;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->con = new Conectar();
    }
    
    function getId() {
        return $this->id;
    }

    function getLogin() {
        return $this->login;
    }

    function getName() {
        return $this->name;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }
    
    public function create_table() {
        
    }

    public function salvar(){
        try{
        $sql = "INSERT INTO MyGuests (firstname, lastname, email)
        VALUES ('John', 'Doe', 'john@example.com')";
        $this->con->exec($sql);
    
        } catch (PDOException $e) {
            echo  $e->getMessage();
        }    
    }
    
    

}

$adm = new adm();
$adm->salvar();