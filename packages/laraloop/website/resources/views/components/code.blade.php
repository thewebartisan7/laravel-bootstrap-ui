@props([
    'language' => 'html'
])

<x-card class="mb-4 bg-dark">
    <pre class="m-0"><code class="language-{{ $language }}">{{ e($slot) }}</code></pre>
</x-card>
