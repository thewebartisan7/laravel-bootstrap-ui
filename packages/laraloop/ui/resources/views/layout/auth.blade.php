<x-html {{ $attributes->class('auth d-flex align-items-center min-vh-100 bg-light') }} :title="$title ?? ''" :css="$css ?? null" :js="$js ?? null">
    <main class="auth__main container px-0 px-sm-3 py-4 mx-auto w-100">
        <div class="row g-0 justify-content-center">
            <div class="col-12 col-md-7 col-lg-5 col-xxl-4">
                <header class="auth__header">
                    <div class="auth__logo mb-4 text-center">
                        @includeIf('partials.brand', ['width' => 150])
                    </div>
                </header>

                <div class="auth__content card shadow border-0">
                    <div class="card-body p-5">
                        @isset($header)
                            <div class="auth__title mb-4">{{ $header }}</div>
                        @endisset

                        {{ $slot }}
                    </div>
                </div>

                <footer class="auth__footer mt-4 text-muted text-center">
                    @isset($footer))
                        {{ $footer }}
                    @else
                        @includeIf('partials.copyright')
                    @endisset
                </footer>
            </div>
        </div>
    </main>
</x-html>
