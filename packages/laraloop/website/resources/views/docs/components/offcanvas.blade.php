@extends('website::layouts.doc', ['title' => 'Offcanvas'])

@section('content')
    <h4>How it works?</h4>
    <p>
        Build hidden sidebars into your project for navigation, shopping carts, and more with a few classes and our JavaScript plugin.
        Offcanvas is a sidebar component that can be toggled via JavaScript to appear from the left, right, or bottom edge of the viewport.
    </p>


    <x-doc.demo title="Basic example" description="Click the accordions below to expand/collapse the accordion content.">
        <x-offcanvas.toggle class="btn btn-primary" id="BasicExample">Toggle Basic Offcanvas</x-offcanvas.toggle>
        <x-offcanvas id="BasicExample">
            <x-offcanvas.header title="Basic Offcanvas" />

            <x-offcanvas.body>
                Content for the offcanvas goes here. You can place just about any Bootstrap component or custom elements here.
            </x-offcanvas.body>
        </x-offcanvas>

        <x-slot name="code">
            @verbatim
<x-offcanvas.toggle class="btn btn-primary" id="BasicExample">Toggle Basic Offcanvas</x-offcanvas.toggle>
<x-offcanvas id="BasicExample">
    <x-offcanvas.header title="Basic Offcanvas" />

    <x-offcanvas.body>
        Content for the offcanvas goes here. You can place just about any Bootstrap component or custom elements here.
    </x-offcanvas.body>
</x-offcanvas>
            @endverbatim
        </x-slot>
    </x-doc.demo>
@endsection
