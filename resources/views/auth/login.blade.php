<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tilt+Prism&display=swap" rel="stylesheet">

<x-guest-layout>
    <div class="login-page" style="background-color: #f0f0f5;">
        <head>
            <style>
                body {
                    background-color: #f0f0f5;
                    /* Subtle dark background for the whole page */
                }

                .login-form {
                    background: #f5f5f5;
                    /* Subtle darker color for the form */
                    padding: 30px;
                    border-radius: 20px;
                    border: 1px solid #000;
                    /* Thin black border around the login form */
                    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
                    margin: 50px auto;
                    max-width: 400px;
                    /* Limiting the form width */
                }

                .input-group {
                    margin-bottom: 20px;
                }

                .input-field {
                    border: 1px solid #ccc;
                    padding: 10px;
                    border-radius: 5px;
                }

                .login-button {
                    background: #007bff;
                    color: #fff;
                    padding: 10px 20px;
                    border-radius: 5px;
                    cursor: pointer;
                    transition: 0.3s;
                }

                .login-button:hover {
                    background: #0056b3;
                }
            </style>
        </head>
        <x-jet-authentication-card>
            <x-slot name="logo">
                <!-- Cloud Hosting Icon -->
                <div style="display: flex; flex-direction: column; align-items: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100px" height="100px" viewBox="-10 0 436 436.881" id="cloud-hosting">
                        <path fill="#00acea" d="M407.210938 384c10.464843 10.425781 12.109374 26.792969 3.921874 39.085938-8.1875 12.296874-23.921874 17.089843-37.578124 11.453124-13.652344-5.640624-21.417969-20.140624-18.542969-34.628906 2.875-14.488281 15.585937-24.929687 30.359375-24.929687 8.191406-.019531 16.050781 3.226562 21.839844 9.019531zm0 0M230.21875 384c10.46875 10.425781 12.109375 26.792969 3.921875 39.085938-8.1875 12.296874-23.921875 17.089843-37.574219 11.453124-13.652344-5.640624-21.417968-20.140624-18.542968-34.628906 2.875-14.488281 15.585937-24.929687 30.355468-24.929687 8.191406-.019531 16.054688 3.226562 21.839844 9.019531zm0 0M53.230469 384c10.464843 10.425781 12.109375 26.792969 3.921875 39.085938-8.1875 12.296874-23.921875 17.089843-37.574219 11.453124-13.65625-5.640624-21.421875-20.140624-18.546875-34.628906 2.875-14.488281 15.585938-24.929687 30.359375-24.929687 8.191406-.019531 16.050781 3.226562 21.839844 9.019531zm0 0"></path>
                        <path fill="#f4b844" d="m35.378906 337.992188c4.417969 0 8-3.582032 8-8v-52.851563c-.058594-3.125 1.152344-6.144531 3.355469-8.363281 2.203125-2.222656 5.207031-3.457032 8.335937-3.425782h145.308594v64.640626c0 4.417968 3.582032 8 8 8 4.417969 0 8-3.582032 8-8v-64.640626h145.101563c3.148437-.039062 6.183593 1.183594 8.421875 3.402344 2.234375 2.214844 3.488281 5.238282 3.476562 8.386719v52.851563c0 4.417968 3.582032 8 8 8 4.417969 0 8-3.582032 8-8v-52.851563c.007813-7.390625-2.933594-14.480469-8.171875-19.695313-5.234375-5.214843-12.335937-8.128906-19.726562-8.09375h-145.101563v-50.5c0-4.417968-3.582031-8-8-8-4.417968 0-8 3.582032-8 8v50.5h-145.308594c-7.371093-.027343-14.441406 2.894532-19.644531 8.117188-5.203125 5.21875-8.097656 12.304688-8.046875 19.671875v52.851563c0 4.417968 3.582032 8 8 8zm0 0"></path>
                        <path fill="#00efd1" d="m357.378906 138.761719h.152344c0 33.1875-26.90625 60.089843-60.089844 60.089843h-178.121094c-33.1875 0-60.089843-26.902343-60.089843-60.089843h.011719c-.011719-.898438-.011719-.5-.011719-.640625-.007813-38.28125 28.609375-70.527344 66.621093-75.070313 11.804688-41.625 52.492188-68.179687 95.347657-62.226562s74.765625 42.589843 74.78125 85.855469c0 .363281 0 .730468-.011719 1.101562 3.269531-.574219 6.585938-.824219 9.902344-.75 13.699218 0 26.832031 5.457031 36.5 15.164062 9.667968 9.707032 15.066406 22.867188 15.007812 36.566407zm0 0"></path>
                    </svg>
                    <div style="text-align: center; margin-top: 20px; font-size: 60px;  font-family: 'Tilt Prism', cursive;">
                        <span style="font-weight: bold;">COLLAB</span>
                        <span style="font-weight: normal;">CLOUD</span>
                    </div>
                </div>
            </x-slot>


            <x-jet-validation-errors class="mb-4" />

            @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="login-form">
                @csrf

                <div class="input-group">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="input-field block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <div class="input-group mt-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="input-field block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                </div>

                <div class="checkbox-block mt-4">
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

                    <x-jet-button class="login-button ml-4">
                        {{ __('Log in') }}
                    </x-jet-button>
                </div>
            </form>
        </x-jet-authentication-card>
        </div>
</x-guest-layout>