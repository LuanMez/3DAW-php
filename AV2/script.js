function carregaCandidatos() {
    let xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            let obj = JSON.parse(this.responseText);
            console.log(obj);
            let x = 0;
            
            for (x = 0; x < obj.length; x++) {
                let linha = obj[x];
                console.log(linha);
                criarLinhaTabela(linha);
            }
        }
    }
    xmlHttp.open("GET", "http://localhost/AV2/Listar.php");
    xmlHttp.send();
}

function criarLinhaTabela(linha) {
    console.log(linha);
    let tabela = document.getElementById("tabela");
    let tr = document.createElement("tr");

    let campos = ['nome', 'cpf', 'identidade', 'email', 'cargo_pretendido', 'sala_prova'];
    for (let i = 0; i < campos.length; i++) {
        let td = document.createElement("td");
        let textnode = document.createTextNode(linha[campos[i]]);
        td.appendChild(textnode);
        tr.appendChild(td);
    }

    tabela.appendChild(tr);
}

function incluirFiscal() {
    let nome = document.getElementById("nome").value;
    let cpf = document.getElementById("cpf").value;
    let salaProva = document.getElementById("salaProva").value;

    //enviar dados pro servidor
    let xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText); //verificar resposta do servidor
        }
    };
    xmlHttp.open("POST", "Incluir.php"); //acessar arquivo php
    xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlHttp.send("nome=" + nome + "&cpf=" + cpf + "&salaProva=" + salaProva);
}

function AlterarSala() {
    let cpf = document.getElementById("cpf").value;
    let novaSala = document.getElementById("novaSala").value;

    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("msg").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("POST", "alterar_sala_prova.php");
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("cpf=" + cpf + "&novaSala=" + novaSala);
}

//document.getElementById("btnAlterar").addEventListener("click", AlterarSala);