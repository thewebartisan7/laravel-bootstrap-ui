import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    initialize() {
        if (document.documentElement.hasAttribute("data-turbo-preview")) return

        console.log('validate.initialize()')

        this.handleValidation = this._checkValidity.bind(this)
    }

    connect() {
        if (! this.handleValidation) return

        console.log('validate.connect()')

        this.element.addEventListener('submit', this.handleValidation, false)
    }

    disconnect() {
        if (! this.handleValidation) return

        console.log('validate.disconnect()')

        this.element.removeEventListener('submit', this.handleValidation, false)
    }

    _checkValidity(event) {
        if (!this.element.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
        }

        this.element.classList.add('was-validated')
    }
}
