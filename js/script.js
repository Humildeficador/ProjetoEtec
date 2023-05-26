const buttons = document.querySelectorAll('.buttons')
const forms = document.querySelectorAll('.forms')

buttons.forEach(button => {
	button.addEventListener('click', () => {
		const formId = button.dataset.form
		const formToShow = document.getElementById(formId)

		forms.forEach(form => {
			if (form === formToShow) {
				form.classList.toggle('enable')
				
			} else {
				form.classList.remove('enable')
			}
		})
	})
})

const subsMenus = document.querySelectorAll('.subs-menus')
const listsMenus = document.querySelectorAll('.lists-menus')

subsMenus.forEach(subMenu => {
	subMenu.addEventListener('click', () => {
		const listMenuId = subMenu.dataset.list
		const listToShow = document.getElementById(listMenuId)

		listsMenus.forEach(listMenu => {
			if (listMenu === listToShow) {
				listMenu.classList.toggle('active')
			}
		})
	})
})