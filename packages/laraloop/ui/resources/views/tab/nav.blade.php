@aware([
    'id'
])

<x-nav id="{{ $id }}Tab" role="tablist" {{ $attributes }} tabs>
    {{ $slot }}
</x-nav>
