import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    initialize() {
        console.log('dummy.initialize()')
    }

    connect() {
        console.log('dummy.connect()')
    }

    disconnect() {
        console.log('dummy.disconnect()')
    }
}
