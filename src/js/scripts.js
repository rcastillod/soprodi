// Mobile toggle product list
const toggle = document.querySelector('.products__toggle')
const productList = document.querySelector('.sidebar__products ul')

if (toggle) {
	toggle.addEventListener('click', () => {
		toggle.classList.toggle('active')
		productList.classList.toggle('show')
	})
}

const goBack = () => {
	window.history.back();
}
