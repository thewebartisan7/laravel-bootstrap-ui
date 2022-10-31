<div class="row setting setting-delete">
  <div class="setting__title col-md-4">
    <div>
      <h4>{{ __('Delete Account') }}</h4>
      <p class="text-muted">{{ __('Permanently delete your account.') }}</p>
    </div>
  </div>
  <div class="setting__form col-md-8">
    <x-card class="shadow border-danger">
      <x-form :action="route('account.destroy')" method="DELETE">
        <x-card.body class="border-danger border-2">
          <p class="text-muted">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
          </p>

          <div class="form-group">
            <input type="password" name="password" id="password" class="form-control"
                   placeholder="{{ __('Current Password') }}" required>
          </div>

          <p class="form-text">
            {{ __('Please enter your password to confirm you would like to permanently delete your account.') }}
          </p>
        </x-card.body>
        <x-card.footer class="text-end border-top-0">
          <button type="submit" class="btn btn-danger">{{ __('Confirm') }}</button>
        </x-card.footer>
      </x-form>
    </x-card>
  </div>
</div>
