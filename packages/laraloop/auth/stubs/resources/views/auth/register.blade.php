<x-auth class="auth--register">
    <x-slot name="header">
        <h2>{{ __('Sign Up') }}</h2>

        <span class="text-muted">
            {{ __('Already have an account?') }} <a href="{{ route('login') }}" class="text-decoration-none ms-2">{{ __('Login') }}</a>
        </span>
    </x-slot>

    <x-form :action="route('register')" method="POST">

        @if(session()->has('socialAccount'))
            <x-alert type="success">
                {{ __('You have successfully connected using :provider. Please to set a password which is required to manage your account.', [
                    'provider' => ucfirst(session('socialAccount.provider'))
                ]) }}
            </x-alert>
        @endif

        <x-form.group name="name" :error="$errors->first('name')" floating>
            <x-form.input type="text"
                          name="name"
                          :value="session('socialAccount.name')"
                          size="lg"
                          :placeholder="__('Name')"
                          autocomplete="name"
                          :has-error="$errors->has('name')"
                          maxlength="255"
                          minlength="3"
                          required
                          autofocus/>
            <x-form.label :value="__('Name')" for="name" />
        </x-form.group>

{{--        <x-form.group name="username" :error="$errors->first('username')" floating>--}}
{{--            <x-form.input type="text"--}}
{{--                          name="username"--}}
{{--                          :value="session('socialAccount.username')"--}}
{{--                          size="lg"--}}
{{--                          :placeholder="__('Username')"--}}
{{--                          autocomplete="username"--}}
{{--                          :has-error="$errors->has('name')"--}}
{{--                          maxlength="50"--}}
{{--                          minlength="3"--}}
{{--                          required/>--}}
{{--            <x-form.label :value="__('Username')" for="username" />--}}
{{--        </x-form.group>--}}

        <x-form.group name="email" :error="$errors->first('email')" floating>
            <x-form.input type="email"
                          name="email"
                          :value="session('socialAccount.email')"
                          size="lg"
                          :placeholder="__('E-Mail Address')"
                          autocomplete="email"
                          :has-error="$errors->has('email')"
                          maxlength="255"
                          minlength="5"
                          required/>
            <x-form.label :value="__('E-Mail Address')" for="email" />
        </x-form.group>

        <x-form.group name="password" :error="$errors->first('password')" floating>
            <x-form.input type="password"
                          name="password"
                          size="lg"
                          :placeholder="__('Password')"
                          autocomplete="new-password"
                          :has-error="$errors->has('password')"
                          maxlength="30"
                          minlength="8"
                          required/>
            <x-form.label :value="__('Password')" for="password" />
        </x-form.group>

        <x-form.group name="password_confirmation" floating>
            <x-form.input type="password"
                          name="password_confirmation"
                          size="lg"
                          :placeholder="__('Confirm Password')"
                          autocomplete="new-password"
                          maxlength="30"
                          minlength="8"
                          required/>
            <x-form.label :value="__('Confirm Password')" for="password_confirmation" />
        </x-form.group>

        <div class="mb-3">
            <div class="form-check form-switch">
                <input type="checkbox" name="remember" id="remember" class="form-check-input" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label text-muted" for="remember">{{ __('Remember me') }}</label>
            </div>
        </div>

        <button class="btn btn-lg btn-primary w-100" type="submit">{{ __('Sign Up') }}</button>
    </x-form>
</x-auth>
