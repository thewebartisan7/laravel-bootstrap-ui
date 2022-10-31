<x-auth class="auth--confirm-password">
    <x-slot name="header">
        <p class="text-muted mb-0">
            {{ __('Confirm Password') }} @if (Route::has('password.request')) <a href="{{ route('password.request') }}">{{ __('Forgot Password?') }}</a> @endif
        </p>
    </x-slot>

    <x-form :action="route('password.confirm')" method="post">

        <x-alert type="warning">
            {{ __('Please confirm your password before continuing.') }}
        </x-alert>

        <x-form-group name="password" :error="$errors->first('password')">
            <x-form-label :value="__('Password')" for="password" class="visually-hidden" />
            <x-form-input type="password" name="password"
                          size="lg" :placeholder="__('Password')" autocomplete="current-password"
                          :has-error="$errors->has('password')"
                          minlength="8"/>
        </x-form-group>

        <button class="btn btn-lg btn-primary btn-block" type="submit">{{ __('Confirm Password') }}</button>
    </x-form>
</x-auth>
