@extends('website::layouts.doc', ['title' => 'JavaScript'])

@section('content')
    <p>
        Laraloop UI in terms of styling is <a href="https://getbootstrap.com">Bootstrap</a>, and the browser runs <a href="https://hotwired.dev/">Hotwired</a>
        and <a href="https://stimulus.hotwired.dev/">Stimulus</a>.
        You can connect other libraries to your liking, but we recommend staying in this ecosystem.
    </p>

    <h4>Turbo</h4>

    <p>
        Thanks to Turbo, your application emulates the Single Page Application, loading resources only on the first call and giving the
        impression of re-rendering content in the browser instead of natural standard transitions between pages.
    </p>

    <p>
        Since all resources will be loaded on the first call, classic calls like this will not work:
    </p>

    <x-doc.code language="js">
document.addEventListener("load", () => {
    console.log('Page load');
});
    </x-doc.code>

    <p>
        It will be executed only once and will not be called again during transitions. To avoid this, you need to use Turbo events:
    </p>

    <x-doc.code language="js">
document.addEventListener("turbo:load", () => {
    console.log('Page load');
})
    </x-doc.code>

    <p>
        You can find more details on the website <a href="https://turbo.hotwire.dev">turbo.hotwire.dev</a>.
    </p>

    <h4>Stimulus</h4>

    <p>
        <a href="https://stimulus.hotwired.dev">Stimulus</a> is a JavaScript framework from the Ruby on Rails developers.
        It equips frontend development using new approaches to JavaScript,
        while it does not seek to control all your actions and does not impose a separation of frontend from backend.
    </p>

    <p>
        Let's build a basic example that displays the text entered the field for this:
    </p>

    <p>
        In <code>resources/js</code>, create the following structure:
    </p>

    <x-doc.code language="bash">
resources
├── js
│   ├── controllers
│   │   └── hello_controller.js
│   └── app.js
└── views
    </x-doc.code>

    <p>
        Controller class has the following content:
    </p>

    <x-doc.code language="js">
// hello_controller.js
import { Controller } from '@hotwired/stimulus';

export default class extends Controller {

    initialize() {
        console.log('initialize...')
    }

    connect() {
        console.log('Hello, world!')
    }

    disconnect() {
        console.log('disconnect...')
    }
}
    </x-doc.code>

    <p>
        And the registration of this controller will be:
    </p>

    <x-doc.code language="js">
// app.js
import HelloController from "./controllers/hello_controller"

application.register("hello", HelloController);
    </x-doc.code>

    <p>
        Such a structure will not prevent your application, no matter what kind of front-end to build: Angular/React/Vue, etc.
    </p>

    <p>
        It remains only to describe the assembly in webpack.mix.js:
    </p>

    <x-doc.code language="js">
// webpack.mix.js
let mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    </x-doc.code>

    <p>
        To use your <code>HelloController</code> you can add a <code>data-controller="hello"</code> to any element you want to use this controller.
        Example:
    </p>

    <x-doc.code language="html">
<!-- hello.blade.php -->
<div data-controller="hello">
    This is my element that use HelloController.
</div>
    </x-doc.code>
@endsection
