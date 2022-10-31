<x-app :title="$title ?? 'Laraloop'" css="/css/purple.css">
  @yield('content')

  <x-slot name="header" sticky="lg" color="white" expand>
    <div class="d-block d-lg-flex justify-content-between align-items-center w-100">
      <div class="col-lg-2">
        <x-navbar.brand src="static/brand/logo-inverted.svg" width="auto" height="30"
                        class="d-flex justify-content-center justify-content-lg-start align-items-center mb-3 mb-lg-0 text-dark text-decoration-none"/>
      </div>

      <div class="col-lg-8">
        <x-nav.scroller>
          <nav class="nav navbar-nav d-flex justify-content-between justify-content-lg-center">
            @include('website::partials.nav-links')
          </nav>
        </x-nav.scroller>
      </div>

      <div class="col-lg-2 text-end d-none d-lg-block">
        <a href="/download" class="btn btn-primary"><x-icon name="github" class="position-relative" style="top: -2px;"/> GitHub</a>
      </div>
    </div>
  </x-slot>

  @include('website::partials.head')
</x-app>

