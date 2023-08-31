
var tabMeu = document.querySelectorAll('.icon1');
var tables = document.querySelectorAll('.conten');

function hidden(e) {
    removeTekan();
    sembunyi();
    this.classList.add('tekan');
    var tableItem = document.querySelector(`#${this.id}-conten`);
    tableItem.classList.add('tampil');
}

function removeTekan() {
    tabMeu.forEach(item => item.classList.remove('tekan'));
}

function sembunyi() {
    tables.forEach(item => item.classList.remove('tampil'));    
}

tabMeu.forEach(item => item.addEventListener('click', hidden));
