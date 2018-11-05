
byId = function(id){

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var consulente = JSON.parse(this.responseText);
        setConsulente(consulente);
      }
    };
    xhttp.open("GET", "controller/ConsulenteController.php?acao=byId&id="+id, true);
    xhttp.send();
};

setConsulente = function(consulente){

    var array = ["idConsulente","CasoNAB_idCasoNAB","NomeConsulente","TipoConsulente",
    "Email","Endereco","Cep","TelefoneFix","TelefoneCelular"];

    for (i = 0; i < array.length; i++) {
        document.getElementsByName(array[i])[0].value = consulente[array[i]];
    }
};