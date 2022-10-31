import { Controller } from '@hotwired/stimulus'

export default class extends Controller {
    initialize() {
        console.log('auth.initialize()')
    }

    connect() {
        console.log('auth.connect()')
    }

    disconnect() {
        console.log('auth.disconnect()')
    }
}
