<x-dashboard title="Dashboard Layout">

    <h4>How it works?</h4>
    <p>
        The accordion uses <a href="/docs/components/collapse">collapse</a> internally to make it collapsible.
        To render an accordion that's expanded, add the <code>show</code> prop on the <code>x-accordion.item</code> component.
    </p>

    <x-tab id="my" class="mb-4">
        <x-tab.nav>
            <x-tab.link id="blade" active>Blade</x-tab.link>
            <x-tab.link id="html">HTML</x-tab.link>
        </x-tab.nav>

        <x-tab.content>
            <x-tab.pane id="blade" active>
                <x-doc.code>
                    @verbatim
<x-dashboard title="Dashboard Layout">

    <!-- Page content go here... -->

    <x-slot name="header" id="main" size="fluid" color="primary" sticky dark expand>
        <x-navbar.brand class="d-inline-block py-0 col-md-3 col-lg-2 pe-2 ps-1" src="static/brand/logo.svg" />

        <x-navbar.collapse class="d-md-flex align-items-center w-100">
            <nav class="nav navbar-nav me-auto">
                <x-link to="#" class="nav-link" active="fw-bold active">Home</x-link>
                <x-link to="#" class="nav-link" active="fw-bold active">Link</x-link>
                <x-link to="#" class="nav-link" active="fw-bold active">Another Link</x-link>
            </nav>

          <x-button :color="false"
                    class="navbar-toggler border-0 d-block d-md-none"
                    toggle="collapse"
                    target="sidebar"
                    expanded="false"><span class="navbar-toggler-icon"></span></x-button>
        </x-navbar.collapse>
    </x-slot>

    <x-slot name="sidebar">
        <x-sidebar id="sidebar" light>
            <ul class="list-unstyled px-2">
                <x-sidebar.nav.collapsible title="Section One" id="one" collapsed>
                    <li><x-link to="#" class="link-dark rounded">Link One</x-link></li>
                    <li><x-link to="#" class="link-dark rounded">Link Two</x-link></li>
                </x-sidebar.nav.collapsible>

                <x-sidebar.nav.collapsible title="Section Two" id="two">
                    <li><x-link to="#" class="link-dark rounded">Link Three</x-link></li>
                    <li><x-link to="#" class="link-dark rounded">Link Four</x-link></li>
                </x-sidebar.nav.collapsible>
            </ul>
        </x-sidebar>
    </x-slot>
</x-dashboard>
                    @endverbatim
                </x-doc.code>
            </x-tab.pane>

            <x-tab.pane id="html">
                <x-doc.code>
<!DOCTYPE html>
<html lang="en" data-debug="true" class="min-vh-100" data-controller="app">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf_token" content="hfLI3NFNs13njfQrOaVwFzdNs1VV0TNR9T4Spy95">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <title>Dashboard Layout | Laravel</title>
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <script src="/js/app.js" defer></script>
</head>
<body class="dashboard min-vh-100">
<header class="navbar navbar-expand sticky-top navbar-dark bg-primary dashboard__header flex-shrink-0" role="navigation">
    <div class="container-fluid">
        <a class="navbar-brand d-inline-block py-0 col-md-3 col-lg-2 pe-2 ps-1" href="/">
            <img src="http://laraloop3.test/static/brand/logo.svg" alt="Logo" width="120" height="auto">
        </a>
        <div class="navbar-collapse collapse d-md-flex align-items-center w-100" id="navbar">
            <nav class="nav navbar-nav me-auto">
                <a href="http://laraloop3.test/#" class="nav-link">Home</a>
                <a href="http://laraloop3.test/#" class="nav-link">Link</a>
                <a href="http://laraloop3.test/#" class="nav-link">Another Link</a>
            </nav>
            <button type="button" data-bs-toggle="collapse" class="btn btn-primary border-0 d-block d-md-none" data-bs-target="#collapseSidebar" aria-expanded="false" aria-controls="collapseSidebar" id="sidebar"><span class="navbar-toggler-icon"></span></button>
        </div>
    </div>
</header>
<main class="dashboard__main container-fluid">
    <div class="dashboard__content row">
        <aside id="collapseSidebar" class="sidebar sidebar--sticky col-md-3 col-lg-2 d-md-block collapse bg-light">
            <div class="sidebar__content pt-3">
                <ul class="list-unstyled px-2">
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#one-collapse" aria-expanded="true">Section One</button>
                        <div class="collapse show" id="one-collapse">
                            <ul class="sidebar__nav btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="http://laraloop3.test/#" class="link-dark rounded">Link One</a>
                                </li>
                                <li><a href="http://laraloop3.test/#" class="link-dark rounded">Link Two</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded " data-bs-toggle="collapse" data-bs-target="#two-collapse" aria-expanded="false">Section Two</button>
                        <div class="collapse " id="two-collapse">
                            <ul class="sidebar__nav btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="http://laraloop3.test/#" class="link-dark rounded">Link Three</a>
                                </li>
                                <li><a href="http://laraloop3.test/#" class="link-dark rounded">Link Four</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-4 border-bottom">
                <h1 class="h2">Dashboard Layout</h1>
            </div>
            <div class="flex-shrink-0">
                <!-- Page content go here... -->
            </div>
        </div>
    </div>
</main>
</body>
</html>
                </x-doc.code>
            </x-tab.pane>
        </x-tab.content>
    </x-tab>


    <x-slot name="header" id="main" size="fluid" color="primary" sticky dark expand>
        <x-navbar.brand class="d-inline-block py-0 col-md-3 col-lg-2 pe-2 ps-1" src="static/brand/logo.svg" />

        <x-navbar.collapse class="d-md-flex align-items-center w-100">
            <nav class="nav navbar-nav ms-auto">
                @include('website::partials.nav-links')
            </nav>

          <x-button :color="false"
                    class="navbar-toggler border-0 d-block d-md-none"
                    toggle="collapse"
                    target="sidebar"
                    expanded="false"><span class="navbar-toggler-icon"></span></x-button>
        </x-navbar.collapse>
    </x-slot>

    <x-slot name="sidebar">
        <x-sidebar id="sidebar" light>
            @include('website::partials.sidebar-links')
        </x-sidebar>
    </x-slot>

    @include('website::partials.head')
</x-dashboard>
