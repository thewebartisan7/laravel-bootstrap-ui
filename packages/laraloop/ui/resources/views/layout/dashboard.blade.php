<x-html {{ $attributes->class('dashboard min-vh-100') }} :title="$title ?? ''" :css="$css ?? null" :js="$js ?? null">
    <x-navbar class="dashboard__header flex-shrink-0"
              :id="$id ?? null"
              size="{{ $header->attributes->get('size') }}"
              color="{{ $header->attributes->get('color') }}"
              :sticky="$header->attributes->get('sticky') === true ? : $header->attributes->get('sticky')"
              :expand="$header->attributes->get('expand') === true ? : $header->attributes->get('expand')"
              :dark="$header->attributes->has('dark')">{{ $header }}</x-navbar>

    <main class="dashboard__main container-fluid">
        <div class="dashboard__content row">
            {{ $sidebar }}

            <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-4 border-bottom">
                    <h1 class="h2">{{ $title ?? '' }}</h1>
                    {{ $actions ?? '' }}
                </div>

                <div class="flex-shrink-0">
                    {{ $slot }}
                </div>

{{--                <footer class="dashboard__footer mt-auto py-3 bg-light border-top">--}}
{{--                    <div class="container-xxl px-3 px-lg-4 px-xl-5">--}}
{{--                        @include('partials.copyright')--}}
{{--                    </div>--}}
{{--                </footer>--}}
            </div>
        </div>
    </main>
</x-html>
