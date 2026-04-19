<x-guest-layout>
    <div class="mb-6">
        <p class="text-sm font-medium uppercase tracking-[0.2em] text-blue-200">Login</p>
    </div>

    <x-auth-session-status class="mb-4 rounded-2xl border border-emerald-500/20 bg-emerald-500/10 px-4 py-3 text-sm text-emerald-200" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <x-input-label for="email" :value="__('Email')" class="text-sm font-medium text-slate-200" />
            <x-text-input id="email" class="mt-2 block w-full rounded-2xl border border-white/10 bg-slate-900/70 px-4 py-3 text-white placeholder:text-slate-500 focus:border-blue-400 focus:ring-blue-400" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="you@example.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="text-sm font-medium text-slate-200" />

            <x-text-input id="password" class="mt-2 block w-full rounded-2xl border border-white/10 bg-slate-900/70 px-4 py-3 text-white placeholder:text-slate-500 focus:border-blue-400 focus:ring-blue-400"
                            type="password"
                            name="password"
                            required autocomplete="current-password"
                            placeholder="Votre mot de passe" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-white/20 bg-slate-900 text-blue-500 shadow-sm focus:ring-blue-500 focus:ring-offset-0" name="remember">
                <span class="ms-2 text-sm text-slate-300">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="mt-6 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            @if (Route::has('password.request'))
                <a class="text-sm text-slate-300 transition hover:text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-0" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="justify-center rounded-2xl bg-gradient-to-r from-blue-500 to-indigo-500 px-5 py-3 text-sm font-semibold normal-case tracking-normal text-white hover:from-blue-400 hover:to-indigo-400 focus:ring-blue-400">
                {{ __('Log in') }}
            </x-primary-button>
        </div>

        <p class="mt-6 text-sm text-slate-300">
            Vous n'avez pas encore de compte ?
            <a href="{{ route('register') }}" class="font-semibold text-white transition hover:text-blue-200">Creer un compte</a>
        </p>
    </form>
</x-guest-layout>
