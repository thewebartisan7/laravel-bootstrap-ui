<div class="row setting setting-password">
  <div class="setting__title col-md-4">
    <div>
      <h4>{{ __('Update Password') }}</h4>
      <p class="text-muted">{{ __('Ensure your account is using a long, random password to stay secure.') }}</p>
    </div>
  </div>
  <div class="setting__form col-md-8">
    <x-card class="shadow border-0">
      <x-form :action="route('account.update_password')" method="PUT">
        <x-card.body>
          <x-form.horizontal name="current_password" :label="__('Current Password')" bag="updatePassword">
            <x-form.input type="password" name="current_password" :placeholder="__('Current Password')"
                          :has-error="$errors->updatePassword->has('current_password')" required/>
          </x-form.horizontal>

          <x-form.horizontal name="password" :label="__('New Password')" bag="updatePassword">
            <x-form.input type="password" name="password" :placeholder="__('New Password')"
                          :has-error="$errors->updatePassword->has('password')" required/>
          </x-form.horizontal>

          <x-form.horizontal name="password_confirmation" :label="__('Confirm Password')">
            <x-form.input type="password" name="password_confirmation" :placeholder="__('Confirm Password')" required/>
          </x-form.horizontal>
        </x-card.body>
        <x-card.footer class="text-end border-top-0">
          <x-button type="submit" color="primary">{{ __('Save') }}</x-button>
        </x-card.footer>
      </x-form>
    </x-card>
  </div>
</div>
