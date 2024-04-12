function openModal(url) {
    var modal = document.getElementById("myModal");
    var iframe = document.getElementById("iframeContent");

    // Define a URL do iframe
    iframe.src = url;

    // Exibe o modal
    modal.style.display = "block";
}

function reloadPage(){
    parent.location.reload();
}
function closeModal() {
    var modal = document.getElementById("myModal");
    var iframe = document.getElementById("iframeContent");

    // Limpa a URL do iframe ao fechar o modal
    iframe.src = "";

    // Fecha o modal
    modal.style.display = "none";
}
// Fecha o modal se o usuário clicar fora da área do modal
window.onclick = function(event) {
    var modal = document.getElementById("myModal");
    if (event.target == modal) {
        closeModal();
        reloadPage();
    }
};
