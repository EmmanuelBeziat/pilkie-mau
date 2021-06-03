class Menu {
	constructor (elements) {
		this.container = document.querySelector(elements.container)
		this.button = document.querySelector(elements.button)
		this.menu = document.querySelector(elements.menu)

		if (!this.button || !this.menu) return

		this.onButtonClick(this.button)
	}

	onButtonClick (button) {
		button.addEventListener('click', event => {
			event.preventDefault()
			event.target.classList.toggle('opened')
			this.container.classList.toggle('menu-mobile-opened')
		})
	}
}

document.addEventListener('DOMContentLoaded', () => {
	new Menu({
		button: '#primary-mobile-menu',
		menu: '.header-navigation',
		container: 'body'
	})
})
