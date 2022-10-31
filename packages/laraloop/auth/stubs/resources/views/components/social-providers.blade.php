@isset($providers)
    <p class="divider-text position-relative text-center my-4">
        <span class="position-relative text-muted small p-3 text-uppercase">{{ __('or connect with') }}</span>
    </p>
    <div class="row gx-3 justify-content-center" data-turbo="false">
        @foreach($providers as $provider)
            <div class="col-4 mb-3">
                <a href="{{ route('social.redirect', ['provider' => $provider]) }}"
                   class="btn btn-outline-secondary btn-sm btn-block"
                   data-toggle="tooltip"
                   title="{{ ucfirst($provider) }}">
                    <x-icon :name="$provider" width="32" height="32"/>
                </a>
            </div>
        @endforeach
    </div>
@endisset
