<?php
    
    header('Content-Type: text/html; charset=utf-8');
    include_once "../model/Consulente.php";
    include_once "../dao/ConsulenteDao.php";
    $get = $_GET["acao"];

if($get == "listar"){
    $consulenteDao = new ConsulenteDao();
    echo json_encode($consulenteDao->listar());
}
else if($get == "deletar"){

    $id = $_GET["id"];
    $consulenteDao = new ConsulenteDao();
    $consulenteDao->deletar($id);
    header("Location:../index.php");
}
else if($get == "salvar"){

    $consulente = new Consulente();
    $consulente->casoNab = $_POST["casoNab"];
    $consulente->nomeConsulente = $_POST["nome"];
    $consulente->tipoConsulente = $_POST["tipo"];
    $consulente->email = $_POST["email"];
    $consulente->endereco = $_POST["endereco"];
    $consulente->cep = $_POST["cep"];
    $consulente->telefoneFixo = $_POST["fixo"];
    $consulente->telefoneCelular = $_POST["celular"];

    $consulenteDao = new ConsulenteDao();
    $consulenteDao->salvar($consulente);
    header("Location:../index.php");
}
else if($get == "byId"){

    $id = $_GET["id"];
    $consulenteDao = new ConsulenteDao();
    echo json_encode($consulenteDao->byId($id));
}
else if($get == "editar"){

    $consulente = new Consulente();
    $consulente->id = $_POST["idConsulente"];
    $consulente->casoNab = $_POST["CasoNAB_idCasoNAB"];
    $consulente->nomeConsulente = $_POST["NomeConsulente"];
    $consulente->tipoConsulente = $_POST["TipoConsulente"];
    $consulente->email = $_POST["Email"];
    $consulente->endereco = $_POST["Endereco"];
    $consulente->cep = $_POST["Cep"];
    $consulente->telefoneFixo = $_POST["TelefoneFix"];
    $consulente->telefoneCelular = $_POST["TelefoneCelular"];

    $consulenteDao = new ConsulenteDao();
    $consulenteDao->editar($consulente);
    header("Location:../index.php");
}
?>