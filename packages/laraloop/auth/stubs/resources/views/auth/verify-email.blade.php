<x-auth class="auth--verify-email">
    <x-slot name="header">
        {{ __('Verify Your Email Address') }}
    </x-slot>

    <x-form :action="route('verification.resend')" method="POST">

        @if (session('resent'))
            <x-alert type="info">
                {{ __('A fresh verification link has been sent to your email address.') }}
            </x-alert>
        @endif

        <x-alert type="warning">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </x-alert>

        <div class="d-inline">
            {{ __('Before proceeding, please check your email for a verification link.') }}
            {{ __('If you did not receive the email') }},
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">
                    {{ __('click here to request another') }}
                </button>
            </form>
        </div>
    </x-form>
</x-auth>
