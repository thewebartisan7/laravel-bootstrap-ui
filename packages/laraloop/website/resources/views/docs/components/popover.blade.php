@extends('website::layouts.doc', ['title' => 'Popover'])

@section('content')
    <h4>
        How it works?
    </h4>
    <p>
        Documentation and examples for adding Bootstrap popovers, like those found in iOS, to any element on your site.
    </p>

    <x-doc.demo title="Basic example" description="Click the accordions below to expand/collapse the accordion content.">
        <x-popover
            title="Popover title"
            content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</x-popover>

        <x-slot name="code">
            @verbatim
<x-popover
    title="Popover title"
    content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</x-popover>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="Placement example" description="Click the accordions below to expand/collapse the accordion content.">
        @foreach(['top', 'right', 'bottom', 'left'] as $placement)
            <x-popover
                title="Popover {{ $placement }}"
                :placement="$placement"
                class="btn btn-primary me-3"
                content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover {{ $placement }}</x-popover>
        @endforeach

        <x-slot name="code">
            @verbatim
<x-popover
    title="Popover top"
    placement="top"
    class="btn btn-primary me-3"
    content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover top</x-popover>

<x-popover
    title="Popover right"
    placement="right"
    class="btn btn-primary me-3"
    content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover right</x-popover>

<x-popover
    title="Popover bottom"
    placement="bottom"
    class="btn btn-primary me-3"
    content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover bottom</x-popover>

<x-popover
    title="Popover left"
    placement="left"
    class="btn btn-primary me-3"
    content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover left</x-popover>
            @endverbatim
        </x-slot>
    </x-doc.demo>
@endsection
