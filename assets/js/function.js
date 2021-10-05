var btnGeneratePass = document.getElementById('btnNewPass');
var btnRestaurarPass = document.getElementById('restaurarPass');
var blockPass = document.getElementById('passBlock');
var modalPass = UIkit.modal('#modalPass');

btnGeneratePass.addEventListener('click', () => {
    showElement(blockPass);
    hideElement(btnGeneratePass);
});

document.getElementById('aceptarModal').addEventListener('click', ()=> {
    showElement(btnGeneratePass);
    hideElement(blockPass);
    modalPass.hide();
});

function showElement(element) {
    element.style.display = 'block';
}

function hideElement(element) {
    element.style.display = 'none';
}