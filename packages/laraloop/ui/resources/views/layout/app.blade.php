<x-html {{ $attributes->class('app d-flex flex-column min-vh-100') }} :title="$title ?? ''" :css="$css ?? null" :js="$js ?? null">
  <x-navbar class="app__header"
            size="{{ $header->attributes->get('size') }}"
            color="{{ $header->attributes->get('color') }}"
            :sticky="$header->attributes->get('sticky') === true ? : $header->attributes->get('sticky')"
            :expand="$header->attributes->get('expand') === true ? : $header->attributes->get('expand')"
            :dark="$header->attributes->has('dark')">{{ $header }}</x-navbar>

  <main class="app__main flex-shrink-0">
    <div class="app__content container py-5">
      {{ $slot }}
    </div>
  </main>

  <footer class="app__footer mt-auto py-4">
    @isset($footer))
    {{ $footer }}
    @else
      <div class="container">
        <p class="text-body mb-0 text-center">
          @includeIf('partials.copyright')
        </p>
      </div>
    @endisset
  </footer>
</x-html>
