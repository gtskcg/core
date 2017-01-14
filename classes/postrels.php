<?php

include_once 'conect.php';

    class Postagem {
        private $id = "";
        private $titulo = "";
        private $texto = "";
        private $status = "";
        private $data = "";
        private $autor = "";
        private $con;
        
        function __construct($id, $titulo, $texto, $status, $data, $autor) {
            $this->id = $id;
            $this->titulo = $titulo;
            $this->texto = $texto;
            $this->status = $status;
            $this->data = $data;
            $this->autor = $autor;
            $this->con = new Conectar;
        }
        
        function getId() {
            return $this->id;
        }

        function getTitulo() {
            return $this->titulo;
        }

        function getTexto() {
            return $this->texto;
        }

        function getStatus() {
            return $this->status;
        }

        function getData() {
            return $this->data;
        }

        function getAutor() {
            return $this->autor;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setTitulo($titulo) {
            $this->titulo = $titulo;
        }

        function setTexto($texto) {
            $this->texto = $texto;
        }

        function setStatus($status) {
            $this->status = $status;
        }

        function setData($data) {
            $this->data = $data;
        }

        function setAutor($autor) {
            $this->autor = $autor;
        }
    }
    
    class Categoria {
        private $id;
        private $name;
        private $con;
        
        function __construct($id = "", $name = "") {
            $this->id = $id;
            $this->name = $name;
            $this->con = new Conectar;
        }
        
        function salvar($cat_name){
            $sql = "INSERT INTO categoria (name) VALUES ('$cat_name')";
            $prep = $this->con->prepare($sql);
            if($prep->execute()){
                return "Categoria criada";
            }
        }

    }
   