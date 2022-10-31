import { Controller } from '@hotwired/stimulus';
import { ScrollSpy } from "bootstrap";

export default class extends Controller {
    //static targets = [ 'navbar' ]

    initialize() {
        if (document.documentElement.hasAttribute("data-turbo-preview")) return

        //console.log('scrollspy.initialize()', this.navbarTargets)

        this.scrollspyNavbar = this.element.dataset.bsTarget

        console.log('scrollspy.initialize()')

        // document.addEventListener('turbo:click', function (event) {
        //     event.preventDefault()
        // })
    }

    connect() {
        if (! this.scrollspyNavbar) return

        console.log('scrollspy.connect()')

        this.scrollspy = new ScrollSpy(this.element,  {
            //target: this.navbarTargets,
            target: this.scrollspyNavbar,
            offset: parseInt(this.element.dataset.bsOffset),
        })

        // this.element.addEventListener('activate.bs.scrollspy', function (event) {
        //     console.log('scrollspy activated...', event)
        //     event.preventDefault()
        //     // do something...
        // })
    }

    disconnect() {
        if (! this.scrollspy) return

        console.log('scrollspy.disconnect()')

        //ScrollSpy.getOrCreateInstance(this.element).dispose()
        this.scrollspy.dispose()

        //Array.from(document.querySelector(this.scrollspyNavbar).querySelectorAll('a.active')).forEach(el => el.classList.remove('active'))
    }
}
