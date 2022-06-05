function validar(a) {

    let CPF = document.getElementById("cpf").value;
    let nome = document.getElementById("nome").value;
    let tel1 = document.getElementById("tel").value;
    let id_apt = document.getElementById("Id_Apt").value;
    let Num_andar = document.getElementById("Num_andar").value;
    let Num_apt = document.getElementById("Num_apt").value;
    let idbloco = document.getElementById("Id_bloco").value;
    let cod_contrato = document.getElementById("prop").value;

    switch (a) {
        case 1: // validar usuario
            if (CPF == "" && CPF.length < 11) {
                alert('Preencha o campo cpf.');
                formuser.nome.focus();
                return false;
            }

            if (nome == "") {
                alert('Preencha o campo NOME.');
                formuser.email.focus();
                return false;
            }

            if (tel1 == "") {
                alert('Preencha o campo senha com minimo 8 caracteres');
                formuser.senha.focus();
                return false;
            }
            break;
        case 2: // valida apt

            if (id_apt = "") {
                alert('Preencha o campo ID APT.');
                formuser.nome.focus();
                return false;
            }
            if (Num_andar = "") {
                alert('Preencha o campo Número do andar.');
                formuser.nome.focus();
                return false;
            }
            if (Num_apt = "") {
                alert('Preencha o campo Número do apartamento.');
                formuser.nome.focus();
                return false;
            }
            if (idbloco = "") {
                alert('Preencha o campo ID do Bloco.');
                formuser.nome.focus();
                return false;
            }
            break;
        case 3:
            if (cod_contrato = "") {
                alert('Preencha o campo código do contrato.');
                formuser.nome.focus();
                return false;

            }
            break;
    }

}