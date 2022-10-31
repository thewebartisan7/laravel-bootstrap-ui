<x-cover :title="$title ?? 'Laraloop'" css="/css/purple.css">
    <h1 class="display-1 fw-bold mb-4">Build the web with Laraloop</h1>
    <p class="lead mb-4">Laraloop enhance your web application development workflow by managing all repetitive tasks.</p>
    <p class="lead">
        <a href="/home" class="btn btn-lg btn-secondary fw-bold border-white bg-white me-3">Get started</a>
    </p>

    <x-slot name="header">
        <div>
            <h3 class="float-md-start mb-3 mb-md-0">
                @includeIf('partials.brand', ['src' => 'static/brand/logo.svg', 'width' => 150])
            </h3>
            <nav class="nav justify-content-center float-md-end">
                @include('website::partials.nav-links')
            </nav>
        </div>
    </x-slot>

    @include('website::partials.head')
</x-cover>
