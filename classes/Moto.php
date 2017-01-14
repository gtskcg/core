<?php

/*
 * create table moto(
  id int auto_increment primary key,
  placa varchar(8),
  modelo varchar(100),
  cc int(4),
  renavam varchar(20),
  foto varchar(150),
  estoque int(1),
  valor double(10,2),
  id_marca int,
  foreign key (id_marca) references marca(id)
  );
 */

include_once 'Conectar.php';
include_once 'Controles.php';

class Moto {

    //put your code here
    private $id;
    private $placa;
    private $modelo;
    private $cc;
    private $renavam;
    private $foto;
    private $tpfoto;
    private $estoque;
    private $valor;
    private $id_marca; //chave estrangeira
    private $con;
    private $ct;

    public function __construct($id, $placa, $modelo, $cc, $renavam, $foto, $tpfoto, $estoque, $valor, $id_marca) {
        $this->id = $id;
        $this->placa = $placa;
        $this->modelo = $modelo;
        $this->cc = $cc;
        $this->renavam = $renavam;
        $this->foto = $foto;
        $this->tpfoto = $tpfoto;
        $this->estoque = $estoque;
        $this->valor = $valor;
        $this->id_marca = $id_marca;
        $this->con = new Conectar();
        $this->ct = new Controles();
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getPlaca() {
        return $this->placa;
    }

    public function setPlaca($placa) {
        $this->placa = $placa;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function getCc() {
        return $this->cc;
    }

    public function setCc($cc) {
        $this->cc = $cc;
    }

    public function getRenavam() {
        return $this->renavam;
    }

    public function setRenavam($renavam) {
        $this->renavam = $renavam;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function setFoto($foto) {
        $this->foto = $foto;
    }

    public function getTpfoto() {
        return $this->tpfoto;
    }

    public function setTpfoto($tpfoto) {
        $this->tpfoto = $tpfoto;
    }

    public function getEstoque() {
        return $this->estoque;
    }

    public function setEstoque($estoque) {
        $this->estoque = $estoque;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function getId_marca() {
        return $this->id_marca;
    }

    public function setId_marca($id_marca) {
        $this->id_marca = $id_marca;
    }

    public function salvar() {
        try {
            $this->ct->enviarArquivo($this->getTpfoto(), 
                    "../imagem_moto/" . $this->getFoto());

            $sql = "INSERT INTO moto VALUES (null,?,?,?,?,?,?,?,?)";

            $prepsql = $this->con->prepare($sql);

            $prepsql->bindParam(1, $this->getPlaca(), PDO::PARAM_STR);
            $prepsql->bindParam(2, $this->getModelo(), PDO::PARAM_STR);
            $prepsql->bindParam(3, $this->getCc(), PDO::PARAM_INT);
            $prepsql->bindParam(4, $this->getRenavam(), PDO::PARAM_STR);
            $prepsql->bindParam(5, $this->getFoto(), PDO::PARAM_STR);
            $prepsql->bindParam(6, $this->getEstoque(), PDO::PARAM_INT);
            $prepsql->bindParam(7, $this->getValor(), PDO::PARAM_STR);
            $prepsql->bindParam(8, $this->getId_marca(), PDO::PARAM_INT);

            $prepsql->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

//fim salvar

    public function consultar($tipo) {
        try {
            $sql="SELECT m.id, m.placa, m.modelo, 
                m.foto, ma.marca, ma.origem
                FROM moto as m, marca as ma 
                WHERE m.id_marca=ma.id 
                ORDER BY m.modelo";
            
            $res = $this->con->query($sql);
            
            echo '<table border="1">
                <tr>
                    <td>ID</td>
                    <td>Placa</td>
                    <td>Modelo</td>
                    <td>Foto</td>
                    <td>Marca</td>
                    <td>Origem</td>';
               
                if($tipo == "adm"){
                    echo '<td>[excluir]</td>
                        <td>[alterar]</td>
                        <td>[alterar imagem]</td>';
                }    
                echo '</tr>';
            
            while ($linhas = $res->fetch(PDO::FETCH_NUM)){
                echo "
                <tr>
                    <td>$linhas[0]</td>
                    <td>$linhas[1]</td>
                    <td>$linhas[2]</td>
                    <td><img src=../imagem_moto/$linhas[3] 
                        width=100 /></td>
                    <td>$linhas[4]</td>
                    <td>$linhas[5]</td>";
                
                if ($tipo == 'adm'){
                    echo "<td><a href='?p=moto/excluir&id=$linhas[0]'>[excluir]</a></td>
                          <td><a href='?p=moto/editar&id=$linhas[0]'>[editar]</a></td>
                          <td><a href='?p=moto/editarImagem&id=$linhas[0]'>[editar foto]</a></td>";
                }
                
               echo "</tr>";
            }
            echo '</table>';
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function __destruct() {
        $this->id = "";
        $this->placa = "";
        $this->modelo = "";
        $this->cc = "";
        $this->renavam = "";
        $this->foto = "";
        $this->tpfoto = "";
        $this->estoque = "";
        $this->valor = "";
        $this->id_marca = "";
        $this->con = "";
        $this->ct = "";
    }

}

?>
