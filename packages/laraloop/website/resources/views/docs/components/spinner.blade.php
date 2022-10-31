@extends('website::layouts.doc', ['title' => 'Spinner'])

@section('content')
    <h4>How it works</h4>
    <p>
        Indicate the loading state of a component or page with Bootstrap spinners, built entirely with HTML, CSS, and no JavaScript.
        Bootstrap “spinners” can be used to show the loading state in your projects. They’re built only with HTML and CSS, meaning you don’t need any JavaScript to create them.
        You will, however, need some custom JavaScript to toggle their visibility. Their appearance, alignment, and sizing can be easily customized with props.
    </p>

    <x-doc.demo title="Basic example" description="Use the border spinners for a lightweight loading indicator.">
        <x-spinner />

        <x-slot name="code">
            @verbatim
<x-spinner />
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="Grow example" description="If you don’t fancy a border spinner, switch to the grow spinner. While it doesn’t technically spin, it does repeatedly grow!">
        <x-spinner type="grow" />

        <x-slot name="code">
            @verbatim
<x-spinner type="grow" />
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="Colored example">
        <x-slot name="description">
            The border spinner uses <code>currentColor</code> for its <code>border-color</code>, meaning you can customize the color with text color utilities.
            You can use any of Bootstrap text color utilities on the standard spinner.
        </x-slot>
        @foreach(['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark'] as $color)
            <x-spinner :color="$color" class="me-3" />
        @endforeach

        <x-slot name="code">
            @verbatim
<x-spinner color="primary" />
<x-spinner color="secondary" />
<x-spinner color="success" />
<x-spinner color="danger" />
<x-spinner color="warning" />
<x-spinner color="info" />
<x-spinner color="light" />
<x-spinner color="dark" />
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="Different sizes" description="Click the accordions below to expand/collapse the accordion content.">
        <x-slot name="description">
            Add prop <code>small</code> or pass custom width and height via <code>style</code> attribute to make a smaller spinner that can quickly be used within other components.
        </x-slot>
        <x-spinner small />
        <x-spinner type="grow" small class="ms-3" />
        <x-spinner style="width: 3rem; height: 3rem;" class="ms-3" />

        <x-slot name="code">
            @verbatim
<x-spinner small />
<x-spinner type="grow" small />
<x-spinner style="width: 3rem; height: 3rem;" />
            @endverbatim
        </x-slot>
    </x-doc.demo>
@endsection
