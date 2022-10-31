<x-app>
    <x-card class="mb-3 ">
        <x-card.header class="text-danger" data-controller="card-header">
            This is my card header
        </x-card.header>

        <x-card.body class="bg-danger">
            This is my card body
        </x-card.body>

        <x-card.footer>
            This is my card footer
        </x-card.footer>
    </x-card>

    <hr>

    <x-dropdown id="Test">
        <x-dropdown.toggle class="btn btn-light">Toggle dropdown</x-dropdown.toggle>

        <x-dropdown.menu>
            <x-dropdown.item href="/login">Link one</x-dropdown.item>
            <x-dropdown.item href="/register">Link two</x-dropdown.item>
            <x-dropdown.divider/>
            <x-dropdown.item href="http://laraloop3.test" class="active">Link three</x-dropdown.item>
        </x-dropdown.menu>
    </x-dropdown>

    <hr>

    <x-tab id="my">
        <x-tab.nav id="my">
            <x-tab.link id="first">First</x-tab.link>
            <x-tab.link id="second" :active="true">Second</x-tab.link>
            <x-tab.link id="third">Third</x-tab.link>
        </x-tab.nav>

        <x-tab.content id="my">
            <x-tab.pane id="first">First tab content</x-tab.pane>
            <x-tab.pane id="second" :active="true">Second tab content</x-tab.pane>
            <x-tab.pane id="third">Third tab content</x-tab.pane>
        </x-tab.content>
    </x-tab>

    <hr>

    <x-popover
        title="Popover title"
        placement="top"
        content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</x-popover>

    <hr>

    <x-tooltip
        title="Tooltip content"
        placement="top">Click to toggle tooltip</x-tooltip>

    {{--    <x-card class="mb-3 border-danger border-1">--}}
    {{--        <x-slot name="body" class="card-header-custom" data-controller="card-body">--}}
    {{--            This is my card body--}}
    {{--        </x-slot>--}}
    {{--    </x-card>--}}

    {{--    <x-card class="mb-3 border-danger border-1">--}}
    {{--        <x-slot name="body" class="card-header-custom">--}}
    {{--            This is my card body--}}
    {{--        </x-slot>--}}
    {{--    </x-card>--}}

    {{--    <x-card class="mb-3">--}}
    {{--        <x-slot name="header" class="fw-bold">--}}
    {{--            This is my card header--}}
    {{--        </x-slot>--}}

    {{--        <x-slot name="body" class="card-header-custom">--}}
    {{--            This is my card body--}}
    {{--        </x-slot>--}}
    {{--    </x-card>--}}

    {{--    <x-card class="mb-3">--}}
    {{--        <x-slot name="body" class="card-body-custom">--}}
    {{--            This is my card body--}}
    {{--        </x-slot>--}}

    {{--        <x-slot name="footer">--}}
    {{--            This is my card footer--}}
    {{--        </x-slot>--}}
    {{--    </x-card>--}}

    {{--    <x-card class="mb-3">--}}
    {{--        <x-slot name="header">--}}
    {{--            This is my card header--}}
    {{--        </x-slot>--}}

    {{--        <x-slot name="body">--}}
    {{--            This is my card body--}}
    {{--        </x-slot>--}}

    {{--        <x-slot name="footer">--}}
    {{--            This is my card footer--}}
    {{--        </x-slot>--}}
    {{--    </x-card>--}}

    {{--    <x-card class="mb-3">--}}
    {{--        <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>--}}

    {{--        <x-slot name="body" class="card-body-custom">--}}
    {{--            This is my card body--}}
    {{--        </x-slot>--}}

    {{--        <x-slot name="footer">--}}
    {{--            This is my card footer--}}
    {{--        </x-slot>--}}
    {{--    </x-card>--}}


    {{--    <x-card.group>--}}
    {{--        <x-card>--}}
    {{--            <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>--}}
    {{--            <x-slot name="body" class="card-body-custom">--}}
    {{--                This is my card body--}}
    {{--            </x-slot>--}}
    {{--        </x-card>--}}
    {{--        <x-card>--}}
    {{--            <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>--}}
    {{--            <x-slot name="body" class="card-body-custom">--}}
    {{--                This is my card body--}}
    {{--            </x-slot>--}}
    {{--        </x-card>--}}
    {{--        <x-card>--}}
    {{--            <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>--}}
    {{--            <x-slot name="body" class="card-body-custom">--}}
    {{--                This is my card body--}}
    {{--            </x-slot>--}}
    {{--        </x-card>--}}
    {{--    </x-card.group>--}}
</x-app>
