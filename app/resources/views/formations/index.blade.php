<x-app-layout>
    <x-slot name="header">
        <div class="rounded-[28px] border border-white/70 bg-white/80 p-6 shadow-lg shadow-slate-200/60 backdrop-blur sm:p-8">
            <div class="flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
                <div class="max-w-2xl">
                    <span class="inline-flex items-center rounded-full bg-blue-50 px-3 py-1 text-xs font-semibold uppercase tracking-[0.2em] text-blue-700">
                        Catalogue
                    </span>
                    <h1 class="mt-4 text-3xl font-semibold tracking-tight text-slate-950">
                        Formations disponibles
                    </h1>
                    <p class="mt-2 text-sm leading-7 text-slate-500 sm:text-base">
                        Explorez les modules proposes dans un affichage moderne, responsive et simple a parcourir.
                    </p>
                </div>

                <div class="rounded-2xl bg-slate-950 px-5 py-4 text-white shadow-lg shadow-slate-900/10">
                    <p class="text-xs font-medium uppercase tracking-[0.2em] text-slate-400">Total</p>
                    <p class="mt-2 text-3xl font-semibold">{{ $formations->count() }}</p>
                    <p class="text-sm text-slate-300">formations actives</p>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="pb-12 pt-4">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 xl:grid-cols-3">
                @forelse ($formations as $formation)
                    <article class="group relative overflow-hidden rounded-xl border border-slate-200 bg-white p-6 shadow-md transition duration-300 hover:-translate-y-1 hover:scale-[1.01] hover:shadow-lg">
                        <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-blue-500 via-indigo-500 to-slate-900"></div>

                        <div class="flex items-start justify-between gap-4">
                            <h2 class="pr-4 text-xl font-semibold tracking-tight text-slate-900">
                                {{ $formation->titre }}
                            </h2>

                            <span class="shrink-0 rounded-full bg-blue-50 px-3 py-1 text-xs font-semibold text-blue-700 ring-1 ring-blue-100">
                                {{ $formation->duree }}
                            </span>
                        </div>

                        <p class="mt-4 text-sm leading-7 text-slate-600">
                            {{ $formation->description }}
                        </p>

                        <div class="mt-6 flex items-center justify-between">
                            <span class="text-sm font-medium text-slate-400">Programme disponible</span>
                            <button class="inline-flex items-center justify-center rounded-xl bg-slate-950 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-indigo-600">
                                Voir details
                            </button>
                        </div>
                    </article>
                @empty
                    <div class="col-span-full rounded-[28px] border border-dashed border-slate-300 bg-white/80 p-10 text-center shadow-sm">
                        <h2 class="text-xl font-semibold text-slate-900">Aucune formation disponible</h2>
                        <p class="mt-3 text-sm leading-7 text-slate-500">
                            Ajoutez une formation pour remplir ce catalogue et enrichir le dashboard.
                        </p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
