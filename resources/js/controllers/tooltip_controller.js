import { Controller } from '@hotwired/stimulus'
import { Tooltip } from 'bootstrap'

export default class extends Controller {

    connect() {
        if (document.documentElement.hasAttribute("data-turbo-preview")) return

        console.log('tooltip.connect()')

        this.tooltip = new Tooltip(this.element, {
            boundary: 'window'
        })
    }

    disconnect() {
        if (!this.tooltip) return

        console.log('tooltip.disconnect()')

        this.tooltip.dispose()
    }
}
