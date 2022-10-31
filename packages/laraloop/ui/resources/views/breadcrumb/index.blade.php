<nav {{ $attributes->merge([ 'style' => $divider ? "--bs-breadcrumb-divider: '$divider';" : null ]) }}  aria-label="{{ $label ?? 'Breadcrumb' }}">
    <ol class="breadcrumb">
      @if($slot->isEmpty())
        @foreach($links as $link)
          <x-breadcrumb.item :link="$link"/>
        @endforeach
      @else
        {{ $slot }}
      @endif
    </ol>
</nav>
