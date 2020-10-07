<?php

class Usuario {

    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;

    /* Gerando get & setter (Polimorfismo) */

    public function getIdusuario() {
        return $this->idusuario;
    }

    public function setIdusuario($value) {
        $this->idusuario = $value;
    }
    
    public function getDeslogin() {
        return $this->deslogin;
    }

    public function setDeslogin($value) {
        $this->deslogin = $value;
    }

    public function getDessenha() {
        return $this->dessenha;
    }

    public function setDessenha($value) {
        $this->dessenha = $value;
    }

    public function getDtcadastro() {
        return $this->dtcadastro;
    }

    public function setDtcadastro($value) {
        $this->dtcadastro = $value;
    }

    public function loadById($id) {

        $sql = new Sql();

        $result = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
            ":ID"=>$id 
        ));

        if (count($result) > 0) {

            //linha
            $row = $result[0];

            //setter para alimentar os dados
            $this->setIdusuario($row['idusuario']);
            $this->setDeslogin($row['deslogin']);
            $this->setDessenha($row['dessenha']);
            $this->setDtcadastro(new DateTime($row['dtcadastro']));

        }

    }

    // transforma dados em string
    // usa o método mágio __toString
    public function __toString() {

        return json_encode(array(
            "idusuario"=>$this->getIdusuario(),
            "deslogin"=>$this->getDeslogin(),
            "dessenha"=>$this->getDessenha(),
            "dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
        ));
        
    }

}


?>
