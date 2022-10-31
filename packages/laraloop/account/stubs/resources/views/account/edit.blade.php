<x-app :title="__('My Account')" class="bg-light">
  <x-slot name="header" color="primary" sticky="lg" dark expand>
    <div class="d-block d-lg-flex justify-content-between align-items-center w-100">
      <x-navbar.brand
        class="d-flex justify-content-center align-items-center mb-3 mb-lg-0 text-dark text-decoration-none">
        @include('partials.brand', ['width' => 'auto', 'height' => '30', 'src' => 'static/brand/logo.svg'])
      </x-navbar.brand>

      <x-nav.scroller>
        <nav class="nav navbar-nav d-flex justify-content-between">
          <x-link to="/home" class="nav-link" active="fw-bold active">Home</x-link>
          <x-link to="/docs" class="nav-link" active="fw-bold active">Docs</x-link>
          <x-link to="/account" class="nav-link" active="fw-bold active">Account</x-link>
        </nav>
      </x-nav.scroller>
    </div>
  </x-slot>

  @if ($errors->any() || $errors->updateAccount->any() || $errors->updatePassword->any())
    <x-alert type="danger" :dismissible="true">
      <x-slot name="title">{{ __('Whoops! Something went wrong.') }}</x-slot>
      <ul class="list-unstyled mb-0">
        @foreach ($errors->any() ? $errors->all() : ($errors->updateProfileInformation->any() ? $errors->updateProfileInformation->all() : $errors->updatePassword->all()) as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </x-alert>
  @elseif(session()->has('status'))
    <x-alert type="info" :dismissible="true">
      @lang(session()->pull('status'))
    </x-alert>
  @endif

  @include("account.partials.update-profile")

  <hr class="my-5 invisible">

  @include("account.partials.update-password")

{{--  <hr class="my-5 invisible">--}}

{{--  @include("account.partials.upload-avatar")--}}

  @includeWhen(config('session.driver') === 'database', "account.partials.browser-session")

  <hr class="my-5 invisible">

  @include("account.partials.delete-form")
</x-app>
