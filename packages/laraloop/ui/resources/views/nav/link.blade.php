@aware([
    'to',
    'params' => [],
    'disabled' => false,
])
<x-link class="nav-link" :to="$to" :params="$params" :disabled="$disabled">{{ $slot }}</x-link>
