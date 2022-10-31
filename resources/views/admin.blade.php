<x-dashboard :title="$title ?? 'Admin'">

    <x-slot name="header" id="main" size="fluid" color="primary" sticky dark expand>
        <x-navbar.brand class="d-inline-block py-0 col-md-3 col-lg-2 pe-2 ps-1" src="static/brand/logo.svg" />

        <x-navbar.collapse class="d-md-flex align-items-center w-100">
            <nav class="nav navbar-nav me-auto">
                <x-link to="/ui" class="nav-link" active="fw-bold active">UI</x-link>
                <x-link to="/auth" class="nav-link" active="fw-bold active">Auth</x-link>
                <x-link to="/docs" class="nav-link" active="fw-bold active">Docs</x-link>
                <x-link to="/download" class="nav-link" active="fw-bold active">Download</x-link>
            </nav>

            <x-collapse.button id="sidebar" class="border-0 d-block d-md-none">
                <span class="navbar-toggler-icon"></span>
            </x-collapse.button>
        </x-navbar.collapse>
    </x-slot>

    <x-slot name="sidebar">
        <x-sidebar id="sidebar" light>
            <ul class="list-unstyled px-2">
                <x-sidebar.nav.collapsible title="Getting Started" id="one" collapsed>
                    <li><x-link to="#" class="link-dark rounded">Introduction</x-link></li>
                    <li><x-link to="#" class="link-dark rounded">Download</x-link></li>
                    <li><x-link to="#" class="link-dark rounded">JavaScript</x-link></li>
                    <li><x-link to="#" class="link-dark rounded">Webpack</x-link></li>
                    <li><x-link to="#" class="link-dark rounded">Resources</x-link></li>
                </x-sidebar.nav.collapsible>
            </ul>
        </x-sidebar>
    </x-slot>
</x-dashboard>

