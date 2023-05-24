const prod = document.querySelector('.prod');
const formProd = document.querySelector('.formProd');
const mov = document.querySelector('.mov');
const formMov = document.querySelector('.formMov');
const list = document.querySelector('.list');
const est = document.querySelector('.est');
const listMenu = document.querySelector('.list-menu');
const estMenu = document.querySelector('.est-menu');

prod.addEventListener('click', () => {
	if (formProd.classList.contains('enable')) {
		formProd.classList.remove('enable');
	}
	else if (formMov.classList.contains('enable')) {
		formMov.classList.remove('enable');
		formProd.classList.add('enable');
	} else {
		formProd.classList.add('enable');
		console.log('OK')
	}
});

mov.addEventListener('click', () => {
	if (formMov.classList.contains('enable')) {
		formMov.classList.remove('enable');
	}
	else if (formProd.classList.contains('enable')) {
		formProd.classList.remove('enable');
		formMov.classList.add('enable');
	} else {
		formMov.classList.add('enable');
		console.log('OK')
	}
});

list.addEventListener('click', () => {
	listMenu.classList.toggle('active');
})

est.addEventListener('click', () => {
	estMenu.classList.toggle('active');
})