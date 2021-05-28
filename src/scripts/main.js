class Menu {
	constructor (elements) {
		this.button = document.querySelector(elements.button)
		this.menu = document.querySelector(elements.menu)

		if (!this.button || !this.menu) return

		this.onButtonClick(this.button)
	}

	onButtonClick (button) {
		button.addEventListener('click', event => {
			event.preventDefault()
			event.target.classList.toggle('opened')
		})
	}
}

document.addEventListener('DOMContentLoaded', () => {
	new Menu({
		button: '#primary-mobile-menu',
		menu: '.header-navigation'
	})
})
