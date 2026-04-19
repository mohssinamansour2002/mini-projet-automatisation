<x-app-layout>
    <div class="pb-10 pt-6">
        <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
            <section class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8 lg:p-10">
                <span class="inline-flex items-center rounded-full bg-blue-50 px-3 py-1 text-xs font-semibold uppercase tracking-[0.18em] text-blue-700">
                    Dashboard
                </span>

                <div class="mt-6 space-y-5">
                    <h1 class="text-3xl font-semibold tracking-tight text-slate-950 sm:text-4xl">
                        Bienvenue sur votre espace de gestion.
                    </h1>

                    <p class="max-w-3xl text-sm leading-7 text-slate-600 sm:text-base">
                        Cette interface vous permet d'acceder rapidement aux formations disponibles
                        et de gerer votre profil dans un espace simple, propre et facile a utiliser.
                    </p>
                </div>

                <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                    <a
                        href="{{ route('formations.index') }}"
                        class="inline-flex items-center justify-center rounded-xl bg-blue-600 px-5 py-3 text-sm font-semibold text-white transition hover:bg-blue-700"
                    >
                        Voir les formations
                    </a>

                    <a
                        href="{{ route('profile.edit') }}"
                        class="inline-flex items-center justify-center rounded-xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-700 transition hover:bg-slate-50"
                    >
                        Modifier mon profil
                    </a>
                </div>
            </section>

            <section class="mt-6 rounded-3xl border border-slate-200 bg-slate-900 p-6 text-white shadow-sm sm:p-8">
                <p class="text-xs font-semibold uppercase tracking-[0.18em] text-slate-400">
                    Compte connecte
                </p>

                <div class="mt-4 space-y-2">
                    <h2 class="text-2xl font-semibold">{{ Auth::user()->name }}</h2>
                    <p class="text-sm text-slate-300">{{ Auth::user()->email }}</p>
                </div>

                <div class="mt-6 inline-flex items-center rounded-full bg-emerald-500/15 px-3 py-1 text-xs font-semibold text-emerald-300 ring-1 ring-emerald-400/30">
                    Session active
                </div>
            </section>
        </div>
    </div>
</x-app-layout>
