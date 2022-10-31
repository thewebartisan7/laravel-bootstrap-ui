@props([
    'style' => 'dark',
    'position' => 'right',
])

<ul class="user-nav navbar-nav">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="userNavDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
            <svg class="bi" width="1.4em" height="1.4em" fill="currentColor">
                <use xlink:href="{{ asset('assets/svg/bootstrap-icons.svg#three-dots') }}"></use>
            </svg>
        </a>
        <ul class="dropdown-menu dropdown-menu-{{ $position }} dropdown-menu-{{ $style }}" aria-labelledby="userNavDropdown">

            {{ $slot }}

            <li><a class="dropdown-item" href="{{ route('account.show') }}">{{ __('My Account') }}</a></li>
            <li class="dropdown-divider"></li>
            <li>
                <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('form-logout').submit();">
                    <form method="POST" action="{{ route('logout') }}" id="form-logout" hidden>@csrf</form>
                    {{ __('Logout') }}
                </a>
            </li>
        </ul>
    </li>
</ul>
