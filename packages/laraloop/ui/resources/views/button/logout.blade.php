@props([
    'action' => route('logout'),
    'method' => 'POST'
])

<x-form action="{{ $action }}" method="{{ $method }}">
    <button type="submit" {{ $attributes }}>{{ $slot->isEmpty() ? __('Log out') : $slot }}</button>
</x-form>
