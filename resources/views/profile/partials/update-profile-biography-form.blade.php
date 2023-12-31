<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('update biography') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your biography.") }}
        </p>
    </header>

    <form id="send-verification-biography" method="post" action="{{ route('update.bio') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.updateBio') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="biography" :value="__('Biography')" />
            <x-text-input id="biography" name="biography" type="text" class="mt-1 block w-full" :value="old('biography', $user->biography)" required autofocus autocomplete="biography" />
            <x-input-error class="mt-2" :messages="$errors->get('biography')" />
        </div>

    

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
