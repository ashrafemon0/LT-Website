{{--<x-guest-layout>--}}
{{--    <x-authentication-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <img class="bg-white-100" style="width: 120px;height: 120px" src="fontend/assets/images/logo-log.png" alt="">--}}
{{--        </x-slot>--}}

{{--        <x-validation-errors class="mb-4 border-black-2" />--}}

{{--        <form method="POST" action="{{ route('register') }}">--}}
{{--            @csrf--}}

{{--            <div>--}}
{{--                <x-label for="name" value="{{ __('Name') }}" />--}}
{{--                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-label for="email" value="{{ __('Email') }}" />--}}
{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-label for="password" value="{{ __('Password') }}" />--}}
{{--                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />--}}
{{--                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />--}}
{{--            </div>--}}

{{--            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())--}}
{{--                <div class="mt-4">--}}
{{--                    <x-label for="terms">--}}
{{--                        <div class="flex items-center">--}}
{{--                            <x-checkbox name="terms" id="terms" required />--}}

{{--                            <div class="ml-2">--}}
{{--                                {!! __('I agree to the :terms_of_service and :privacy_policy', [--}}
{{--                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',--}}
{{--                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',--}}
{{--                                ]) !!}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </x-label>--}}
{{--                </div>--}}
{{--            @endif--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">--}}
{{--                    {{ __('Already registered?') }}--}}
{{--                </a>--}}

{{--                <x-button class="ml-4">--}}
{{--                    {{ __('Register') }}--}}
{{--                </x-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-authentication-card>--}}
{{--</x-guest-layout>--}}
<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div>
            <img class="w-24 h-24" src="fontend/assets/images/logo-log.png" alt="Logo">
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <h2 class="text-center text-2xl font-semibold text-gray-800">Register</h2>

            <x-validation-errors :errors="$errors" />

            <form method="POST" action="{{ route('register') }}" class="mt-4">
                @csrf

                <div>
                    <label for="name" class="block font-medium text-gray-700">Name</label>
                    <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" class="form-input rounded-md shadow-sm mt-1 block w-full" />
                </div>

                <div class="mt-4">
                    <label for="email" class="block font-medium text-gray-700">Email</label>
                    <input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" class="form-input rounded-md shadow-sm mt-1 block w-full" />
                </div>

                <div class="mt-4">
                    <label for="password" class="block font-medium text-gray-700">Password</label>
                    <input id="password" type="password" name="password" required autocomplete="new-password" class="form-input rounded-md shadow-sm mt-1 block w-full" />
                </div>

                <div class="mt-4">
                    <label for="password_confirmation" class="block font-medium text-gray-700">Confirm Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="form-input rounded-md shadow-sm mt-1 block w-full" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <label for="terms" class="flex items-center">
                            <x-checkbox name="terms" id="terms" required class="mr-2" />
                            <span class="text-sm text-gray-600">
                                I agree to the
                                <a target="_blank" href="{{ route('terms.show') }}" class="underline">Terms of Service</a> and
                                <a target="_blank" href="{{ route('policy.show') }}" class="underline">Privacy Policy</a>
                            </span>
                        </label>
                    </div>
                @endif

                <div class="mt-4">
                    <button type="submit" class="w-full bg-indigo-600 text-white font-semibold py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-indigo-200">
                        Register
                    </button>
                </div>
            </form>

            <div class="mt-4 text-center">
                <a href="{{ route('login') }}" class="text-sm text-indigo-600 hover:text-indigo-800 underline">Already registered? Login</a>
            </div>
        </div>
    </div>
</x-guest-layout>
