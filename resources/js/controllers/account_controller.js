import { Controller } from '@hotwired/stimulus'

export default class extends Controller {
    initialize() {
        console.log('account.initialize()')
    }

    connect() {
        console.log('account.connect()')
    }

    disconnect() {
        console.log('account.disconnect()')
    }
}
