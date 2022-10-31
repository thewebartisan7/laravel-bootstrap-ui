@if($url)
    <a href="{{ $url }}" @if($src) style="background-image: url('{{ $src }}')" @endif {{ $attributes->merge(['class' => "avatar $classes"]) }}>
        {{ $initials ?? '' }}
        @if($status)
            <span class="avatar-status avatar-status-{{ $status }}" data-toggle="tooltip" data-title="{{ ucfirst(__($status)) }}"></span>
        @endif
    </a>
@else
    <span {{ $attributes->merge(['class' => "avatar {$classes}"]) }} @if($src) style="background-image: url('{{ $src }}')" @endif>
        {{ $initials ?? '' }}
        @if($status)
            <span class="avatar-status avatar-status-{{ $status }}" data-toggle="tooltip" data-title="{{ ucfirst(__($status)) }}"></span>
        @endif
    </span>
@endif

