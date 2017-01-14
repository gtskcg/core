<?php
mb_internal_encoding("UTF-8");
mb_http_output('UTF-8');
include_once 'conect.php';
class adm {
    private $id;
    private $name;
    private $surname;
    private $email;
    private $password;
    private $bios;
    private $con;
    
    function __construct($id = "", $surname = "", $name = "", $email = "", $password = "") {
        $this->id = $id;
        $this->surname = $surname;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->con = new Conectar();
    }
    
    function getId() {
        return $this->id;
    }

    function getSurname() {
        return $this->surname;
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

    function setSurname($surname) {
        $this->surname = $surname;
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
        $senha = sha1('gelatina6972');
        $sql = "INSERT INTO adm (name, surname, email, password)
        VALUES ('Gabriel', 'Teixeira', 'gabrielt.s@live.com', '$senha')";
        $this->con->exec($sql);
    
        } catch (PDOException $e) {
            echo  $e->getMessage();
        }    
    }
    
    public function logar() {
        $sql = "SELECT * FROM adm WHERE email = $email AND password = sha1($senha)";
        $prep = $this->con->prepare($sql);
        $prep->execute();
        while ($line > $prep->fetch(PDO::FETCH_NUM)) {
            echo $line[0];
        }
    }
}