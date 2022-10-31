@if (config('session.driver') === 'database')
  <hr class="my-5 invisible">
  <div class="row setting setting-sessions">
    <div class="setting__title col-md-4">
      <div>
        <h4>{{ __('Browser Sessions') }}</h4>
        <p class="text-muted">
          {{ __('Manage and logout your active sessions on other browsers and devices.') }}
          {{ __(' If necessary, you may logout of all of your other browser sessions across all of your devices. If you feel your account has been compromised, you should also update your password. ') }}
        </p>
      </div>
    </div>
    <div class="setting__form col-md-8">
      <x-card class="shadow border-0">
        <x-form :action="route('account.logout_other_browser_sessions')" method="DELETE">
          <x-card.body>
            @if (count($sessions) > 0)
              <div class="mb-4">
                @foreach ($sessions as $session)
                  <div class="d-flex align-items-center" @if (!$session->is_current_device) data-other-sessions @endif>
                    <div>
                      @if ($session->agent->isDesktop())
                        <x-icon name="display" width="3em" height="3em"/>
                      @elseif ($session->agent->isMobile())
                        <x-icon name="phone" width="3em" height="3em"/>
                      @elseif ($session->agent->isTablet())
                        <x-icon name="tablet" width="3em" height="3em"/>
                      @endif
                    </div>
                    <div class="ml-3">
                      <h5 class="mb-0">
                        {{ $session->agent->platform() }} &middot; {{ $session->agent->browser() }}
                      </h5>
                      <p class="text-muted mb-0">
                        {{ $session->ip_address }} &middot;
                        @if ($session->is_current_device)
                          <span class="text-success">{{ __('This device') }}</span>
                        @else
                          <time>{{ __('Last active') }} {{ $session->last_active }}</time>
                        @endif
                      </p>
                    </div>
                  </div>
                  @if (!$loop->last)
                    <hr data-other-sessions> @endif
                @endforeach
              </div>
            @endif

            <div class="form-group">
              <input type="password" name="password" id="password" class="form-control"
                     placeholder="{{ __('Current Password') }}" required>
            </div>

            <p
              class="form-text">{{ __('Please enter your password to confirm you would like to logout of your other browser sessions across all of your devices.') }}</p>

          </x-card.body>
          <x-card.footer class="text-end border-top-0">
            <x-button type="submit" color="danger">{{ __('Logout Other Sessions') }}</x-button>
          </x-card.footer>
        </x-form>
      </x-card>
    </div>
  </div>
@endif
