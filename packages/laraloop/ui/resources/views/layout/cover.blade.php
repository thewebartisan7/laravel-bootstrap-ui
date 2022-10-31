<x-html {{ $attributes->class('cover d-flex min-vh-100 text-center text-white bg-primary') }} :title="$title ?? ''" :css="$css ?? null" :js="$js ?? null">
    <main class="cover-main d-flex w-100 min-vh-100 p-3 mx-auto flex-column">
        <header class="cover-header mb-auto">
            {{ $header }}
        </header>

        <div class="cover-content px-3">
            {{ $slot }}
        </div>

        <footer class="cover-footer mt-auto text-white">
            @isset($footer))
                {{ $footer }}
            @else
                @includeIf('partials.copyright')
            @endisset
        </footer>
    </main>
</x-html>
