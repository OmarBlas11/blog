<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
        <div class="flex flex-col justify-center items-center">
            <a href="{{ url('login/facebook') }}"><button class="bg-blue-500 my-1 md:w-80 hover:bg-blue-600 w-60 active:bg-blue-700 focus:outline-none focus:ring focus:ring-violet-300 p-2 rounded-2xl shadow-2xl"><span><i class="fa-brands fa-facebook fa-xl text-red-700"></i></span>Iniciar sesión con facebook</button></a>
            <a href="{{ url('login/google') }}"><button class="bg-red-500 my-1 md:w-80 hover:bg-red-600 w-60 active:bg-red-700 focus:outline-none focus:ring focus:ring-violet-300 p-2 rounded-2xl shadow-2xl"><span><i class="fa-brands fa-google fa-xl text-red-700"></i></span>Iniciar sesión con google</button></a>
        </div>

    </x-jet-authentication-card>
</x-guest-layout>
