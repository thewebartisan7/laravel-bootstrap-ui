@props([
    'title',
    'description',
    'code'
])

@php
    $tidy = new \tidy;
    $tidy->parseString($slot->toHtml(), [
        'show-body-only'        => true,
        'indent'                => true,
        'indent-attributes'     => true,
        'output-html'           => true,
        //'sort-attributes'       => 'alpha',
        'vertical-space'        => true,
        //'wrap-attributes'       => false,
        'wrap'                 => 0,
        'new-inline-tags'      => 'input',
        'new-blocklevel-tags'  => 'input',
    ], 'utf8');
    $tidy->cleanRepair();

    $id = \Illuminate\Support\Str::slug($title);
@endphp

<p><a id="{{ $id }}"></a></p>
<h4 style="margin-top: 70px">{{ $title }}</h4>
@isset($description)<p>{{ $description }}</p>@endif

<x-card {{ $attributes }}>
    <x-tab id="{{ $id }}">
        <x-card.header>
            <x-tab.nav class="card-header-tabs">
              <x-tab.link id="{{ $id.'-demo' }}" active>Demo</x-tab.link>
                <x-tab.link id="{{ $id.'-blade' }}">Blade</x-tab.link>
                <x-tab.link id="{{ $id.'-html' }}">HTML</x-tab.link>
            </x-tab.nav>
        </x-card.header>

        <x-tab.content>
          <x-tab.pane class="p-4" id="{{ $id.'-demo' }}" active>
            {{ $slot }}
          </x-tab.pane>

            <x-tab.pane id="{{ $id.'-blade' }}">
                <div class="bg-dark">
                    <pre class="m-0"><code class="language-html">{{ e($code) }}</code></pre>
                </div>
            </x-tab.pane>

            <x-tab.pane id="{{ $id.'-html' }}">
                <div class="bg-dark">
                    <pre class="m-0"><code class="language-html">{{ $tidy }}</code></pre>
                </div>
            </x-tab.pane>
        </x-tab.content>
    </x-tab>
</x-card>
