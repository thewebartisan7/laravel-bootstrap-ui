<x-auth class="auth--reset-password">
    <x-slot name="header">
        {{ __('Set new password using below form') }} <a href="{{ route('login') }}">{{ __('or login') }}</a>
    </x-slot>

    <x-form :action="route('password.update')" method="POST">
        <input type="hidden" name="token" value="{{ $token }}">

        <x-form-group name="email" :error="$errors->first('email')">
            <x-form-label :value="__('E-Mail Address')" for="email" class="visually-hidden" />
            <x-form-input type="email" name="email" :value="$email"
                          size="lg" :placeholder="__('E-Mail Address')" autocomplete="email"
                          :has-error="$errors->has('email')"
                          maxlength="255" minlength="5" required/>
        </x-form-group>

        <x-form-group name="password" :error="$errors->first('password')">
            <x-form-label :value="__('Password')" for="password" class="visually-hidden" />
            <x-form-input type="password" name="password"
                          size="lg" :placeholder="__('Password')" autocomplete="new-password"
                          :has-error="$errors->has('password')"
                          maxlength="30" minlength="8" required/>
        </x-form-group>

        <x-form-group name="password_confirmation">
            <x-form-label :value="__('Confirm Password')" for="password_confirmation" class="visually-hidden" />
            <x-form-input type="password" name="password_confirmation"
                          size="lg" :placeholder="__('Confirm Password')" autocomplete="new-password"
                          maxlength="30" minlength="8" required/>
        </x-form-group>

        <button type="submit" class="btn btn-primary btn-lg btn-block">{{ __('Reset Password') }}</button>
    </x-form>
</x-auth>
