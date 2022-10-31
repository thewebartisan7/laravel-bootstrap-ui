@extends('website::layouts.doc', ['title' => 'Progress'])

@section('content')
    <h4>How it works</h4>
    <p>
        Documentation and examples for using Bootstrap custom progress bars featuring support for stacked bars, animated backgrounds, and text labels.
        Progress components are built with two HTML elements, some CSS to set the width, and a few attributes.
        We don't use the HTML5 <code>progress</code> element, ensuring you can stack progress bars, animate them, and place text labels over them.
    </p>

    <x-doc.demo title="Basic example" description="Use the border spinners for a lightweight loading indicator.">
        <x-progress />
        <x-progress class="mt-3" value="25" style="height: 5px" />

        <x-slot name="code">
            @verbatim
<x-progress />
<x-progress class="mt-3" value="25" style="height: 5px" />
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="Set default value, min and max example" description="If you don’t fancy a border spinner, switch to the grow spinner. While it doesn’t technically spin, it does repeatedly grow!">
        <x-progress class="mb-3" value="25" />
        <x-progress class="mb-3" value="50" min="25" />
        <x-progress value="75" max="90" />

        <x-slot name="code">
            @verbatim
<x-progress class="mb-3" value="25" />
<x-progress class="mb-3" value="50" min="25" />
<x-progress value="75" max="90" />
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="Colored">
        <x-slot name="description">
            The border spinner uses <code>currentColor</code> for its <code>border-color</code>, meaning you can customize the color with text color utilities.
            You can use any of Bootstrap text color utilities on the standard spinner.
        </x-slot>
        @foreach(['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark'] as $color)
            <x-progress :color="$color" class="mb-3" value="75" />
        @endforeach

        <x-slot name="code">
            @verbatim
<x-progress color="primary" class="mb-3" value="75" />
<x-progress color="secondary" class="mb-3" value="75" />
<x-progress color="success" class="mb-3" value="75" />
<x-progress color="danger" class="mb-3" value="75" />
<x-progress color="warning" class="mb-3" value="75" />
<x-progress color="info" class="mb-3" value="75" />
<x-progress color="light" class="mb-3" value="75" />
<x-progress color="dark" class="mb-3" value="75" />
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="Stripped and animated example" description="Click the accordions below to expand/collapse the accordion content.">
        <x-slot name="description">
            Add prop <code>small</code> or pass custom width and height via <code>style</code> attribute to make a smaller spinner that can quickly be used within other components.
        </x-slot>
        <x-progress class="mb-3" value="50" striped />
        <x-progress value="75" animated />

        <x-slot name="code">
            @verbatim
<x-progress class="mb-3" value="50" striped />
<x-progress value="75" animated />
            @endverbatim
        </x-slot>
    </x-doc.demo>
@endsection
