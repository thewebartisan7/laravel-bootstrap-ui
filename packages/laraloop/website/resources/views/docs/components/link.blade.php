@extends('website::layouts.doc', ['title' => 'Link'])

@section('content')

    <h4>How it works</h4>
    <p>
        Create links seem easy but there are several things that you wish to apply.
        This component will help you with that!
    </p>

    <x-doc.demo title="Example" description="Easy generate normal link, routes link and signed link. Inspired by Vue Router.">

        <p>
            This link should be active because it point to top level path <code>doc</code>:
            <x-link to="docs" class="me-3">Docs link</x-link>
        </p>

        <p>
            This link should NOT be active because it point to top level path <code>doc</code> but has prop <code>exact</code>,
            which mean it should match the exact URL:
            <x-link to="docs" class="me-3" exact>Docs link with exact prop</x-link>
        </p>

        <p>
            This link should be not be active because it point to route name <code>home</code>:
            <x-link to="home" class="me-3">Link that point to route name "home"</x-link>
        </p>

        <p>
            This link has a signature with prop <code>signed</code>:
            <x-link to="welcome" signed class="me-3">Signed Route Link</x-link>
        </p>

        <p>
            This link has a signature that expire in 120 minutes with prop <code>signed="120"</code>:
            <x-link to="welcome" signed="120" class="me-3">Temporary Signed Route Link</x-link>
        </p>

        <x-slot name="code">
            @verbatim
<x-link to="/docs" class="me-3">Docs link</x-link>
<x-link to="/docs" class="me-3" exact>Docs link with exact prop</x-link>
<x-link to="home" class="me-3">Link that point to route name "home"</x-link>
<x-link to="home" signed>Signed Route Link</x-link>
<x-link to="home" signed="120">Temporary Signed Route Link</x-link>
            @endverbatim
        </x-slot>
    </x-doc.demo>
@endsection
