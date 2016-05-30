/* 
 * Comandos de Java Script para funcionamento do sistema MAP TI
 */


function showHintEdit(str) {
    document.location.href="index.php?opcao=alterausuarios&altera=sim&idaltera="+str;
}
function showNewUser() {
    document.location.href="index.php?opcao=usuarios&novo=sim";
}
function showDeleteUser(id, nome) {
//    document.location.href="index.php?opcao=usuarios&excluir=sim&id="+id;
//    $('#excluirUsuario').modal();
    var idUsuarioSelecionado = document.getElementById("idUsuarioSelecionado");
    var nomeUsuarioSelecionado = document.getElementById("nomeUsuarioSelecionado");
    
    if(nome == ""){
        nome = "Sem nome";
    }
    
    idUsuarioSelecionado.value = id;
    nomeUsuarioSelecionado.innerText = nome;

 
}