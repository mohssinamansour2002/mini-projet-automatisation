<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">
                <h3 class="text-2xl font-bold mb-4">Bienvenue dans votre espace</h3>
                <p class="text-gray-600 mb-6">
                    Application simple de gestion et consultation des formations.
                </p>

                <a href="{{ route('formations.index') }}"
                   class="inline-block bg-blue-600 text-white px-5 py-3 rounded-lg">
                    Voir les formations
                </a>
            </div>
        </div>
    </div>
</x-app-layout>