<x-link to="/home" class="nav-link" active="fw-bold active">Home</x-link>
<x-link to="/docs" class="nav-link" active="fw-bold active">Docs</x-link>
{{--<x-link to="/ui" class="nav-link" active="fw-bold active">UI</x-link>--}}
{{--<x-link to="/auth" class="nav-link" active="fw-bold active">Auth</x-link>--}}
@auth
<x-link to="/account" class="nav-link" active="fw-bold active">Account</x-link>
@else
  <x-link to="/login" class="nav-link" active="fw-bold active">Login</x-link>
@endauth
{{--<x-link to="/admin" class="nav-link" active="fw-bold active">Admin</x-link>--}}
<x-link to="/github" class="nav-link d-block d-lg-none" active="fw-bold active">GitHub</x-link>
