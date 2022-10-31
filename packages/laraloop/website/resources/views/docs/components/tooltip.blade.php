@extends('website::layouts.doc', ['title' => 'Tooltip'])

@section('content')
    <h4>
        How it works?
    </h4>
    <p>
        Documentation and examples for adding Bootstrap popovers, like those found in iOS, to any element on your site.
    </p>

    <x-doc.demo title="Basic example" description="Click the accordions below to expand/collapse the accordion content.">
        <x-tooltip title="I'm default tooltip">Hover to see default tooltip</x-tooltip>
        <br>
        <x-tooltip title="I'm tooltip on span tag" tag="span">Hover to see tooltip on span tag</x-tooltip>
        <br>
        <x-tooltip title="I'm tooltip on link tag" href="/docs/components/tooltip">Hover to see tooltip on link with href</x-tooltip>

        <x-slot name="code">
            @verbatim
<x-tooltip title="I'm default tooltip">Hover to see default tooltip</x-tooltip>
<x-tooltip title="I'm tooltip on span tag" tag="span">Hover to see tooltip on span tag</x-tooltip>
<x-tooltip title="I'm tooltip on link tag" href="/docs/components/tooltip">Hover to see tooltip on link with href</x-tooltip>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="Placement example" description="Click the accordions below to expand/collapse the accordion content.">
        @foreach(['top', 'right', 'bottom', 'left'] as $placement)
            <x-tooltip title="I'm {{ $placement }} tooltip" :placement="$placement">Hover to see {{ $placement }} tooltip</x-tooltip>
            <br>
        @endforeach

        <x-slot name="code">
            @verbatim
<x-tooltip title="I'm top tooltip" placement="top">Hover to see top tooltip</x-tooltip>
<x-tooltip title="I'm right tooltip" placement="right">Hover to see right tooltip</x-tooltip>
<x-tooltip title="I'm bottom tooltip" placement="bottom">Hover to see bottom tooltip</x-tooltip>
<x-tooltip title="I'm left tooltip" placement="left">Hover to see left tooltip</x-tooltip>
            @endverbatim
        </x-slot>
    </x-doc.demo>
@endsection
