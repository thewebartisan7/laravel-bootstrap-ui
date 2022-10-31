import { Controller } from '@hotwired/stimulus';
import { Popover } from 'bootstrap';

export default class extends Controller {
    connect() {
        if (document.documentElement.hasAttribute("data-turbo-preview")) return

        console.log('popover.connect()')

        this.popover = new Popover(this.element, {

        })
    }

    /**
     * @param event
     */
    toggle(event) {
        event.preventDefault()
        this.popover.toggle()
    }

    disconnect() {
        if (!this.popover) return

        console.log('popover.disconnect()')

        this.popover.dispose()
    }
}
