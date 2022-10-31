<div class="row setting setting-avatar">
  <div class="setting__title col-md-4">
    <div>
      <h4>{{ __('Avatar') }}</h4>
      <p class="text-muted">{{ __('Upload and crop custom avatar.') }}</p>
    </div>
  </div>
  <div class="setting__form col-md-8">
    <x-card class="shadow border-0">
      <x-form :action="route('account.update_avatar')" method="PUT" card-class="card border-danger border-2">
        <x-card.body>
          <div class="m-3">
            <div class="d-sm-flex align-items-center">
              <div class="mr-4">
                <img src="{{ $user->avatar_url }}" alt="{{ $user->name }}" class="rounded-circle" width="120"
                     data-user-avatar>
              </div>
              <div class="mr-4 my-4 my-sm-0">
                <label for="avatar" class="btn btn-primary">
                  {{ __('Change avatar') }}
                  <input type="file" name="avatar" id="avatar" accept="image/*" class="d-none" data-croppie-file
                         data-viewport-width="200" data-viewport-height="200"
                         data-boundary-width="300" data-boundary-height="300">
                </label>
              </div>
              <div>
                <a href="{{ route('account.update_avatar') }}"
                   class="btn btn-danger @empty($user->avatar) d-none @endempty" type="button"
                   data-delete-file="avatar">{{ __('Delete') }}</a>
              </div>
            </div>
          </div>
        </x-card.body>
        <x-card.footer class="text-end border-top-0">
          <x-button type="submit" color="primary" small>@lang('Upload')</x-button>
        </x-card.footer>
      </x-form>
    </x-card>
  </div>
</div>
