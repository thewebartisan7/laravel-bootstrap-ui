@props([
    'method' => 'post',
    'hasFile' => false
])

<form {{ $attributes->merge([
    'method' => strtoupper($method) !== 'GET' ? 'POST' : 'GET',
    'enctype' => $hasFile ? 'multipart/form-data' : false
]) }}>
    @if(strtoupper($method) !== 'GET')
        @csrf
    @endif

    @if(! in_array(strtoupper($method), ['GET', 'POST']))
        @method(strtoupper($method))
    @endif

    {{ $slot }}
</form>
