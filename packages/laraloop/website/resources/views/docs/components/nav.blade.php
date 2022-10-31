@extends('website::layouts.doc', ['title' => 'Nav'])

@section('content')
    <h4>How it works</h4>
    <p>
        Documentation and examples for using Bootstrap custom progress bars featuring support for stacked bars, animated backgrounds, and text labels.
        Progress components are built with two HTML elements, some CSS to set the width, and a few attributes.
        We don't use the HTML5 <code>progress</code> element, ensuring you can stack progress bars, animate them, and place text labels over them.
    </p>

    <x-doc.demo title="Basic example" description="Use the border spinners for a lightweight loading indicator.">
        <x-nav>
            <x-nav.link to="/docs">Docs</x-nav.link>
            <x-nav.link to="/docs/components">Components</x-nav.link>
            <x-nav.link to="/docs/components/nav">Nav</x-nav.link>
        </x-nav>

        <x-slot name="code">
            @verbatim
<x-nav>
    <x-nav.link to="/docs">Docs</x-nav.link>
    <x-nav.link to="/docs/components">Components</x-nav.link>
    <x-nav.link to="/docs/components/nav">Nav</x-nav.link>
</x-nav>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="List example" description="Use the border spinners for a lightweight loading indicator.">
        <x-nav.ul>
            <x-nav.li to="/docs">Docs</x-nav.li>
            <x-nav.li to="/docs/components">Components</x-nav.li>
            <x-nav.li to="/docs/components/nav">Nav</x-nav.li>
        </x-nav.ul>

        <x-slot name="code">
            @verbatim
<x-nav.ul>
    <x-nav.li to="/docs">Docs</x-nav.li>
    <x-nav.li to="/docs/components">Components</x-nav.li>
    <x-nav.li to="/docs/components/nav">Nav</x-nav.li>
</x-nav.ul>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="Centered aligned example" description="Use the border spinners for a lightweight loading indicator.">
        <x-nav centered>
            <x-nav.link to="/docs">Docs</x-nav.link>
            <x-nav.link to="/docs/components">Components</x-nav.link>
            <x-nav.link to="/docs/components/nav">Nav</x-nav.link>
        </x-nav>

        <x-slot name="code">
            @verbatim
<x-nav centered>
    <x-nav.link to="/docs">Docs</x-nav.link>
    <x-nav.link to="/docs/components">Components</x-nav.link>
    <x-nav.link to="/docs/components/nav">Nav</x-nav.link>
</x-nav>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="End (right) aligned example" description="Use the border spinners for a lightweight loading indicator.">
        <x-nav end>
            <x-nav.link to="/docs">Docs</x-nav.link>
            <x-nav.link to="/docs/components">Components</x-nav.link>
            <x-nav.link to="/docs/components/nav">Nav</x-nav.link>
        </x-nav>

        <x-slot name="code">
            @verbatim
<x-nav end>
    <x-nav.link to="/docs">Docs</x-nav.link>
    <x-nav.link to="/docs/components">Components</x-nav.link>
    <x-nav.link to="/docs/components/nav">Nav</x-nav.link>
</x-nav>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="Vertical aligned example" description="Use the border spinners for a lightweight loading indicator.">
        <x-nav vertical>
            <x-nav.link to="/docs">Docs</x-nav.link>
            <x-nav.link to="/docs/components">Components</x-nav.link>
            <x-nav.link to="/docs/components/nav">Nav</x-nav.link>
        </x-nav>

        <x-slot name="code">
            @verbatim
<x-nav vertical>
    <x-nav.link to="/docs">Docs</x-nav.link>
    <x-nav.link to="/docs/components">Components</x-nav.link>
    <x-nav.link to="/docs/components/nav">Nav</x-nav.link>
</x-nav>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="Vertical from SM breaking example" description="Use the border spinners for a lightweight loading indicator.">
        <x-nav vertical="sm">
            <x-nav.link to="/docs">Docs</x-nav.link>
            <x-nav.link to="/docs/components">Components</x-nav.link>
            <x-nav.link to="/docs/components/nav">Nav</x-nav.link>
        </x-nav>

        <x-slot name="code">
            @verbatim
<x-nav vertical="sm">
    <x-nav.link to="/docs">Docs</x-nav.link>
    <x-nav.link to="/docs/components">Components</x-nav.link>
    <x-nav.link to="/docs/components/nav">Nav</x-nav.link>
</x-nav>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="Tabs styled example" description="Use the border spinners for a lightweight loading indicator.">
        <x-nav tabs>
            <x-nav.link to="/docs">Docs</x-nav.link>
            <x-nav.link to="/docs/components">Components</x-nav.link>
            <x-nav.link to="/docs/components/nav">Nav</x-nav.link>
        </x-nav>

        <x-slot name="code">
            @verbatim
<x-nav tabs>
    <x-nav.link to="/docs">Docs</x-nav.link>
    <x-nav.link to="/docs/components">Components</x-nav.link>
    <x-nav.link to="/docs/components/nav">Nav</x-nav.link>
</x-nav>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="Pills styled example" description="Use the border spinners for a lightweight loading indicator.">
        <x-nav pills>
            <x-nav.link to="/docs">Docs</x-nav.link>
            <x-nav.link to="/docs/components">Components</x-nav.link>
            <x-nav.link to="/docs/components/nav">Nav</x-nav.link>
        </x-nav>

        <x-slot name="code">
            @verbatim
<x-nav pills>
    <x-nav.link to="/docs">Docs</x-nav.link>
    <x-nav.link to="/docs/components">Components</x-nav.link>
    <x-nav.link to="/docs/components/nav">Nav</x-nav.link>
</x-nav>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="Pills and fill example" description="Use the border spinners for a lightweight loading indicator.">
        <x-nav pills fill>
            <x-nav.link to="/docs">Docs</x-nav.link>
            <x-nav.link to="/docs/components">Components</x-nav.link>
            <x-nav.link to="/docs/components/nav">Nav</x-nav.link>
        </x-nav>

        <x-slot name="code">
            @verbatim
<x-nav pills fill>
    <x-nav.link to="/docs">Docs</x-nav.link>
    <x-nav.link to="/docs/components">Components</x-nav.link>
    <x-nav.link to="/docs/components/nav">Nav</x-nav.link>
</x-nav>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="Tabs styled example" description="Use the border spinners for a lightweight loading indicator.">
        <x-nav tabs>
            <x-nav.link to="/docs">Docs</x-nav.link>
            <x-nav.link to="/docs/components">Components</x-nav.link>
            <x-nav.link to="/docs/components/nav">Nav</x-nav.link>
        </x-nav>

        <x-slot name="code">
            @verbatim
<x-nav tabs>
    <x-nav.link to="/docs">Docs</x-nav.link>
    <x-nav.link to="/docs/components">Components</x-nav.link>
    <x-nav.link to="/docs/components/nav">Nav</x-nav.link>
</x-nav>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="Tabs styled example" description="Use the border spinners for a lightweight loading indicator.">
        <x-nav tabs>
            <x-nav.li to="welcome">Welcome</x-nav.li>
            <x-nav.dropdown id="dropdownNav">
                <x-dropdown.toggle.a class="nav-link">Dropdown</x-dropdown.toggle.a>
                <x-dropdown.menu.ul>
                    <x-dropdown.item.li href="/login">Login</x-dropdown.item.li>
                    <x-dropdown.item.li href="/register">Register</x-dropdown.item.li>
                </x-dropdown.menu.ul>
            </x-nav.dropdown>
            <x-nav.li to="test">Test</x-nav.li>
        </x-nav>

        <x-slot name="code">
            @verbatim
<x-nav tabs>
    <x-nav.li to="welcome">Welcome</x-nav.li>
    <x-nav.dropdown id="dropdownNav">
        <x-dropdown.toggle.a class="nav-link">Dropdown</x-dropdown.toggle.a>
        <x-dropdown.menu.ul>
            <x-dropdown.item.li href="/login">Login</x-dropdown.item.li>
            <x-dropdown.item.li href="/register">Register</x-dropdown.item.li>
        </x-dropdown.menu.ul>
    </x-nav.dropdown>
    <x-nav.li to="test">Test</x-nav.li>
</x-nav>
            @endverbatim
        </x-slot>
    </x-doc.demo>

    <x-doc.demo title="Tabs styled example" description="Use the border spinners for a lightweight loading indicator.">
        <x-tab id="my">
            <x-tab.nav>
                <x-tab.link id="first" active>First</x-tab.link>
                <x-tab.link id="second">Second</x-tab.link>
                <x-tab.link id="third">Third</x-tab.link>
            </x-tab.nav>
            <x-tab.content>
                <x-tab.pane id="first" active>First tab content</x-tab.pane>
                <x-tab.pane id="second">Second tab content</x-tab.pane>
                <x-tab.pane id="third">Third tab content</x-tab.pane>
            </x-tab.content>
        </x-tab>

        <x-slot name="code">
            @verbatim
<x-tab id="my">
    <x-tab.nav>
        <x-tab.link id="first" active>First</x-tab.link>
        <x-tab.link id="second">Second</x-tab.link>
        <x-tab.link id="third">Third</x-tab.link>
    </x-tab.nav>
    <x-tab.content>
        <x-tab.pane id="first" active>First tab content</x-tab.pane>
        <x-tab.pane id="second">Second tab content</x-tab.pane>
        <x-tab.pane id="third">Third tab content</x-tab.pane>
    </x-tab.content>
</x-tab>
            @endverbatim
        </x-slot>
    </x-doc.demo>
@endsection
