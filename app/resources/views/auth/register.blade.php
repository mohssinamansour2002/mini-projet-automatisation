<x-guest-layout>
    <div class="mb-6">
        <p class="text-sm font-medium uppercase tracking-[0.2em] text-blue-200">Register</p>

    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <x-input-label for="name" :value="__('Name')" class="text-sm font-medium text-slate-200" />
            <x-text-input id="name" class="mt-2 block w-full rounded-2xl border border-white/10 bg-slate-900/70 px-4 py-3 text-white placeholder:text-slate-500 focus:border-blue-400 focus:ring-blue-400" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Votre nom" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" class="text-sm font-medium text-slate-200" />
            <x-text-input id="email" class="mt-2 block w-full rounded-2xl border border-white/10 bg-slate-900/70 px-4 py-3 text-white placeholder:text-slate-500 focus:border-blue-400 focus:ring-blue-400" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="you@example.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="text-sm font-medium text-slate-200" />

            <x-text-input id="password" class="mt-2 block w-full rounded-2xl border border-white/10 bg-slate-900/70 px-4 py-3 text-white placeholder:text-slate-500 focus:border-blue-400 focus:ring-blue-400"
                            type="password"
                            name="password"
                            required autocomplete="new-password"
                            placeholder="Mot de passe" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-sm font-medium text-slate-200" />

            <x-text-input id="password_confirmation" class="mt-2 block w-full rounded-2xl border border-white/10 bg-slate-900/70 px-4 py-3 text-white placeholder:text-slate-500 focus:border-blue-400 focus:ring-blue-400"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password"
                            placeholder="Confirmer le mot de passe" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mt-6 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <a class="text-sm text-slate-300 transition hover:text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-0" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="justify-center rounded-2xl bg-gradient-to-r from-blue-500 to-indigo-500 px-5 py-3 text-sm font-semibold normal-case tracking-normal text-white hover:from-blue-400 hover:to-indigo-400 focus:ring-blue-400">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
