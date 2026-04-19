<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Liste des formations
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">
                <h3 class="text-2xl font-bold mb-6">Nos formations</h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach ($formations as $formation)
                        <div class="border rounded-lg p-5 shadow-sm">
                            <h4 class="text-xl font-semibold mb-2">{{ $formation['titre'] }}</h4>
                            <p class="text-gray-600 mb-3">{{ $formation['description'] }}</p>
                            <p class="text-sm text-blue-600 font-medium">Duree : {{ $formation['duree'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>