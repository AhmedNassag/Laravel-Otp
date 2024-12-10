<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('يرجي إرسال كود التحقق المرسل إليكم.') }}
    </div>

    <form method="POST" action="{{ route('otp.store') }}">
        @csrf

        <!-- otp_code -->
        <div>
            <x-input-label for="otp_code" :value="__('كود التحقق')" />

            <x-text-input id="otp_code" class="block mt-1 w-full" type="text" name="otp_code" required />

            <x-input-error :messages="$errors->get('message')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button>
                {{ __('تأكيد') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
