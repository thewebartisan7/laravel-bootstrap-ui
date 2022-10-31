<x-auth class="auth--login">
    <x-slot name="header">
        <h2>{{ __('Sign In') }}</h2>
        <span class="text-muted">
            {{ __('Have not an account yet?') }} <a href="{{ route('register') }}" class="text-decoration-none ms-2">{{ __('Register') }}</a>
        </span>
    </x-slot>

    <x-form :action="route('login')" method="post">

        @if ($errors->any())
            <x-alert type="danger">{{ __('Whoops! Something went wrong.') }}</x-alert>
        @else
            <x-alert.flash type="status" />
        @endif

        <x-form.group name="email" :error="$errors->first('email')" floating>
            <x-form.input type="text"
                          name="email"
                          :placeholder="__('E-Mail Address')"
                          autocomplete="email"
                          :has-error="$errors->has('email')"
                          size="lg"
                          maxlength="255" required
                          autofocus/>
            <x-form.label :value="__('E-Mail Address')" for="email"/>
        </x-form.group>

        <x-form.group name="password" floating>
            <x-form.input type="password"
                          name="password"
                          :placeholder="__('Password')"
                          autocomplete="current-password"
                          maxlength="30"
                          minlength="8"
                          size="lg"
                          required/>
            <x-form.label :value="__('Password')" for="password"/>
        </x-form.group>

        <x-form.group name="remember">
            <div class="d-flex justify-content-between">
                <div class="form-check form-switch">
                    <input type="checkbox" name="remember" id="remember"
                           class="form-check-input" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label text-muted" for="remember">{{ __('Remember me') }}</label>
                </div>
                @if (Route::has('password.request'))
                    <div>
                        <a class="text-decoration-none"
                           href="{{ route('password.request') }}">{{ __('Forgot password?') }}</a>
                    </div>
                @endif
            </div>
        </x-form.group>

        <button class="btn btn-primary btn-lg w-100" type="submit">{{ __('Sign In') }}</button>

        @if(config('oauth.providers'))
            <x-social-providers :providers="config('oauth.providers')"/>
        @endif
    </x-form>
</x-auth>
