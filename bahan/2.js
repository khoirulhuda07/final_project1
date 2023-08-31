var tabItems = document.querySelectorAll('.btn-menu');
var tables = document.querySelectorAll('.conten');
var a = document.getElementById('btn');
var b = document.getElementById('user');

function hidden(e) {
    removeTekan();
    sembunyi();
    this.classList.add('tekan');
    var tableItem = document.querySelector(`#${this.id}-conten`);
    tableItem.classList.add('tampil');
}

function removeTekan() {
    tabItems.forEach(item => item.classList.remove('tekan'));
}

function sembunyi() {
    tables.forEach(item => item.classList.remove('tampil'));    
}

tabItems.forEach(item => item.addEventListener('click', hidden));




b.addEventListener('click', () => {
	if (a.classList.contains('hidden')) {
	a.classList.remove('hidden');
	}else {
		a.classList.add('hidden');
	}
})






