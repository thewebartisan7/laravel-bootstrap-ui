import { Controller } from "@hotwired/stimulus"

// Usage:
// <div data-controller="content-loader" data-content-loader-url-value="/messages.html" data-content-loader-reload-interval-value="5000"></div>
// @see https://stimulus.hotwired.dev/handbook/working-with-external-resources
export default class extends Controller {
    static values = { url: String, reloadInterval: Number }

    connect() {
        this.load()

        if (this.hasReloadIntervalValue) {
            this.reload()
        }
    }

    disconnect() {
        this.stopReloading()
    }

    load() {
        fetch(this.urlValue)
            .then(response => response.text())
            .then(html => this.element.innerHTML = html)
    }

    reload() {
        this.reloadTimer = setInterval(() => {
            this.load()
        }, this.refreshIntervalValue)
    }

    stopReloading() {
        if (this.reloadTimer) {
            clearInterval(this.reloadTimer)
        }
    }
}
