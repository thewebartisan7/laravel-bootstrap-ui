import { Controller } from '@hotwired/stimulus'
import axios from 'axios'

export default class extends Controller {

    initialize() {
        console.log('app.initialize()')

        // document.addEventListener('turbo:load', () => {
        //     console.log('turbo:load in app.initialize()')
        // })
        //
        // document.addEventListener('turbo:visit', () => {
        //     console.log('turbo:visit in app.initialize()')
        // })

        this.axios()
        this.turbo()
        this.csrf()
    }

    axios() {
        console.log('app.axios()')

        window.axios = axios
    }

    /**
     * Initialization & configuration Turbo
     */
    turbo() {
        console.log('app.turbo()')

        document.addEventListener('turbo:visit', () => {
            console.log('turbo:visit fired in app controller')

            this.csrf()
        })
    }

    /**
     * We'll load the axios HTTP library which allows us to easily issue requests
     * to our Laravel back-end. This library automatically handles sending the
     * CSRF token as a header based on the value of the "XSRF" token cookie.
     */
    csrf() {
        const token = document.head.querySelector('meta[name="csrf_token"]')

        if (!token) {
            console.error('meta name csrf_token not found.')
            return
        }

        console.log('app.csrf()')

        /**
         * Next we will register the CSRF Token as a common header with Axios so that
         * all outgoing HTTP requests automatically have it attached. This is just
         * a simple convenience so we don't have to attach every token manually.
         */
        window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content
        window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'

        document.addEventListener('turbo:before-fetch-request', (event) => {
            console.log('turbo:before-fetch-request fired in app controller')

            event.detail.fetchOptions.headers["X-CSRF-TOKEN"] = token.content
        })
    }
}
