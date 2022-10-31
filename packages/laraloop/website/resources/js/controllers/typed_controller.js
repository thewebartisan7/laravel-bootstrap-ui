import { Controller } from '@hotwired/stimulus';
import Typed from 'typed.js';

export default class extends Controller {
  initialize() {
  }

  connect() {
    if (document.documentElement.hasAttribute("data-turbo-preview")) return

    console.log('typed.connect()')

    this.typed = new Typed(this.element.querySelector('.js-typed'), {
      //stringsElement: '#typed-strings',
      strings: [
        'laravel new website',
        'cd website',
        'composer require laraloop/ui',
        'php artisan ui:install',
        'php artisan serve',
        'Try it out!'
      ],
      //startDelay: 100,
      typeSpeed: 50,
      backSpeed: 20,
    });
  }

  disconnect() {
    if (! this.typed) return

    console.log('typed.disconnect()')

    this.typed.destroy();
  }
}
