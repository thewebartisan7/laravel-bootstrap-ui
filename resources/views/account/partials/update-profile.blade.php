<div class="row setting setting-profile">
  <div class="setting__title col-md-4">
    <div>
      <h4>{{ __('Profile Information') }}</h4>
      <p class="text-muted">{{ __('Update your account\'s profile information and email address.') }}</p>
    </div>
  </div>
  <div class="setting__form col-md-8">
    <x-card class="shadow border-0">
      <x-form :action="route('account.update')" method="PUT">
        <x-card.body>
          <x-form.horizontal name="name" :label="__('Name')" :error="$errors->updateProfileInformation->first('name')">
            <x-form.input type="text" name="name" :value="$user->name"
                          :placeholder="__('Name')" autocomplete="name"
                          :has-error="$errors->updateProfileInformation->has('name')"
                          maxlength="255" minlength="3" required/>
          </x-form.horizontal>

          <x-form.horizontal name="email" :label="__('E-Mail Address')"
                      :error="$errors->updateProfileInformation->first('email')">
            <x-form.input type="email" name="email" :value="$user->email"
                          :placeholder="__('E-Mail Address')" autocomplete="username"
                          :has-error="$errors->updateProfileInformation->has('email')"
                          maxlength="255" minlength="3" required/>
          </x-form.horizontal>
        </x-card.body>
        <x-card.footer class="text-end border-top-0">
          <x-button type="submit" color="primary">{{ __('Save') }}</x-button>
        </x-card.footer>
      </x-form>
    </x-card>
  </div>
</div>
