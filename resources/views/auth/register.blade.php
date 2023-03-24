<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="member-login-form-body">
                <div class="mb-4">
                    <label class="form-label mb-2" for="member-login-number">CIN</label>
                    <input type="text" name="cin" id="cin" class="form-control"  required>
                </div>
                <div class="mb-4">
                    <label class="form-label mb-2" for="member-login-number">Nom</label>
                    <input type="text" name="Nom" id="Nom" class="form-control"  required>
                </div>
                <div class="mb-4">
                    <label class="form-label mb-2" for="member-login-number">Prenom</label>
                    <input type="text" name="Prenom" id="Prenom" class="form-control"  required>
                </div>
                <div class="mb-4">
                    <label class="form-label mb-2" for="member-login-number">Tel</label>
                    <input type="text" name="Tel" id="Tel" class="form-control"  required>
                </div>
                <div class="mb-4">
                    <label class="form-label mb-2" for="member-login-number">Adresse</label>
                    <input type="text" name="Adresse" id="Adresse" class="form-control"  required>
                </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
