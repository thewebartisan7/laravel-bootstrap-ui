<x-auth class="auth--confirm-email">
    <x-slot name="header">
        <h2>{{ __('Reset Password') }}</h2>
        <span class="text-muted">{{ __('Fill the form to reset your password.') }}</span>
    </x-slot>

    <x-form :action="route('password.email')" method="post">

        <x-alert class="mb-4" type="info" icon="info-circle">
            {{ __('Write below your email address and we will email you a password reset link.') }}
        </x-alert>

        <x-form.group name="email" :error="$errors->first('email')" floating>
            <x-form.input type="email" name="email"
                          size="lg" :placeholder="__('E-Mail Address')" autocomplete="email"
                          :has-error="$errors->has('email')"
                          maxlength="255" required
                          autofocus/>
            <x-form.label :value="__('E-Mail Address')" for="email"/>
        </x-form.group>

        <button class="btn btn-lg btn-primary w-100" type="submit">{{ __('Email Password Reset Link') }}</button>

        <div class="mt-4">{{ __('Back to') }} <a href="{{ route('login') }}" class="text-decoration-none ms-1">{{ __('Sign In') }}</a></div>
    </x-form>
</x-auth>
