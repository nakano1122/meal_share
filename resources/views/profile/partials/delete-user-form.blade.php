<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('アカウントの削除') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('一度アカウントを削除すると、データを復元することができません。') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('アカウントを削除する') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('本当に削除しますか？') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('一度アカウントを削除すると、データを復元することができません。アカウントを削除される場合はパスワードを入力してください。') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('パスワードを入力してください') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('キャンセル') }}
                </x-secondary-button>

                <x-danger-button class="ml-3">
                    {{ __('アカウントを削除する') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
