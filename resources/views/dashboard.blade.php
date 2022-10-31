<x-app :title="$title ?? 'Laraloop'">
    <div class="row d-flex align-items-center" style="min-height: calc(100vh - 89px - 56px - 48px);">
        <div class="col-12 col-md-8 offset-md-2 text-center">
            <h1 class="display-1 fw-bold mb-3">
                @auth
                    Hi, {{ auth()->user()->name }}!
                @elseauth
                    Hi, there!
                @endauth
            </h1>
        </div>
    </div>

    <x-slot name="header" size="xxl" color="primary" sticky="lg" dark expand>
        <div class="d-block d-lg-flex justify-content-between align-items-center w-100">
            <x-navbar.brand class="d-flex justify-content-center align-items-center mb-3 mb-lg-0 text-dark text-decoration-none">
                @include('partials.brand', ['width' => 'auto', 'height' => '30', 'src' => 'static/brand/logo.svg'])
            </x-navbar.brand>

            <x-nav.scroller>
                <nav class="nav navbar-nav d-flex justify-content-between">
                    <x-link to="/home" class="nav-link" active="fw-bold active">Home</x-link>
                    @auth
                        <x-link to="/account" class="nav-link" active="fw-bold active">Account</x-link>
                    @elseauth
                        <x-link to="/login" class="nav-link" active="fw-bold active">Login</x-link>
                    @endauth
                </nav>
            </x-nav.scroller>
        </div>
    </x-slot>
</x-app>

