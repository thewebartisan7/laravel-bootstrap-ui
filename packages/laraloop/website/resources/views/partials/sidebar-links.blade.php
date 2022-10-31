<ul class="list-unstyled px-2">
    <x-sidebar.nav.collapsible title="Getting Started" id="one" :collapsed="!$section || $section === 'javascript' || $section === 'resources' || $section === 'installation'">
        <li><x-link to="/docs" class="link-dark rounded" exact>Introduction</x-link></li>
        <li><x-link to="/docs/installation" class="link-dark rounded" exact>Installation</x-link></li>
        <li><x-link to="/docs/javascript" class="link-dark rounded" exact>JavaScript</x-link></li>
        <li><x-link to="/docs/resources" class="link-dark rounded" exact>Resources</x-link></li>
    </x-sidebar.nav.collapsible>

    <x-sidebar.nav.collapsible title="Components" id="two" :collapsed="$section === 'components'">
        <li><x-link to="/docs/components/accordion" class="link-dark rounded" exact>Accordion</x-link></li>
        <li><x-link to="/docs/components/alert" class="link-dark rounded" exact>Alert</x-link></li>
        <li><x-link to="/docs/components/badge" class="link-dark rounded" exact>Badge</x-link></li>
        <li><x-link to="/docs/components/breadcrumb" class="link-dark rounded" exact>Breadcrumb</x-link></li>
        <li><x-link to="/docs/components/buttons" class="link-dark rounded" exact>Buttons</x-link></li>
        <li><x-link to="/docs/components/card" class="link-dark rounded" exact>Card</x-link></li>
        <li><x-link to="/docs/components/carousel" class="link-dark rounded" exact>Carousel</x-link></li>
        <li><x-link to="/docs/components/collapse" class="link-dark rounded" exact>Collapse</x-link></li>
        <li><x-link to="/docs/components/dropdown" class="link-dark rounded" exact>Dropdown</x-link></li>
        <li><x-link to="/docs/components/link" class="link-dark rounded" exact>Link</x-link></li>
        <li><x-link to="/docs/components/list" class="link-dark rounded" exact>List</x-link></li>
        <li><x-link to="/docs/components/modal" class="link-dark rounded" exact>Modal</x-link></li>
        <li><x-link to="/docs/components/nav" class="link-dark rounded" exact>Nav</x-link></li>
        <li><x-link to="/docs/components/navbar" class="link-dark rounded" exact>Navbar</x-link></li>
        <li><x-link to="/docs/components/offcanvas" class="link-dark rounded" exact>Offcanvas</x-link></li>
        <li><x-link to="/docs/components/pagination" class="link-dark rounded" exact>Pagination</x-link></li>
        <li><x-link to="/docs/components/popover" class="link-dark rounded" exact>Popover</x-link></li>
        <li><x-link to="/docs/components/progress" class="link-dark rounded" exact>Progress</x-link></li>
        <li><x-link to="/docs/components/spinner" class="link-dark rounded" exact>Spinner</x-link></li>
        <li><x-link to="/docs/components/toast" class="link-dark rounded" exact>Toast</x-link></li>
        <li><x-link to="/docs/components/tooltip" class="link-dark rounded" exact>Tooltip</x-link></li>
    </x-sidebar.nav.collapsible>

    <x-sidebar.nav.collapsible title="Forms" id="three" :collapsed="$section === 'forms'">
        <li><x-link to="/docs/forms/introduction" class="link-dark rounded" exact>Introduction</x-link></li>
        <li><x-link to="/docs/forms/input" class="link-dark rounded" exact>Input</x-link></li>
        <li><x-link to="/docs/forms/select" class="link-dark rounded" exact>Select</x-link></li>
        <li><x-link to="/docs/forms/checkbox-radio" class="link-dark rounded" exact>Checkbox &amp; Radio</x-link></li>
    </x-sidebar.nav.collapsible>

    <x-sidebar.nav.collapsible title="Layouts" id="four" :collapsed="$section === 'layouts'">
        <li><x-link to="/docs/layouts/introduction" class="link-dark rounded" exact>Introduction</x-link></li>
        <li><x-link to="/docs/layouts/base" class="link-dark rounded" exact>Base</x-link></li>
        <li><x-link to="/docs/layouts/app" class="link-dark rounded" exact>App</x-link></li>
        <li><x-link to="/docs/layouts/auth" class="link-dark rounded" exact>Auth</x-link></li>
        <li><x-link to="/docs/layouts/dashboard" class="link-dark rounded" exact>Dashboard</x-link></li>
        <li><x-link to="/docs/layouts/sidebar" class="link-dark rounded" exact>Sidebar</x-link></li>
    </x-sidebar.nav.collapsible>

    <x-sidebar.nav.collapsible title="Icons" id="five" :collapsed="$section === 'icons'">
        <li><x-link to="/docs/icons/introduction" class="link-dark rounded" exact>Introduction</x-link></li>
        <li><x-link to="/docs/icons/component" class="link-dark rounded" exact>Icon Component</x-link></li>
    </x-sidebar.nav.collapsible>
</ul>
