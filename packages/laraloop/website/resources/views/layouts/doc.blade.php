<x-dashboard :title="$title ?? 'Documentation'" css="/css/purple.css">
  @yield('content')

  <x-slot name="header" id="main" size="fluid" color="dark" sticky dark expand>
    <x-navbar.brand class="d-inline-block py-0 col-md-3 col-lg-2 pe-2 ps-1" src="static/brand/logo.svg"/>

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
    <x-sidebar id="sidebar" fixed light>
      @include('website::partials.sidebar-links')
    </x-sidebar>
  </x-slot>

  @include('website::partials.head')
</x-dashboard>

