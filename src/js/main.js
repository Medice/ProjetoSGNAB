
init = function(){

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var list = JSON.parse(this.responseText);
        if(list != null){
          listarConsulentes(list);
        }
      }
    };
    xhttp.open("GET", "controller/ConsulenteController.php?acao=listar", true);
    xhttp.send();
};


listarConsulentes = function(list){

  var table = document.getElementById('tbody');

  for (var i=0; i < list.length; i++) {
      
      var s = list[i];
      var tr = document.createElement('tr');
      
      var td = document.createElement('td');
      td.innerHTML = s.idConsulente;
      tr.appendChild(td);
  
      td = document.createElement('td');
      td.innerHTML = s.CasoNAB_idCasoNAB;
      tr.appendChild(td);

      td = document.createElement('td');
      td.innerHTML = s.NomeConsulente;
      tr.appendChild(td);

      td = document.createElement('td');
      td.innerHTML = s.TipoConsulente;
      tr.appendChild(td);

      td = document.createElement('td');
      td.innerHTML = s.Email;
      tr.appendChild(td);

      td = document.createElement('td');
      td.innerHTML = s.Endereco;
      tr.appendChild(td);

      td = document.createElement('td');
      td.innerHTML = s.Cep;
      tr.appendChild(td);

      td = document.createElement('td');
      td.innerHTML = s.TelefoneFix;
      tr.appendChild(td);

      td = document.createElement('td');
      td.innerHTML = s.TelefoneCelular;
      tr.appendChild(td);

      td = document.createElement('td');
      var string = "<a href='editar.php?id="+s.idConsulente+"'>Editar</a> <br>";
      string += "<a href='controller/ConsulenteController.php?acao=deletar&id="+s.idConsulente+"'>Deletar</a>";
      td.innerHTML = string;
      tr.appendChild(td);
  
      table.appendChild(tr);
  }

};

init();