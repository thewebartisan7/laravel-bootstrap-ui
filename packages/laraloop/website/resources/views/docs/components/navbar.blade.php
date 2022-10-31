@extends('website::layouts.doc', ['title' => 'Navbar'])

@section('content')
    <h4>How it works</h4>
    <p>
        Documentation and examples for Bootstrap's powerful, responsive navigation header, the navbar.
        Includes support for branding, navigation, and more, including support for our collapse plugin.
    </p>

    <x-doc.demo title="Basic example" description="Click the accordions below to expand/collapse the accordion content.">
        <x-navbar id="BasicExample" expand="lg">
            <x-navbar.brand src="static/brand/logo-inverted.svg">Navbar</x-navbar.brand>
            <x-navbar.toggler />
            <x-navbar.collapse>
                <x-navbar.nav>
                    <x-nav.li to="/docs/components/navbar">Active</x-nav.li>
                    <x-nav.li to="#">Link One</x-nav.li>
                    <x-nav.li to="#">Link Two</x-nav.li>
                    <x-nav.li to="#" disabled>Disabled</x-nav.li>
                </x-navbar.nav>
            </x-navbar.collapse>
        </x-navbar>

        <x-slot name="code">
            @verbatim
<x-navbar id="BasicExample" expand="lg">
    <x-navbar.brand src="static/brand/logo-inverted.svg">Navbar</x-navbar.brand>
    <x-navbar.toggler />
    <x-navbar.collapse>
        <x-navbar.nav>
            <x-nav.li to="/docs/components/navbar">Active</x-nav.li>
            <x-nav.li to="#">Link One</x-nav.li>
            <x-nav.li to="#">Link Two</x-nav.li>
            <x-nav.li to="#" disabled>Disabled</x-nav.li>
        </x-navbar.nav>
    </x-navbar.collapse>
</x-navbar>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-alert type="warning" class="mt-3">
        <code>x-navbar.nav</code> component use <code>x-nav.li</code> which use <code>x-link</code> component, so active class will be automatically set by <a href="/docs/components/link">link component</a>.
    </x-alert>

    <x-doc.demo title="Colored example" description="Click the accordions below to expand/collapse the accordion content.">
        <x-navbar id="ColorExample" expand="lg" dark color="primary">
            <x-navbar.brand>Navbar</x-navbar.brand>
            <x-navbar.toggler />
            <x-navbar.collapse>
                <x-navbar.nav>
                    <x-nav.li to="/docs/components/navbar">Active</x-nav.li>
                    <x-nav.li to="#">Link One</x-nav.li>
                    <x-nav.li to="#">Link Two</x-nav.li>
                    <x-nav.li to="#" disabled>Disabled</x-nav.li>
                </x-navbar.nav>
            </x-navbar.collapse>
        </x-navbar>

        <x-slot name="code">
            @verbatim
<x-navbar id="ColorExample" expand="lg" dark color="primary">
    <x-navbar.brand>Navbar</x-navbar.brand>
    <x-navbar.toggler />
    <x-navbar.collapse>
        <x-navbar.nav>
            <x-nav.li to="/docs/components/navbar">Active</x-nav.li>
            <x-nav.li to="#">Link One</x-nav.li>
            <x-nav.li to="#">Link Two</x-nav.li>
            <x-nav.li to="#" disabled>Disabled</x-nav.li>
        </x-navbar.nav>
    </x-navbar.collapse>
</x-navbar>
            @endverbatim
        </x-slot>
    </x-doc.demo>
@endsection
