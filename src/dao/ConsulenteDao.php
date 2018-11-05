<?php

include_once 'Database.php';

class ConsulenteDao{

    private $conn;

    public function __construct(){
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    function listar(){

        $sql = "select * from Consulente";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $consulentes_arr = array();
        if($stmt->rowCount() > 0){
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                extract($row);
                $consulente_item = array(
                    "idConsulente" => $idConsulente,
                    "CasoNAB_idCasoNAB" => $CasoNAB_idCasoNAB,
                    "NomeConsulente" => $NomeConsulente,
                    "TipoConsulente" => $TipoConsulente,
                    "Email" => $Email,
                    "Endereco" => $Endereco,
                    "Cep" => $Cep,
                    "TelefoneFix" => $TelefoneFix,
                    "TelefoneCelular" => $TelefoneCelular
                );
                array_push($consulentes_arr, $consulente_item);
            }
        }
        return $consulentes_arr;
    }

    function deletar($id){

        $sql = "delete from Consulente where idConsulente = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }

    function salvar($consulente){

        $sql = "insert into Consulente (
            CasoNAB_idCasoNAB,
            NomeConsulente,
            TipoConsulente,
            Email,
            Endereco,
            Cep,
            TelefoneFix,
            TelefoneCelular) values (?,?,?,?,?,?,?,?)";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(1, $consulente->casoNab);
        $stmt->bindValue(2, $consulente->nomeConsulente);
        $stmt->bindValue(3, $consulente->tipoConsulente);
        $stmt->bindValue(4, $consulente->email);
        $stmt->bindValue(5, $consulente->endereco);
        $stmt->bindValue(6, $consulente->cep);
        $stmt->bindValue(7, $consulente->telefoneFixo);
        $stmt->bindValue(8, $consulente->telefoneCelular);
        return $stmt->execute();
    }

    function byId($id){
        $sql = "select * from Consulente where idConsulente = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            extract($row);
            return array(
                "idConsulente" => $idConsulente,
                "CasoNAB_idCasoNAB" => $CasoNAB_idCasoNAB,
                "NomeConsulente" => $NomeConsulente,
                "TipoConsulente" => $TipoConsulente,
                "Email" => $Email,
                "Endereco" => $Endereco,
                "Cep" => $Cep,
                "TelefoneFix" => $TelefoneFix,
                "TelefoneCelular" => $TelefoneCelular
            );
        }
    }

    function editar($consulente){

        $sql = "update Consulente set 
            CasoNAB_idCasoNAB = ?, 
            NomeConsulente = ?,
            TipoConsulente = ?,
            Email = ?,
            Endereco = ?,
            Cep = ?,
            TelefoneFix = ?,
            TelefoneCelular = ? where idConsulente = ?";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(1, $consulente->casoNab);
        $stmt->bindValue(2, $consulente->nomeConsulente);
        $stmt->bindValue(3, $consulente->tipoConsulente);
        $stmt->bindValue(4, $consulente->email);
        $stmt->bindValue(5, $consulente->endereco);
        $stmt->bindValue(6, $consulente->cep);
        $stmt->bindValue(7, $consulente->telefoneFixo);
        $stmt->bindValue(8, $consulente->telefoneCelular);
        $stmt->bindValue(9, $consulente->id);
        return $stmt->execute();
    }
}