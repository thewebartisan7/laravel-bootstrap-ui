import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    initialize() {
        console.log('modal.initialize()')
    }

    connect() {
        console.log('modal.connect()')
    }

    disconnect() {
        console.log('modal.disconnect()')
    }
}
